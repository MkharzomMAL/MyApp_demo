<?php

namespace App\Http\Controllers;

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

        return response($homework , 201);
    }
}
