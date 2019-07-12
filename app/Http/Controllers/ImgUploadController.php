<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\ImgUpload;
use App\PageCategory;
class ImgUploadController extends Controller
{
      public function index(){
        $page = ImgUpload::all();
        return view('image.index', compact('page'));
    }

    public function create(){
        $page = PageCategory::all();
        return view('image.create', compact('page'));
    }
    public function store(Request $request){

     $this->validate($request, [
     	'title'=>'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

         $ImgUpload  = new ImgUpload;
         $title = $ImgUpload->title= $request->title;
         $pageid = PageCategory::where('title',$title)->get('id');
         
         $ImgUpload->catg_id = $pageid[0]['id'];
        

        if($request->hasFile('img')){
          $image = $request->file('img');
          $filename = rand() . '.' . $image->getClientOriginalExtension();
          $image->move(public_path("images"), $filename);
          $ImgUpload->imagepath = $filename;
          
        };

      $ImgUpload->save();
        return redirect('/admin/ImgUpload')->with('success','Image Upload successful');
    }

		  public function edit($id){
		  	$page = ImgUpload::find($id);
	        return view('image.edit', compact('page'));
		    }


	      public function update(Request $request, $id){
	         
	    	 $this->validate($request, [
		     	'title'=>'required',
		            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
		        ]);
	            $this->validate($request, $rules);
	            $page = ImgUpload::findOrFail($id);
	            $title = $page->title= $request->title;
		         $pageid = PageCategory::where('title',$title)->get('id');
		         
		         $page->catg_id = $pageid[0]['id'];
                if($request->hasFile('img')){
			          $image = $request->file('img');
			          $filename = rand() . '.' . $image->getClientOriginalExtension();
			          $image->move(public_path("images"), $filename);
			          $oldfilename = $page->imagepath;
			          $page->imagepath = $filename;
			          unlink(public_path("images/{$page->imagepath}"));
			          
			        };
	            $page->save();
	        return redirect('/admin/ImgUpload')->with('success', 'Data updated Successfully');
	          }
	        public function show($id){
			  	// $page = Page::where('id', $id)->get();
	     //        return view('page.show', compact('page'));
		    }	

		public function destroy($id){
			$page = ImgUpload::findOrFail($id);
			unlink(public_path("images/{$page->imagepath}"));
			$page->delete();
			
			return redirect('/admin/ImgUpload')->with('success', 'Data Deleted Successfully');
		}    

}
