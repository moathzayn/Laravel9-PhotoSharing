<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
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
                $imagedata=Photos::all();
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
    public function redirectg(){
                $sliderdata=Category::all();
                $imagedata=Photos::all();
                $setting=setting::first();
                return view('user.userPanel',[
                    'sliderdata'=>$sliderdata,
                    'imagedata'=>$imagedata,
                    'setting'=>$setting
                ]);
    }
    public function upload(){
                $sliderdata=Category::limit(10)->get();
                $setting=setting::first();
                return view('user.upload',[
                    'sliderdata'=>$sliderdata,
                    'setting'=>$setting
                ]);
    }
    public function uploadstore(Request $request){
        $data= new Photos();
        $data->title=$request->input('title');
        $data->category_id=$request->input('category_id');
        $data->user_id=Auth::id();
        $data->description=$request->input('description');
        $data->detail=$request->input('detail');
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('/')->with('info','Your Photo has been send , Thank You');
    }

    public function photo($id){
        $sliderdata=Category::limit(10)->get();
        $photo=Photos::find($id);
        $setting=setting::first();
        $comment= Comment::where('photo_id',$id)->get();
        $user= User::find($photo->user_Id);
        return view('user.photo.show',[
            'data'=>$photo,
            'sliderdata'=>$sliderdata,
            'setting'=>$setting,
            'comment'=>$comment,
            'user'=>$user,
        ]);
    }
    public function category($id){
        $sliderdata=Category::limit(10)->get();
        $photo=Photos::find($id);
        $setting=setting::first();
        $comment= Comment::where('photo_id',$id)->get();
        return view('user.category.show',[
            'data'=>$photo,
            'sliderdata'=>$sliderdata,
            'setting'=>$setting,
            'comment'=>$comment,

        ]);
    }
    public function loginadmin(){
        return view('admin.login');
    }
    public function loginuser(){
        $sliderdata=Category::limit(10)->get();
        $setting=setting::first();
        return view('user.login',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting,
        ]);
    }
    public function register(){
        $sliderdata=Category::limit(10)->get();
        $setting=setting::first();
        return view('user.register',[
            'sliderdata'=>$sliderdata,
            'setting'=>$setting,
        ]);
    }
    public function aboutus(){

        $sliderdata=Category::limit(10)->get();
        $setting=setting::first();
        return view('user.aboutus.aboutus',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
        ]);
    }
    public function references(){
        $setting=setting::first();
        $sliderdata=Category::limit(10)->get();
        return view('user.references.references',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
        ]);
    }
    public function contact(){
        $setting=setting::first();
        $sliderdata=Category::limit(10)->get();
        return view('user.contact.contact',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
        ]);
    }
    public function faq(){
        $setting=setting::first();
        $sliderdata=Category::limit(10)->get();
        $data=Faq::all();
        return view('user.faq.faq',[
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'data'=>$data,
        ]);
    }
    public function storemessage(Request $request){
        $data= new Message();
        $data->firstName=$request->input('firstName');
        $data->lastName=$request->input('lastName');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=$request->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your Message has been send , Thank You');
    }

    public function storecomment(Request $request){
        $data= new Comment();
        $data->user_id=Auth::id();
        $data->photo_id=$request->input('photo_id');
        $data->comment=$request->input('comment');
        $data->rate=$request->input('rate');
        $data->ip=$request->ip();
        $data->save();
        return redirect()->route('photo',['id'=>$request->input('photo_id')])->with('info','Your Message has been send , Thank You');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended('/');
    }
    public function loginadmincheck(Request $request){
        $credentials=$request->validate([
            'email'=>['required','email'],
            'password'=>['required'],
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
        return back()->withErrors([
            'error'=>'The provided credentials do not match our records',
        ])->onlyInput('error');
    }
}
