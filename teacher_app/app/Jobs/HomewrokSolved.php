<?php

namespace App\Jobs;

use App\Models\Solution;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class HomewrokSolved implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data , $id ;
    public function __construct($id , $data)
    {
        $this->data = $data ;
        $this->id = $id ;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Solution::create([
            'student_id' => $this-> id ,
            'homework_id' => $this-> data['id'],
            'content' => $this-> data['solution'] ,
        ]);

    }
}
