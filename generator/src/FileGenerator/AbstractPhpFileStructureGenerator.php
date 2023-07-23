<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\PhpNamespace;

abstract class AbstractPhpFileStructureGenerator implements PhpFileStructureGenerator, NamedPhpFileStructureGenerator
{
    public const SNAPSHOT_REGEX = '(\d+\w\d+\w)';
    public const MATCH_SNAPSHOT_REGEX = '/'. self::SNAPSHOT_REGEX .'$/';
    public const MATCH_VERSION_REGEX = '/' . self::VERSION_REGEX . '/';
    public const VERSION_REGEX = 'v?((?:\d+\.)+\d+([a-z]+\d+)?)';
    private readonly PhpNamespace $namespace;

    public function __construct(private readonly string $className, private readonly string $baseOutputPath, string $targetNamespace)
    {
        $this->namespace = new PhpNamespace($this->getFormattedNamespace($targetNamespace));

        if (1 !== preg_match('/^[A-Za-z]+[A-Za-z0-9]+$/', $this->className)) {
            throw new \InvalidArgumentException('Classname should be in the format "SomeClassName"');
        }
    }

    public function getPriority(): int
    {
        return 0;
    }

    public function registerNamespace(NamespaceRegistry $namespaceRegistry): void
    {
        $namespaceRegistry->register($this->getClassName(), sprintf('%s\\%s',
            $this->namespace->getName(),
            $this->getClassName()
        ));
    }

    public function getNamespace(): PhpNamespace
    {
        return $this->namespace;
    }

    final public function generateFromContent(NamespaceRegistry $namespaceRegistry, string $content): string
    {
        $this->setupNamespace($namespaceRegistry, $this->namespace);

        $classLike = $this->createClassFromContent($content);

        $this->getNamespace()->add($classLike);

        return (string) $this->getNamespace();
    }

    abstract public function getFamilyType(): string;

    abstract public function createClassFromContent(string $content): ClassLike;

    private function getFormattedFamilyType(): string
    {
        return ucfirst(mb_strtolower($this->getFamilyType()));
    }

    public function getFormattedNamespace(string $targetNamespace): string
    {
        if ('' === $this->getFormattedFamilyType()) {
            return $targetNamespace;
        }

        return sprintf('%s\\%s', $targetNamespace, $this->getFormattedFamilyType());
    }

    protected function getProtocolKeyByProtocolValue(array $versionToProtocolMap, int $protocol): string
    {
        if ([] === $versionToProtocolMap) {
            throw new \InvalidArgumentException('Version to protocol map is empty.');
        }

        $hash = md5(json_encode($versionToProtocolMap, JSON_THROW_ON_ERROR));

        static $localMap = [];
        if (isset($localMap[$hash]) && [] !== $localMap[$hash]) {
            return $localMap[$hash][$protocol] ?? throw new \InvalidArgumentException(sprintf('Protocol "%d" is not found.', $protocol));
        }

        foreach ($this->unifyValuesByProtocol($versionToProtocolMap) as $entry) {
            $localMap[$hash][$entry['protocol']] = $entry['protocolKey'];
        }

        return $this->getProtocolKeyByProtocolValue($versionToProtocolMap, $protocol);
    }

    public function setupNamespace(NamespaceRegistry $namespaceRegistry, PhpNamespace $namespace): void
    {
    }

    final public function getClassName(): string
    {
     	return $this->className;
    }

    final public function getFilename(): string
    {
     	return $this->className . '.php';
    }

    final public function getOutputPath(): string
    {
        $parts = [];
        $parts[] = $this->baseOutputPath;
        '' === $this->getFormattedFamilyType()
            ?: $parts[] = $this->getFormattedFamilyType();
        $parts[] = $this->getFilename();

     	return implode('/', $parts);
    }

    public function formatVersionToProtocolMap(array $versionToProtocolMap): array
    {
        return \array_map(function (array $data) {
            $data['key'] = $this->formatKey($data['version']);
            $data['original'] = $data['version'];
            $data['version'] = $this->formatVersion($data['version']);
            $data['protocolKey'] = $this->formatKey($data['versionProtocol']);
            $data['protocol'] = str_starts_with($data['protocol'], '0x')
                ? hexdec($data['protocol'])
                : (int) $data['protocol'];

            return $data;
        }, $versionToProtocolMap);
    }

    public function getSuffix(string $version): string
    {
        return match(1) {
            preg_match(self::MATCH_SNAPSHOT_REGEX, $version, $matches) => '-snapshot',
            preg_match('/alpha\s?(?:build|rev)?\s?(\d+)?/i', $version, $matches) => sprintf('-alpha%s', $matches[1] ?? ''),
            preg_match('/release.candidate.(\d+)/i', $version, $matches) => sprintf('-rc%d', $matches[1]),
            preg_match('/(?:pre.release.|pre)(\d+)/i', $version, $matches) => sprintf('-pre%d', $matches[1]),
            preg_match('/combat.test(?:.(\d+))?/i', $version, $matches) => sprintf('-combat-test%s', $matches[1] ?? ''),
            preg_match('/experimental.snapshot.(\d+)/i', $version, $matches) => sprintf('-experimental-snapshot%s', $matches[1]),
            default => '',
        };
    }

    private function unifyValuesByArrayKey(array $versionToProtocolMap, string $key): mixed
    {
        return array_reduce($versionToProtocolMap, static function ($result, $item) use ($key) {
            static $seen = [];

            if (is_array($item) && !in_array($item[$key], $seen, true)) {
                $seen[] = $item[$key];
                $result[] = $item;
            }

            return $result;
        }, []);
    }

    protected function unifyValuesByProtocol(array $versionToProtocolMap): array
    {
        return $this->unifyValuesByArrayKey($versionToProtocolMap, 'protocol');
    }

    protected function unifyValuesByVersion(array $versionToProtocolMap)
    {
        return $this->unifyValuesByArrayKey($versionToProtocolMap, 'version');
    }

    private function formatKey(string $version): string
    {
        return mb_strtoupper(str_replace(['.', ' ', '-'], '_', $this->formatKeyByPatterns($version)));
    }

    private function formatVersion(string $version): string
    {
        $suffix = $this->getSuffix($version);

        if (1 === preg_match(self::MATCH_SNAPSHOT_REGEX, $version, $matches)) {
			return $matches[0] . $suffix;
        }
        if (1 === preg_match(self::MATCH_VERSION_REGEX, $version, $matches)) {
            return mb_strtoupper($matches[1]) . $suffix;
        }

        $parts = explode(' ', $version,  3);
        return $parts[count($parts) - 1] . $suffix;
    }

    private function formatKeyByPatterns(string $key): string
    {
        $patterns = [
            [
                'pattern' => '/\s(edition)/i',
                'replacement' => '',
            ],
            [
                'pattern' => '/(release|combat|pre)[\s-](candidate|test|release)\s+(\d+)/i',
                'replacement' => '$1-$2$3',
            ],
            [
                'pattern' => '/(alpha)\s(realms)\s(build)\s+(\d+)/i',
                'replacement' => '$1-$2$4',
            ],
            [
                'pattern' => '/(alpha)\s(build)\s+(\d+)/i',
                'replacement' => '$1$3',
            ],
            [
                'pattern' => '/(pre)(\d+)/i',
                'replacement' => '$1-release$2',
            ],
            [
                'pattern' => self::MATCH_VERSION_REGEX,
                'replacement' => '$1',
            ],
        ];

        $callback = static fn(string $value, array $pattern) => preg_replace(
            $pattern['pattern'], $pattern['replacement'], $value
        );

        return (string) str_replace(' - ', ' ', array_reduce($patterns, $callback, $key));
    }
}