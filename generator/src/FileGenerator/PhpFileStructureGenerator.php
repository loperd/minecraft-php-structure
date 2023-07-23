<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

interface PhpFileStructureGenerator
{
    public function getPriority(): int;

    public function registerNamespace(NamespaceRegistry $namespaceRegistry): void;

    public function generateFromContent(NamespaceRegistry $namespaceRegistry, string $content): string;
}