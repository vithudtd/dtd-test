<?php

namespace DTD\Console\Commands;

use Illuminate\Console\Command;

class CheckVersion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dtd:test';

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
        $this->line('Connect the Debee project with this command xx:');

        return 0;
    }
}
