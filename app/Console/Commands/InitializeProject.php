<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class InitializeProject extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'project:initialize';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->line('**** migrations in Progress ****');
        $this->newLine();
        Artisan::call('migrate:fresh');
        $this->info(Artisan::output());

        $this->line('**** DB Seed in Progress ****');
        $this->newLine();
        Artisan::call('db:seed');
        $this->info(Artisan::output());

        return Command::SUCCESS;
    }
}
