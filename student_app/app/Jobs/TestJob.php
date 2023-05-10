<?php

namespace App\Jobs;

use App\Models\Homework;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        echo 'job created';
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        echo 'new EVENT handle';
        
        Homework::create([
            'id' => '2',
            'title' => '$this->data',
            'description' => 'yhffg',
            'teacher_id' => '5',

        ]);

        echo 'done';
    }
}
