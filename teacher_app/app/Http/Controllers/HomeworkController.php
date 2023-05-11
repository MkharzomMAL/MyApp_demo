<?php

namespace App\Http\Controllers;

use App\Jobs\HomeworkCreated;
use App\Models\Homework;
use Illuminate\Http\Request;
use Response;

class HomeworkController extends Controller
{
    public function index(){
        return Homework::all();
    }
    public function show($id){
        return Homework::find($id);
    }
    public function store(Request $request){

        $homework = Homework::create($request->only('title','description','due_date','user_id','assign_class'));
        HomeworkCreated::dispatch($homework->toArray())->onQueue('student_queue');

        return response($homework , 201);
    }
    public function update($id , Request $request){
        $homework = Homework::find($id);

        $homework->update($request->only('title','description','due_date','user_id','assign_class'));

        return response($homework,202);
    }

    public function destroy($id){
        Homework::destroy($id) ;

        return response(null , 204) ;
    }
}
