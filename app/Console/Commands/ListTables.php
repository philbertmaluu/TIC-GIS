<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ListTables extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:list-tables';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all the table in the database..';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $tables = DB::select('SHOW TABLES');

        $database = DB::getDatabaseName();
        $column = "Tables_in_$database";

        $this->info("Tables in database '$database':");
        foreach ($tables as $table) {
            $this->line($table->$column);
        }

        return 0;
    }
}
