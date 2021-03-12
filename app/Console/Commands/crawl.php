<?php

namespace App\Console\Commands;

use App\Http\Services\CrawlService;
use Illuminate\Console\Command;

class Crawl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crawl';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function printTable($tableData)
    {
        // $headers = ['Title', 'Company', 'Category'];
        // $body = collect($tableData)->map(function ($item) {
        //     return [$item->title, $item->company->name, $item->mainCategory];
        // })->all();

        $this->info('Feed: ' . $tableData);
        // $this->table($headers, $body);
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(CrawlService $crawlService)
    {
        $data = $crawlService->sayHi();
        $this->printTable($data);
    }
}
