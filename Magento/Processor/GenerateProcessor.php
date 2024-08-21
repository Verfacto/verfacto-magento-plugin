<?php

declare(strict_types=1);

namespace Verfacto\Magento\Processor;

use Magento\Framework\UrlInterface;

class GenerateProcessor
{
    /**
     * @var UrlInterface
     */
    private UrlInterface $urlInterface;

    /**
     * GenerateProcessor constructor.
     *
     * @param UrlInterface $urlInterface
     */
    public function __construct(
        UrlInterface $urlInterface
    ) {
        $this->urlInterface = $urlInterface;
    }

    /**
     * Build name from url.
     *
     * @return string
     */
    public function buildName(): string
    {
        $shopUrl = $this->urlInterface->getBaseUrl();
        $parsedUrl = parse_url($shopUrl);
        $host = $parsedUrl['host'] ?? '';
        if (strpos($host, 'www.') === 0) {
            $host = substr($host, 4);
        }
        $name = str_replace('.', '-', $host);
        
        return $name;
    }
}
