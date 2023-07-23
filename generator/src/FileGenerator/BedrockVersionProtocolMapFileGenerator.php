<?php
declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

use Loper\Minecraft\Protocol\AbstractVersionProtocolMap;
use Loper\Minecraft\Protocol\ProtocolVersion;
use Loper\Minecraft\Protocol\ServerVersion;
use Loper\Minecraft\StructureGenerator\Parser\MinecraftFandomWikiProtocolVersionParser;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\PhpNamespace;

final class BedrockVersionProtocolMapFileGenerator extends AbstractPhpFileStructureGenerator
{
    use MapStructureGeneratorTrait;

    public function setupNamespace(NamespaceRegistry $namespaceRegistry, PhpNamespace $namespace): void
    {
        foreach([
            AbstractVersionProtocolMap::class,
            'BedrockProtocolVersion',
            'BedrockServerVersion',
            ProtocolVersion::class,
            ServerVersion::class,
        ] as $class) {
            $namespace->addUse($namespaceRegistry->getNamespace($class));
        }
    }

    public function createClassFromContent(string $content): ClassLike
    {
        $parser = new MinecraftFandomWikiProtocolVersionParser($content);

        return $this->createMapClass($this->formatMapArrayAsSingleString(
            array_reverse($this->formatVersionToProtocolKeyMap(
                $this->formatVersionToProtocolMap(
                	$parser->parseBedrockEditionTable()
            	)
            ))
        ));
    }
}