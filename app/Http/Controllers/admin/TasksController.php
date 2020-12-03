<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Task;
use Redirect,Response;

class TasksController extends Controller
{
public function index()
{
    $tasks = Task::all();
    return view('tasks.index', compact('tasks'));
}

public function create()
{
    return view('tasks.create');
}





	    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=> 'required|max:255',
            'description'=> 'required|max:255',
            'task_date'=> 'required|max:255',
            'task_enddate'=> 'required|max:255',
            'type'=> 'required|max:255',
            'id_admin'=> 'required|max:255',
		  ]);


      $Task= new Task([
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'task_date' => $request->get('task_date'),
            'task_enddate' => $request->get('task_enddate'),
            'type' => $request->get('type'),
            'id_admin' => $request->get('id_admin'),
        ]);
		
      $Task->save();

      return redirect()->route('tasks.index')->with('success', 'Create with success!');
  
    }
	
	
}