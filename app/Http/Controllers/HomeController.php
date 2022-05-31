<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Photos;
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
                return view('user.userPanel',[
                    'sliderdata'=>$sliderdata,
                    'imagedata'=>$imagedata
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
}
