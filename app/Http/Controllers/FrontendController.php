<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Page;
use App\PageCategory;
use App\ImgUpload;
use App\Post;
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
    public function contact(){
    	return view('front-end.contact');
    }
    public function vendor_registration(){
    	return view('front-end.vendor-registration');
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
