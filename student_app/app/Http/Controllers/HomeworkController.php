<?php

namespace App\Http\Controllers;

use App\Jobs\HomeworkSolved;
use App\Models\Homework;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeworkController extends Controller
{
    public function index(){
        
    }
    public function submit(Request $request){

        $student_id = Auth::user()->id ;

        $homework = Homework::where('id' , $request->id)->get();
        
        $validateData = $request->validate([
            'solution' => 'required'
        ]);

        $homework->solution = $validateData['solution'];

        $homework->save();

        HomeworkSolved::dispatch($student_id , $homework->toArray())->onQueue('teacher_queue') ;

        return response($homework , 202 );
    }
}
