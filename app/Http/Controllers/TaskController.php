<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
       //dd($request->all());
       $task=new Task;

       $task->task=$request->task;
       $task->save();
       return redirect()->back();
      
    }
}
