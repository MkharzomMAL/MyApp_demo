<?php

namespace App\Jobs;

use App\Models\Homework;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class HomeworkCreated implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    // private $data ;
    public function __construct()
    {
        // $this->data = $data ;
    }

  
    public function handle()
    {
        echo 'test done' ;
        // Homework::create([
        //     'id' => $this->data['id'],
        //     'title' => $this->data['title'],
        //     'description' => $this->data['description'],
        //     'teacher_id' => $this->data['user_id'],
        //     'due_date' => $this->data['due_date'],
        //     'assign_class' => $this->data['assign_class'],
        //     'created_at' => $this->data['created_at'],
        //     'update_at' => $this->data['update_at'],
        // ]);
    }
}
