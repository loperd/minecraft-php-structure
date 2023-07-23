<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

use Loper\Minecraft\Protocol\AbstractVersionProtocolMap;
use Loper\Minecraft\Protocol\ProtocolVersion;
use Loper\Minecraft\Protocol\ServerVersion;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Literal;

trait MapStructureGeneratorTrait
{
    public function getFamilyType(): string
    {
        return 'Map';
    }

    public function getPriority(): int
    {
        return 10;
    }

    /**
     * @return class-string<ServerVersion>
     */
    public function getServerVersionClass(): string
    {
        return $this->getTypeFromClassName() . 'ServerVersion';
    }

    /**
     * @return class-string<ProtocolVersion>
     */
    public function getProtocolVersionClass(): string
    {
        return $this->getTypeFromClassName() . 'ProtocolVersion';
    }

    public function getTypeFromClassName(): string
    {
        $parts = explode('\\', static::class);
        $className = $parts[count($parts) - 1];
        preg_match('/^([A-Z][a-z]+)/', $className, $matches);

        return $matches[1];
    }

    private function formatMapArrayAsSingleString(array $versionToProtocolMap): string
    {
        $map = '';

        foreach ($versionToProtocolMap as $item) {
            $map .= <<<ITEM
                [
                    self::VERSION => {$this->getServerVersionClass()}::{$item['versionKey']},
                    self::PROTOCOL => {$this->getProtocolVersionClass()}::{$item['protocolKey']},
                ],
            ITEM . PHP_EOL;
        }

        return \sprintf('[%s%s]', PHP_EOL, $map);
    }

    private function createMapClass(string $mapValue): ClassLike
    {
        $classMap = new ClassType($this->getClassName());
        $classMap->setExtends(AbstractVersionProtocolMap::class);
        $classMap->setFinal();

        $classMap->addMethod('getMap')
            ->setStatic()
            ->setReturnType('array')
            ->setBody('return self::$map;');

        $classMap->addMethod('getUnknownVersion')
            ->setStatic()
            ->setReturnType(ServerVersion::class)
            ->setBody(sprintf('return %s::Unknown;', $this->getServerVersionClass()));

        $classMap->addMethod('getUnknownProtocol')
            ->setStatic()
            ->setReturnType(ProtocolVersion::class)
            ->setBody(sprintf('return %s::Unknown;', $this->getProtocolVersionClass()));

        $classMap->addProperty('map', new Literal($mapValue))
            ->setType('array')->setStatic();

        return $classMap;
    }

    /**
     * @param array $versionToProtocolMap
     * @return array<array-key, array{versionKey: string, protocolKey: string}>
     */
    private function formatVersionToProtocolKeyMap(array $versionToProtocolMap): array
    {
        $versionKeyToProtocolKeyMap = [];
        foreach ($versionToProtocolMap as $entry) {
            $versionKeyToProtocolKeyMap[] = [
                'versionKey' => $entry['key'],
                'protocolKey' => $this->getProtocolKeyByProtocolValue(
                    $versionToProtocolMap, $entry['protocol']
                ),
            ];
        }

        return $versionKeyToProtocolKeyMap;
    }
}