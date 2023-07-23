<?php
declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

trait StructureFamilyTypeTrait
{
    public function getFamilyType(): string
    {
        return 'Struct';
    }
}