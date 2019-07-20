<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use App\Page;
use App\PageCategory;
use App\ImgUpload;
use App\Post;

use Illuminate\Support\Facades\Mail;
use App\Mail\MailSendContact;
use App\Mail\SendMailCompany;
use App\Jobs\SendEmailContact;

class FrontendController extends Controller
{   
    public function about(){
        return view('front-end.about');
    }
    public function railway_contractors(){
    	return view('front-end.railway-contractors');
    }
    public function mining_services(){
    	return view('front-end.mining-services');
    }
    public function renewable_energy_system(){
    	return view('front-end.renewable-energy-system');
    }
    public function amphibious_excavator(){
    	return view('front-end.amphibious-excavator');
    }
    public function operation_and_maintenance_contractors(){
    	return view('front-end.operation-and-maintenance-contractors');
    }
    public function dredging_and_reclamation(){
    	return view('front-end.dredging-and-reclamation');
    }
    public function construction_equipment_rental_services(){
    	return view('front-end.construction-equipment-rental-services');
    }
    public function clients(){
    	return view('front-end.clients');
    }
    public function infrastructure(){
    	return view('front-end.infrastructure');
    }
    public function contact(Request $request){
        $country_list=DB::table('country_mast')->orderBy('country_name')->get();
        return view('front-end.contact')->with('country_list', $country_list);
    }
    public function getStateList(Request $request)
    {
       // return $request->country_id;
        $states = DB::table("state_mast")
                    ->where("country_code",$request->country_id)
                    ->get();
        return $states;
    }
    public function getCityList(Request $request)
    {     

       // return $request->state_id;
          $city = DB::table("city_mast")
                    ->where("state_code",$request->state_id)
                    ->get();
       return $city;
    }
    public function submitmyform(Request $request)
    {
        
         $this->validate($request,[
               'name'    => 'required|max:255|regex:/^[a-zA-Z ]+$/',       
               'email'   => 'required|email|max:255|unique:contacts,email',       
               "contact" =>'required|max:11|min:11|regex:/^([0-9\s\-\+\(\)]*)$/|unique:contacts,contact',        
               "pin"     =>"required|max:6|min:6|regex:/^([0-9\s\-\+\(\)]*)$/",        
               "mobile"  =>"required|max:10|min:10|regex:/^([0-9\s\-\+\(\)]*)$/|unique:contacts,mobile"
               ],[    
               "name.required" => "Name Should be filled",
              "contact.required" => "contact Should be filled"
        ]);
        
        $name=$request->input('name');
        $email=$request->input('email');
        $address=$request->input('address');
        $city=$request->input('city');
        $pin=$request->input('pin');
        $state=$request->input('state');
        $country=$request->input('country');
        $contact=$request->input('contact');
        $mobile=$request->input('mobile');
        $message=$request->input('message');
        $data=array("name"      => $name,
                    "email"     => $email,
                    "address"   => $address,
                    "city"      => $city,
                    "pin"       => $pin,
                    "state"     => $state,
                    "country"   => $country,
                    "contact"   => $contact,
                    "mobile"    => $mobile,
                    "message"   => $message,
                    "created_at"=> date('Y-m-d H:i:s'),
                    "updated_at"=> date('Y-m-d H:i:s'),
            );
      
       

      DB::table('contacts')->insert($data);
      Mail::to($email)->queue(new MailSendContact($data));
      Mail::to('laxyo@gmail.com')->queue(new SendMailCompany($data));
      return redirect()->back()->withInput()->with(['message'=>'Thank You For Contact Us We Will Contact You Soon...']);

    }
    public function vendor_registration(){
        $users = DB::table("nature_business")->get();
        $use= DB::table("product")->get();
        return view('front-end.vendor_registration')->with('users', $users)->with('use',$use);
    }
    public function vendorform(Request $request)
    {
          $company_name    =$request->input('company_name');
          $company_website =$request->input('company_website');
          $person_name     =$request->input('person_name');
          $designation     =$request->input('designation');
          $email           =$request->input('email');
          $postal_address  =$request->input('postal_address');
          $telephone_no    =$request->input('telephone_no');
          $mobile_no       =$request->input('mobile_no');
          $fax             =$request->input('fax');
          $nature_business =$request->input('nature_business');
          $products        =$request->input('products');
          $customer        =$request->input('customer');
          $pan             =$request->input('pan');
          $tan             =$request->input('tan');
          $tin             =$request->input('tin');
          $ssi_reg_no      =$request->input('ssi_reg_no');
          $excise_no       =$request->input('excise_no');
          $service_tax_no  =$request->input('service_tax_no');
          $data=array('company_name'    => $company_name , 
                      'company_website' => $company_website,
                      'person_name'     =>$person_name,
                      'designation'     =>$designation,
                      'email'           =>$email,
                      'postal_address'  =>$postal_address,
                      'telephone_no'    =>$telephone_no,
                      'mobile_no'       =>$mobile_no,
                      'fax'             =>$fax,
                      'nature_business' =>$nature_business,
                      'products'        =>$products,
                      'customers'        =>$customer,
                      'pan'             =>$pan,
                      'tan'             =>$tan,
                      'tin'             =>$tin,
                      'ssi_reg_no'      =>$ssi_reg_no,
                      'excise_no'       =>$excise_no,
                      'service_tax_no'  =>$service_tax_no,
                  );
       $this->validate($request,[
            'company_name'   =>'required|regex:/^[a-zA-Z]+$/u|max:255',       
            'person_name'    =>'required|regex:/^[a-zA-Z]+$/u|max:255',       
            'designation'    =>'required|regex:/^[a-zA-Z]+$/u|max:255',       
            'email'          => 'required|email|max:255|unique:vender_ragistration,email', 
            'postal_address' =>'required|regex:/^[a-zA-Z0-9]+$/u|max:255', 
            'telephone_no'   =>'required|regex:/^[0-9]+$/u|max:11|min:11|unique:vender_ragistration,telephone_no',
            'mobile_no'      =>'required|regex:/^[0-9]+$/u|max:10|min:10|unique:vender_ragistration,mobile_no',
            'nature_business'=>'required|not_in:0|max:255', 
             'products'      =>'required|not_in:0|max:255', 
           

       ],[
        "company_name.required"   =>"Company Name is Required",
        "person_name.required"    =>"Contact Person Name is Required",
        "designation.required"    =>"Designation is Required",
        "email.required"          =>"Email is Required",
        "postal_address.required" =>"Postal Address is Required",
        "telephone_no.required"   =>"Telephone No is Required",
        "mobile_no.required"      =>"Mobile No is Required",
       "nature_business.not_in"   =>"Select Any One Nature Business Field",
       "products.not_in"          =>"Select Any One Products Field",
       ]);
        DB::table('vender_ragistration')->insert($data);
         return redirect()->back()->withInput()->with(['vender_message'=>'Send Message Successfully']);
        }
    public function career(){
        $post = Post::all();
        return view('front-end.career', compact('post'));
    }
    public function careerform($id){
        $post = Post::findOrFail($id);
        return view('front-end.careerformapply', compact('post'));
    }



    public function laxyo_group_companies(){
        return view('front-end.laxyo-group-companies');
    }
    public function services(){
        return view('front-end.services');
    }
    public function operation_maintenance(){
        return view('front-end.operation-and-maintenance');
    }


}
