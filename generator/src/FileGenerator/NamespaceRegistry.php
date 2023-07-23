<?php
declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\FileGenerator;

final class NamespaceRegistry
{
    private array $namespaces = [];

    public function register(string $className, string $namespace): void
    {
        $this->namespaces[$className] = $namespace;
	}

    public function getNamespace(string $original): ?string
    {
        $className = $original;
        if (str_contains($className, '\\')) {
            $parts = explode('\\', $className);
            $className = $parts[count($parts) - 1];
        }

        return $this->namespaces[$className] ?? $original;
    }
}