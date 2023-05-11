<?php

namespace App\Http\Controllers;

use App\Jobs\HomeworkSolved;
use App\Models\Homework;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeworkController extends Controller
{
    public function index(){
        
    }
    public function submit(Request $request)
    {
        $solution = Solution::create($request->only('user_id','homework_id','content'));
        HomeworkSolved::dispatch($solution->toArray())->onQueue('teacher_queue');

        return response($solution , 201);
    }

}

