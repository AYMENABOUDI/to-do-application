<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MyCalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

	public function index()
    {
        //
        	   if(Auth::check()){
             $data['tasks'] = Task::orderBy('id','desc')->paginate(8);
  
        return view('admin.calendar.index',$data);
		      }
			         return Redirect::to("admin")->withSuccess('Opps! You do not have access');


    }
	
		public function create()
    {
        //
        	   if(Auth::check()){   
        return view('admin.calendar.create');
		      }
			         return Redirect::to("admin")->withSuccess('Opps! You do not have access');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         if(Auth::check()){   
         $postID = $request->post_id;
        $post   =   Task::updateOrCreate(['id' => $postID],
['name' => $request->name, 'description' => $request->description, 'task_date' => $request->task_date, 'type' => $request->type, 'day' => $request->task_date, 'id_admin' => $request->id_admin, 'etats' => $request->etats, 'etatsnote' => $request->etatsnote, 'etatsdate' => $request->etatsdate]);
    
		return Redirect::to("tasks")->withSuccess('Opps! You do not have access');
        return Response::json($post);	

		}
	 return Redirect::to("admin")->withSuccess('Opps! You do not have access');

		
    }
	
		public function show($id)
    {
         if(Auth::check()){   

        $where = array('id' => $id);
        $task  = Task::where($where)->first();
 
                return view('admin.calendar.show', compact('task'));
               return Response::json($post);
		}
			 return Redirect::to("admin")->withSuccess('Opps! You do not have access');


    }
	
	public function edit($id)
    {
        //
        $where = array('id' => $id);
        $task  = Task::where($where)->first();
 
        return view('admin.calendar.edit', compact('task'));
            return Response::json($post);

    }
	
	
		public function update(Request $request, $id)
    {
        $request->validate([
            'etats'=> 'required|max:2055',
            'etatsnote'=> 'required|max:2055',
            'etatsdate'=> 'required|max:2055',
            'name'=> 'required|max:2055',
            'task_date'=> 'required|max:2055',
            'type'=> 'required|max:2055',
            'description'=> 'required|max:2055',
			]);

        $task = Task::find($id);
        $task->etats = $request->get('etats');
        $task->etatsnote = $request->get('etatsnote');
        $task->etatsdate = $request->get('etatsdate');
        $task->name = $request->get('name');
        $task->task_date = $request->get('task_date');
        $task->type = $request->get('type');
        $task->description = $request->get('description');
		        $task->day = $request->get('task_date');

        $task->save();

        return redirect('tasks/'.$id.'')->with('success', 'Update with success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	 
	 public function destroy($id)
    {
        //
        $post = Book_page_title::where('id',$id)->delete();
   
        return Response::json($post);
    }
}