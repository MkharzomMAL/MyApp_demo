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
    public function submit($id, Request $request)
{
    $student_id = $request->input('student_id', Auth::user()->id);

    $homework = Homework::findOrFail($id);

    $validatedData = $request->validate([
        'solution' => 'required|string',
    ]);

    $homework->solution = $validatedData['solution'];
    $homework->save();

    HomeworkSolved::dispatch($student_id, $homework->toArray())->onQueue('teacher_queue');

    return response($homework, 202);
}

}
