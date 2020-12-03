<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use DB;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Session;

use App\manage_crm;
use App\manage_client;
use App\Manage_document;

use Response;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index($client_number)
    {
        //
		if(Auth::check()){
				 
		  $manage_client = DB::table('manage_clients')
	      ->where('client_number', '=', "".$client_number."")
	      ->get();
	 
         
		  
		   $data['manage_documents'] = DB::table('manage_documents')
	      ->where('id_client', '=', "".$client_number."")
	      ->get();


        return view('admin.clients.documents.index',$data, compact('manage_client'));
		}
	    
		return redirect::to("admin");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function stores(Request $request)
    {
        //
		
        $postID = $request->post_id;
        $post   =   Manage_document::updateOrCreate(['id' => $postID],
		
		
                    ['id_client' => $request->id_client, 'title' => $request->title, 'fichier' => $request->fichier, 'note' => $request->note, 'id_admin' => $request->id_admin, 'id_day' => $request->id_day, 'id_month' => $request->id_month, 'month' => $request->month, 'id_year' => $request->id_year]);
    
        return Response::json($post);
    }
	
	
	    public function store(Request $request)
    {
        $this->validate($request,[
            'id_client'=> 'required|max:255',
            'title'=> 'required|max:255',
            'note'=> 'required|max:255',
            'id_admin'=> 'required|max:255',
            'id_day'=> 'required|max:255',
            'id_month'=> 'required|max:255',
            'month'=> 'required|max:255',
            'id_year'=> 'required|max:255',
            'fichier' =>'required',
            'fichier.*' => 'mimes:jpeg,png,jpg,gif,svg,pdf,php,html|max:20048'
		  ]);

	  
	     $input = $request->all();
        $fichier = $request->file('fichier');
        $input['fichier'] = $fichier->getClientOriginalName();
        $fichier->move(public_path('documents/client'),
		$fichier->getClientOriginalName());
        
      $manage_document= new Manage_document([
            'id_client' => $request->get('id_client'),
            'title' => $request->get('title'),
            'note' => $request->get('note'),
            'id_admin' => $request->get('id_admin'),
            'id_day' => $request->get('id_day'),
            'id_month' => $request->get('id_month'),
            'month' => $request->get('month'),
            'id_year' => $request->get('id_year'),
			'fichier' => $input['fichier'],
        ]);
		
      $manage_document->save();

      return redirect('clients/documents/'.$request->get('id_client').'')->with('success', 'Create with success!');
  
    }
	
	public function edit($id)
    {
        //
        $where = array('id' => $id);
        $post  = Manage_document::where($where)->first();
 
        return Response::json($post);

    }


	
	    public function show($client_number, $id)
    {
        //
		if(Auth::check()){
				 
		  $manage_client = DB::table('manage_clients')
	      ->where('client_number', '=', "".$client_number."")
	      ->get();
	 
         
		  
		 
		  
		  $manage_documents = DB::table('manage_documents')
          ->where('id_client', '=', "".$client_number."")
	      ->where('id', '=', "".$id."")
          ->get();


        return view('admin.clients.documents.show', compact('manage_client', 'manage_documents'));
		}
	    
		return redirect::to("admin");

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
        $post = Manage_document::where('id',$id)->delete();
   
        return Response::json($post);
    }
}