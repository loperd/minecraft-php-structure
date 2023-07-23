<?php

declare(strict_types=1);

namespace Loper\Minecraft\Protocol;

class MappingException extends \LogicException
{
    private function __construct(string $message)
    {
        parent::__construct($message);
    }

    public static function notFoundByVersion(ServerVersion $version): self
    {
        return new self(\sprintf('Could not find protocol by minecraft version: [%s].', $version->getVersionValue()));
    }

    public static function notFoundByProtocol(ProtocolVersion $protocol): self
    {
        return new self(\sprintf('Could not find version by minecraft protocol: [%s].', $protocol->getProtocolValue()));
    }
}
