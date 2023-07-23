<?php

declare(strict_types=1);

namespace Loper\Minecraft\Protocol;

/**
 * @template V
 * @template P
 */
abstract class AbstractVersionProtocolMap
{
    public const PROTOCOL = 'p';
    public const VERSION = 'v';

    /**
     * @psalm-param P $protocol
     * @psalm-return V
     */
    public static function findByProtocol(ProtocolVersion $protocol): ServerVersion
    {
        $filtered = \array_filter(static::getMap(), static fn (array $data)
            => (string) $data[self::PROTOCOL]->value === (string) $protocol->getProtocolValue());

        if (0 === \count($filtered)) {
            return static::getUnknownVersion();
        }

        /** @var ServerVersion */
        return \array_shift($filtered)[self::PROTOCOL];
    }

    /**
     * @psalm-param V $version
     * @psalm-return P
     */
    public static function getByVersion(ServerVersion $version): ProtocolVersion
    {
        $protocol = self::findByVersion($version);

        if ($protocol->isUnknown()) {
            throw MappingException::notFoundByVersion($version);
        }

        return $protocol;
    }

    /**
     * @psalm-param P $protocol
     * @psalm-return V
     */
    public static function getByProtocol(ProtocolVersion $protocol): ServerVersion
    {
        $version = self::findByProtocol($protocol);

        if ($version->isUnknown()) {
            throw MappingException::notFoundByProtocol($protocol);
        }

        return $version;
    }

    /**
     * @psalm-param V $version
     * @psalm-return P
     */
    public static function findByVersion(ServerVersion $version): ProtocolVersion
    {
        $filtered = \array_filter(static::getMap(), static fn (array $data)
            => (string) $data[self::VERSION]->value === $version->getVersionValue());

        if (0 === \count($filtered)) {
            return static::getUnknownProtocol();
        }

        /** @var ProtocolVersion */
        return \array_shift($filtered)[self::VERSION];
    }

    /**
     * @psalm-return array<array-key, array{p: P, v: V}>
     */
    abstract public static function getMap(): array;
    abstract public static function getUnknownVersion(): ServerVersion;
    abstract public static function getUnknownProtocol(): ProtocolVersion;
}
