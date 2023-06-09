<?php

namespace App\Jobs;

use App\Models\Homework;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class HomeworkDeleted implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $id ;
    public function __construct($id)
    {
        $this->id = $id ;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Homework::destroy($this->id);
    }
}
