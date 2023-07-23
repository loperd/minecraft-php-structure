<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

use Loper\Minecraft\Protocol\ServerVersion;
use Loper\Minecraft\StructureGenerator\Parser\MinecraftFandomWikiProtocolVersionParser;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\PhpNamespace;

final class JavaVersionFileGenerator extends AbstractPhpFileStructureGenerator
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
        $originalVersionToProtocolMap = $this->formatVersionToProtocolMap($parser->parseJavaEditionTable());
        $unifiedVersionToProtocolMap = array_reverse($this->unifyValuesByVersion($originalVersionToProtocolMap));

        $enum = $this->createVersionEnum();
        foreach ($unifiedVersionToProtocolMap as $entry) {
            $enum->addCase($entry['key'], $entry['version']);
        }

        return $enum;
    }
}