<?php

namespace App\Console\Commands;
use Spatie\Sitemap\SitemapGenerator;
use Illuminate\Console\Command;

class GenerateSitemap extends Command
{
   
    protected $signature = 'sitemap:generate';
    protected $description = 'Generating the sitemap for the site';
    public function handle()
    {
        SitemapGenerator::create('https://parsinta.com/')->writeToFile(public_path('sitemap.xml'));
        $this->info('The sitemap has been generated');
    }
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
   

    /**
     * The console command description.
     *
     * @var string
     */
   
}
