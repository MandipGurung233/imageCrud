<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class GreatCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'greet';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creating greetings';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        //
        return $this->info('Hello there');
    }
}
