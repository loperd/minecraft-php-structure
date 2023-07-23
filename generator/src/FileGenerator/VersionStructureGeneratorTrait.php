<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

use Loper\Minecraft\Protocol\ServerVersion;
use Nette\PhpGenerator\EnumType;

trait VersionStructureGeneratorTrait
{
    public function createVersionEnum(): EnumType
    {
        $enum = new EnumType($this->getClassName());
        $enum->addImplement(ServerVersion::class);

        $enum->setType('string');
        $enum->addCase('Unknown', 'unknown');

        $enum->addMethod('getVersionValue')
            ->setReturnType('string')
            ->setBody('return $this->value;');

        $enum->addMethod('getUnknownVersion')
            ->setReturnType('self')
            ->setBody('return self::Unknown;');

        $enum->addMethod('isUnknown')
            ->setReturnType('bool')
            ->setBody('return $this === self::Unknown;');
        return $enum;
    }
}