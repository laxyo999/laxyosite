<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Feedback;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
class AdminController extends Controller
{
    public function index(){
    	$data = Career::all(); 
		   return view('admin.careeradmin', compact('data'));
      }
       

    public function fileDownload(){

      $filename= Career::select('file')->where('id', Request()->id)->first();
      return Storage::download('public/document/'.$filename->file);
     }   
   
    public function cdestroy($id){
      $destroy = Career::findOrFail($id);

      if ($destroy->file == '') {
     
          $destroy->delete();
        }
       else{
         $destroy->delete();
         Storage::delete('public/document/'.$destroy->file);
         
       }
      
      $data = Career::all();
      
      return view('admin.careeradmin', compact('data'));
    }


//feedback

    public function feedback(){
      $data = Feedback::all(); 
       return view('admin.feedbackadmin', compact('data'));
     }

     public function fdestroy($id){
      $feedback = Feedback::destroy($id);
      $data = Feedback::all(); 
       return view('admin.feedbackadmin', compact('data'));
     
    }

  //vender Registration
    public function vender(){
          $data = DB::table('vender_ragistration')->select('*')->get(); 
          return view('admin.vender', compact('data'));
          }
    public function vdestroy($id){
         DB::table('vender_ragistration')->delete($id);
         $data = DB::table('vender_ragistration')->select('*')->get(); 
         return view('admin.vender', compact('data'));
    }      

//contact
    public function contact(){
      $data = DB::table('contacts')->select('*')->get(); 
      return view('admin.contact', compact('data'));
       }
    public function condestroy($id){
         DB::table('contacts')->delete($id);
         $data = DB::table('contacts')->select('*')->get(); 
         return view('admin.contact', compact('data'));
    }  

    public function show($id){
    

    }
    
}
