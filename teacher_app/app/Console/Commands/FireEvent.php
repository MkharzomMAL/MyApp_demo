<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Jobs\TestJob ;

class FireEvent extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fire';

    public function handle()
    {
        echo 'fired' ;
        TestJob::dispatch()->onQueue('student_queue');
        echo 'done' ;

    }
}
