<?php

declare(strict_types=1);

namespace Loper\Minecraft\Protocol;

interface ServerVersion
{
    public function getVersionValue(): string;

    public function getUnknownVersion(): self;

    public function isUnknown(): bool;
}