<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

use Loper\Minecraft\Protocol\ProtocolVersion;
use Nette\PhpGenerator\EnumType;

trait ProtocolStructureGeneratorTrait
{
    public function createProtocolEnum(): EnumType
    {
        $enum = new EnumType($this->getClassName());
        $enum->addImplement(ProtocolVersion::class);
        $enum->setType('int');
        $enum->addCase('Unknown', -1);

        $enum->addMethod('getProtocolValue')
            ->setReturnType('int')
            ->setBody('return $this->value;');

        $enum->addMethod('getUnknownProtocol')
            ->setReturnType('self')
            ->setBody('return self::Unknown;');

        $enum->addMethod('isUnknown')
            ->setReturnType('bool')
            ->setBody('return $this === self::Unknown;');
        return $enum;
    }
}