<?php

declare(strict_types=1);

namespace Loper\Minecraft\Protocol;

interface ProtocolVersion
{
    public function getProtocolValue(): int;

    public function getUnknownProtocol(): self;

    public function isUnknown(): bool;
}