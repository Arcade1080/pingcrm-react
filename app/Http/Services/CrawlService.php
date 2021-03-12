<?php

namespace App\Http\Services;

use Weidner\Goutte\GoutteFacade;

class CrawlService
{
    public function __construct()
    {
    }

    public function sayHi()
    {

        $crawler = GoutteFacade::request('GET', 'https://www.ebay-kleinanzeigen.de/s-autos/vw-california/k0c216');
        $data = $crawler->filter('h2.text-module-begin')->each(function ($node) {
            return $node->text();
        });

        return $data;
    }
}
