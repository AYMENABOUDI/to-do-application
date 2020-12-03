<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\Task;

use Response;

class MydayController extends Controller
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
				 
            $tasks = DB::table('tasks')
		    ->where('id_admin', '=', "".ucfirst(Auth()->user()->id)."")
		    ->where('day', '=', "".date('Y-m-d')."")
			->get();
			
			 $taskscount = DB::table('tasks')
		    ->where('id_admin', '=', "".ucfirst(Auth()->user()->id)."")
		    ->where('day', '=', "".date('Y-m-d')."")

        ->count('id');

        return view('admin.myday.index', compact('tasks','taskscount'));
		}
	    
		return redirect::to("admin");

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
    
      return redirect('myday/')->with('success', 'Create with success!');
        return Response::json($post);	

		}
	 return Redirect::to("admin")->withSuccess('Opps! You do not have access');

		
    }
	
	public function edit($id)
    {
        //
        $where = array('id' => $id);
        $task  = Task::where($where)->first();
 
        return view('admin.myday.edit', compact('task'));
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

        return redirect('myday/'.$id.'')->with('success', 'Update with success!');
    }
	
	
	
	    public function show($id)
    {
        if(Auth::check()){   

        $where = array('id' => $id);
        $task  = Task::where($where)->first();
 
                return view('admin.myday.show', compact('task'));
               return Response::json($post);
		}
			 return Redirect::to("admin")->withSuccess('Opps! You do not have access');



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
        $post = Task::where('id',$id)->delete();
   
        return Response::json($post);
    }
}