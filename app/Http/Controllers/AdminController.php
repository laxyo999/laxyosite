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
      $destroy = Career::destroy($id);
      $data = Career::all(); 
      // unlink(public_path('public/document/{{$career->file}}'));
     
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
          $data = Feedback::all(); 
          return view('admin.vender', compact('data'));
          }

//contact
    public function contact(){
      $data = Feedback::all(); 
       return view('admin.contact', compact('data'));
       }


    public function show($id){
    

    }
    
}
