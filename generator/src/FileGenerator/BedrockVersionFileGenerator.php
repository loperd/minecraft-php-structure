<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

use Loper\Minecraft\Protocol\ServerVersion;
use Loper\Minecraft\StructureGenerator\Parser\MinecraftFandomWikiProtocolVersionParser;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\PhpNamespace;

final class BedrockVersionFileGenerator extends AbstractPhpFileStructureGenerator
{
    use VersionStructureGeneratorTrait;
    use StructureFamilyTypeTrait;

    public function setupNamespace(NamespaceRegistry $namespaceRegistry, PhpNamespace $namespace): void
    {
        $namespace->addUse(ServerVersion::class);
    }

    public function createClassFromContent(string $content): ClassLike
    {
        $parser = new MinecraftFandomWikiProtocolVersionParser($content);
        $versionToProtocolMap = $this->unifyValuesByVersion(
            $this->formatVersionToProtocolMap(
                array_reverse($parser->parseBedrockEditionTable()
        	)
        ));

        $enum = $this->createVersionEnum();
        foreach ($versionToProtocolMap as $entry) {
            $enum->addCase($entry['key'], $entry['version']);
        }

        return $enum;
    }
}