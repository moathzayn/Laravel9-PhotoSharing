<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Photos;
use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function redirect(){
        if(Auth::id()){
            if(Auth::user()->usertype=='0'){
                $sliderdata=Category::limit(10)->get();
                $imagedata=Photos::limit(4)->get();
                $setting=setting::first();
                return view('user.userPanel',[
                    'sliderdata'=>$sliderdata,
                    'imagedata'=>$imagedata,
                    'setting'=>$setting
                ]);
            }else{
                return view('admin.adminPanel');
            }
        }else {
            return redirect()->back();
        }
    }


    public function photo($id){
        $sliderdata=Category::limit(10)->get();
        $photo=Photos::find($id);
        return view('user.photo.show',[
            'data'=>$photo,
            'sliderdata'=>$sliderdata,
        ]);
    }
    public function aboutus(){
        $setting=setting::first();
        $sliderdata=Category::limit(10)->get();
        return view('user.aboutus.aboutus',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
        ]);
    }public function references(){
        $setting=setting::first();
        $sliderdata=Category::limit(10)->get();
        return view('user.references.references',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
        ]);
    }public function contact(){
        $setting=setting::first();
        $sliderdata=Category::limit(10)->get();
        return view('user.contact.contact',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
        ]);
    }
}
