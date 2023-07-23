<?php

declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator;

use Loper\Minecraft\StructureGenerator\FileGenerator\NamedPhpFileStructureGenerator;
use Loper\Minecraft\StructureGenerator\FileGenerator\NamespaceRegistry;
use Loper\Minecraft\StructureGenerator\FileGenerator\PhpFileStructureGenerator;

final class CompositeFileGeneratorManager
{
    private array $generators = [];

    public function add(PhpFileStructureGenerator&NamedPhpFileStructureGenerator $generator): void
    {
        $filtered = \array_filter($this->generators,
            static fn (NamedPhpFileStructureGenerator $g) =>
                $g->getClassName() === $generator->getClassName()
        );

        if ([] !== $filtered) {
            throw new \UnexpectedValueException(sprintf(
                'Generator for file "%s" already registered.',
                $generator->getClassName()
            ));
        }

        $this->generators[] = $generator;
    }

    public function remove(NamedPhpFileStructureGenerator $generator): void
    {
        $this->generators = \array_filter($this->generators,
            static fn (NamedPhpFileStructureGenerator $g) =>
                $g->getClassName() !== $generator->getClassName()
        );
    }

    public function generateFromContent(string $content): \Generator
    {
        $namespaceRegistry = new NamespaceRegistry();

        $generators = $this->generators;
        usort($generators, static fn ($a, $b) => $a?->getPriority() ?? 0 <=> $b->getPriority());

        /** @var PhpFileStructureGenerator&NamedPhpFileStructureGenerator $generator */
        foreach ($this->generators as $generator) {
            $generator->registerNamespace($namespaceRegistry);

            yield [
                'name' => $generator->getFilename(),
                'content' => $generator->generateFromContent($namespaceRegistry, $content),
                'outputPath' => $generator->getOutputPath(),
            ];
        }
    }
}