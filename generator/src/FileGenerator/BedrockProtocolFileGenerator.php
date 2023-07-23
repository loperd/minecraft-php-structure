<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

use Loper\Minecraft\Protocol\ProtocolVersion;
use Loper\Minecraft\StructureGenerator\Parser\MinecraftFandomWikiProtocolVersionParser;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\PhpNamespace;

final class BedrockProtocolFileGenerator extends AbstractPhpFileStructureGenerator
{
    use ProtocolStructureGeneratorTrait;
    use StructureFamilyTypeTrait;

    public function setupNamespace(NamespaceRegistry $namespaceRegistry, PhpNamespace $namespace): void
    {
        $namespace->addUse(ProtocolVersion::class);
    }

    public function createClassFromContent(string $content): ClassLike
    {
        $parser = new MinecraftFandomWikiProtocolVersionParser($content);
        $versionToProtocolMap = array_reverse($this->unifyValuesByProtocol(
            $this->formatVersionToProtocolMap(
                $parser->parseBedrockEditionTable()
            )
        ));

        $enum = $this->createProtocolEnum();
        foreach ($versionToProtocolMap as $entry) {
            $enum->addCase($entry['key'], (int) $entry['protocol']);
        }

        return $enum;
    }
}