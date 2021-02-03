<?php


namespace Pforret\NuuzScraper;


abstract class NuuzSource
{

    private array $config;

    public function configure(array $config): void
    {
        $this->config["type"]=$config["type"] ?? "rss";
        $this->config["url"]=$config["url"] ?? [];
        $this->config["max_items"]=$config["max_items"] ?? 10;

    }

    public function retrieve(): array
    {

    }
    // ---- HELPER FUNCTIONS

}