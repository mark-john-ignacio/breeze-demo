<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class generateModules extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'modules:generate {count=150}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate multiple modules at once';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $count = $this->argument('count'); // number of modules to create

        for ($i = 1; $i <= $count; $i++) {
            $moduleName = 'Module' . $i; // You can customize the naming convention here
            $this->info("Creating module: {$moduleName}");
            // Run the artisan module:make command
            $this->call('module:make', ['name' => $moduleName]);
        }

        $this->info("Successfully created {$count} modules.");
    }
}
