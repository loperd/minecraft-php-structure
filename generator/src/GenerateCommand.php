<?php
declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Loper\Minecraft\StructureGenerator\FileGenerator\BedrockProtocolFileGenerator;
use Loper\Minecraft\StructureGenerator\FileGenerator\BedrockVersionFileGenerator;
use Loper\Minecraft\StructureGenerator\FileGenerator\BedrockVersionProtocolMapFileGenerator;
use Loper\Minecraft\StructureGenerator\FileGenerator\JavaProtocolFileGenerator;
use Loper\Minecraft\StructureGenerator\FileGenerator\JavaVersionFileGenerator;
use Loper\Minecraft\StructureGenerator\FileGenerator\JavaVersionProtocolMapFileGenerator;
use Nette\PhpGenerator\ClassLike;
use Nette\PhpGenerator\PhpNamespace;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

final class GenerateCommand extends Command
{
    public const FANDOM_PROTOCOL_VERSION = 'https://minecraft.fandom.com/wiki/Protocol_version';
    public const TARGET_FOLDER = 'target';
    public const TARGET_NAMESPACE = 'namespace';

    public const PHP_FILE_TEMPLATE = <<<TEMPLATE
	<?php
	declare(strict_types=1);
	
	%s
	TEMPLATE;

    protected static $defaultName = 'generate';

    protected function configure(): void
    {
        $this->addOption(self::TARGET_FOLDER, 't', InputOption::VALUE_REQUIRED, 'Path to folder to dump generated structures.');
        $this->addOption(self::TARGET_NAMESPACE, 's', InputOption::VALUE_REQUIRED, 'Namespace for generated structures.');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $outputDirectory = $input->getOption(self::TARGET_FOLDER);
        $targetNamespace = $input->getOption(self::TARGET_NAMESPACE);
        $style = new SymfonyStyle($input, $output);

        if (null === $outputDirectory) {
            $style->warning(sprintf("Target folder is not specified. Please add --%s={folder} option to your command", self::TARGET_FOLDER));

            return Command::INVALID;
        }

        if (null === $targetNamespace) {
            $style->warning(sprintf("Target namespace is not specified. Please add --%s={namespace} option to your command", self::TARGET_NAMESPACE));

            return Command::INVALID;
        }

        if (!is_dir($outputDirectory)) {
            $style->error(sprintf('Target folder "%s" is not found.', $outputDirectory));
            return Command::INVALID;
        }

        $outputDirectory = \rtrim($outputDirectory, '/');
        $client = new Client();
        $response = $client->send(new Request('GET', self::FANDOM_PROTOCOL_VERSION));

        if (200 !== $response->getStatusCode()) {
            $style->error('Error while sending http request to minecraft fandom wiki.');

            return Command::FAILURE;
        }


        $manager = new CompositeFileGeneratorManager();
        $manager->add(new JavaProtocolFileGenerator('JavaProtocolVersion', $outputDirectory, $targetNamespace));
        $manager->add(new JavaVersionFileGenerator('JavaServerVersion', $outputDirectory, $targetNamespace));
        $manager->add(new BedrockProtocolFileGenerator('BedrockProtocolVersion', $outputDirectory, $targetNamespace));
        $manager->add(new BedrockVersionFileGenerator('BedrockServerVersion', $outputDirectory, $targetNamespace));
        $manager->add(new BedrockVersionProtocolMapFileGenerator('BedrockVersionProtocolMap', $outputDirectory, $targetNamespace));
        $manager->add(new JavaVersionProtocolMapFileGenerator('JavaVersionProtocolMap', $outputDirectory, $targetNamespace));

        /** @var string $name */
        /** @var string $content */
        /** @var string $outputPath */
        foreach ($manager->generateFromContent($response->getBody()->getContents()) as [
            'name' => $name,
            'content' => $content,
            'outputPath' => $outputPath,
        ]) {
            $content = sprintf(self::PHP_FILE_TEMPLATE, $content);
            $result = file_put_contents($outputPath, $content);

            if (false === $result) {
                $style->error(sprintf('File "%s" cannot be written.', $outputPath));
            }
        }

        return Command::SUCCESS;
    }
}