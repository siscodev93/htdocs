<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SeedBreakingBadDb extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'breakingbad:init';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Initialize the database with breaking bad characters';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        //do stuff here to populate the database from the api
        return 0;
    }
}
