<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Career;
use App\Feedback;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use App\Jobs\SendEmailJob;
class CareerController extends Controller
{
    public function submit(Request $request){
    	 $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'mobileno' => 'required|string|max:11|min:10',
          'file'	=>'nullable|mimes:pdf,docx,doc|max:10240',
        ]); 
    	
    	$career = new Career();
    	$career->job_id = $request->job_id;
      $career->name = $request->name;
    	$career->email = $request->email;
        $career->mobileno = $request->mobileno;
    	$career->address = $request->address;
    	$career->about = $request->about;
    	if ($request->file!=null) {
        
          $file = $request->file('file');
   		 $filename =  time().'_'.$file->getClientOriginalName();
		   $path = $file->storeAs('public/document', $filename);
       $career->file = $filename;
       $url1 = Storage::url('public/document/'.$filename);
       $url = url()->current();
                  $url_1=explode("/",$url);
                  $orignail_url=$url_1[0]."/".$url_1[1]."/".$url_1[2];

        $url1 = $career->doc_url = $orignail_url.$url1;
          $career->save();
      }
       // dd($url1);
     $career->save();
        $data = array(
            'job_id' => $request->job_id,
            'name' => $request->name,
            'email' => $request->email,
            'mobileno'=> $request->mobileno,
            'doc_url' => $career->doc_url,
        );
        
        $toEmail = "rvais@laxyosolutionsoft.com";
        Mail::to($toEmail)->queue(new SendMailable($data));
        return redirect('/career')->with('success', 'Data Inserted Successfully');
   }
    
    public function index(){
    	//
    }


    public function feedback(Request $request){

      $this->validate($request, [
          'name' => 'required',
          'email' => 'required|email',
          'phone1' => 'required',
          'phone2' => 'required',
          'subject'=> 'required',
          'message'=> 'required',          
         
        ]); 
  
      $feedback = new Feedback();
      
      $feedback->name = $request->name;
      $feedback->email = $request->email;
      $feedback->phone1 = $request->phone1;
      $feedback->phone2 = $request->phone2;
      $feedback->subject= $request->subject;
      $feedback->message = $request->message;
      $feedback->save();
     return view('welcome')->with('success', 'Data Inserted Successfully');
   }

}