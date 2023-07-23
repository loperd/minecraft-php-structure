<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

interface NamedPhpFileStructureGenerator
{
    public function getClassName(): string;
    public function getFilename(): string;
    public function getOutputPath(): string;
}