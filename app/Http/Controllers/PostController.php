<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index(){
    	$post = Post::all();
    	return view('admin.postindex', compact('post'));
    }

    public function create(){
    	return view('admin.postcreate');
    }

    public function store(Request $request){


		    	$this->validate($request, [
		          'jobtitle' => 'required',
		          'location' => 'required',
		          'description' => 'required',
		          'salaryfrom' => 'required',
		          'salaryto' => 'required',
		          'closingdate' => 'required',
		          'candidatecount' => 'required',
		         ]); 

		    	$cdate = date('d-m-Y');
		    	$post = new Post();
		    	$post->jobtitle = $request->jobtitle;
		    	$post->location = $request->location;
		    	$post->experience = $request->experience;
		    	$post->description = $request->description;
		    	$post->resume = $request->resume;
		    	$post->salaryfrom = $request->salaryfrom;
		    	$post->salaryto = $request->salaryto;
		    	$date = $post->closingdate = $request->closingdate;
		    	$post->candidatecount = $request->candidatecount;
		    

                if ($date >=$cdate) {

                	$post->save();

                	return redirect('/admin-post')->with('success', 'Data Inserted Successfully');
                }
                else
                {
                	// dd("hello");
                	return redirect()->route('admin-post.create')->with('warning', 'Date is less than current value');
                }
		      
		        
		    }


    public function edit($id){
	      	  $post = Post::find($id);
			 return view('admin.postedit',compact('post'));	
		  }
    public function update(Request $request, $id){

		    	$this->validate($request, [
		          'jobtitle' => 'required',
		          'location' => 'required',
		          'description' => 'required',
		          'salaryfrom' => 'required',
		          'salaryto' => 'required',
		          'closingdate' => 'required|date',
		          'candidatecount' => 'required',
		         ]); 
		    	
		    	$post = Post::findOrFail($id);
		    	$post->jobtitle = $request->jobtitle;
		    	$post->location = $request->location;
		    	$post->experience = $request->experience;
		    	$post->description = $request->description;
		    	$post->resume = $request->resume;
		    	$post->salaryfrom = $request->salaryfrom;
		    	$post->salaryto = $request->salaryto;
		    	$post->closingdate = $request->closingdate;
		    	$post->candidatecount = $request->candidatecount;

		        $post->save();
		        return redirect('/admin-post')->with('success', 'Data Updated Successfully');
		    }

    public function destroy($id){
	      	  $post = Post::destroy($id);
			  return redirect('/admin-post')->with('success', 'Data Deleted Successfully');
		  }

    public function show($id){
         //
    }
}
