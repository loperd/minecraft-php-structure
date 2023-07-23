<?php
declare(strict_types=1);

namespace Loper\Minecraft\StructureGenerator\Parser;

use Symfony\Component\DomCrawler\Crawler;

final class MinecraftFandomWikiProtocolVersionParser
{
    public function __construct(private readonly string $content)
    {
    }

    public function parseJavaEditionTable(): array
    {
        $crawler = new Crawler($this->content);
        $table = $crawler->filterXPath('//span[contains(@id, "Java_Edition_")]')
            ->closest('h3')->nextAll()
            ->filter('table')->first();

        $versionToProtocolMap = [];
        $table->filter('tbody > tr')->each(static function (Crawler $node) use (&$versionToProtocolMap) {
            $children = $node->children();

            if ($children->first()->nodeName() !== 'td') {
                return null;
            }

            [$protocol, $versionProtocol] = self::getProtocol($children);

            $versionToProtocolMap[] = [
                'version' => $children->first()->text(),
                'protocol' => $protocol,
                'versionProtocol' => $versionProtocol,
            ];

            return null;
        });

        return $versionToProtocolMap;
    }

    public function parseBedrockEditionTable(): array
    {
        $crawler = new Crawler($this->content);
        $table = $crawler->filterXPath('//span[contains(@id, "Bedrock_Edition_")]')
            ->closest('h3')->nextAll()
            ->filter('table')->first();

        $versionToProtocolMap = [];

        $table->filter('tr')->each(static function (Crawler $node) use (&$versionToProtocolMap) {
            $children = $node->children();

            if ($children->first()->nodeName() !== 'td') {
                return null;
            }

            if (2 === $children->count() && str_contains($children->last()->outerHtml(), '<br>')) {
                return self::handleJoinedItems($children);
            }

            [$protocol, $versionProtocol] = self::getProtocol($children);

            if ('Unknown' === $protocol) {
                return null;
            }

            $versionToProtocolMap[] = [
                'version' => $children->first()->text(),
                'protocol' => $protocol,
                'versionProtocol' => $versionProtocol,
            ];

            return null;
        });

        return $versionToProtocolMap;
	}

    private static function handleJoinedItems(Crawler $children): array
    {
        $htmlElements = $children->last()->outerHtml();

        $elements = \array_reverse(array_map(static function (string $el) {
            return preg_replace('/<[^>]*>/', '', $el);
        }, explode('<br>', $htmlElements)));

        $version = $children->first()->text();

        $versionParts = explode(' ', $version);
        $versionValue = $versionParts[count($versionParts) - 1];

        $titleVersion = substr($version, 0, mb_strlen($versionValue) * -1);

        $result = [];
        foreach ($elements as $element) {
            $itemParts = explode(':', $element);
            $version = \implode(' ', [$titleVersion, trim($itemParts[0])]);
            $protocol = $itemParts[1];

            $result[] = [
                'version' => $version,
                'protocol' => $protocol,
                'versionProtocol' => $version,
            ];
        }

        return $result;
    }

    public static function getProtocol(Crawler $children): array
    {
        static $protocolData = [];
        static $protocolRowspan = 0;

        if ($protocolRowspan > 0) {
            --$protocolRowspan;
            return $protocolData;
        }

        $rowspan = $children->eq(1)
            ->attr('rowspan');
        if ($rowspan !== null) {
            $protocolRowspan = (int)$rowspan;

            $protocolData = [
                $children->eq(1)->text(),
                $children->eq(0)->text()
            ];

            return self::getProtocol($children);
        }

        return [
            $children->eq(1)->text(),
            $children->eq(0)->text()
        ];
    }
}