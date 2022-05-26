<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Photos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data= Photos::all();
        return view('admin.photo.index',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $data =  Category::all();
        return view('admin.photo.create',[
            'data'=>$data
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= new Photos();
        $data->category_Id= $request->category_Id;
        $data->user_Id= $request->user_Id;
        $data->title= $request->title;
        $data->detail= $request->detail;
        $data->keywords= $request->keywords;
        $data->description= $request->description;
        $data->like= $request->like;
        $data->rate= $request->rate;
        $data->comment= $request->comment;
        $data->text= $request->text;
        $data->videlink= $request->videlink;
        $data->status= $request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/photo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function show(Photos $photos,$id)
    {
        //
        $data= Photos::find($id);
        return view('admin.photo.show',[
            'data'=>$data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function edit(Photos $photos,$id)
    {
        //
        $data= Photos::find($id);
        $datalist= Category::all();
        return view('admin.photo.edit',[
            'data'=>$data,
            'datalist'=>$datalist

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Photos $photos,$id)
    {
        //
        $data= Photos::find($id);
        $data->category_Id= $request->category_Id;
        $data->user_Id= $request->user_Id;
        $data->title= $request->title;
        $data->keywords= $request->keywords;
        $data->description= $request->description;
        $data->like= $request->like;
        $data->rate= $request->rate;
        $data->comment= $request->comment;
        $data->text= $request->text;
        $data->detail= $request->detail;
        $data->videlink= $request->videlink;
        $data->status= $request->status;
        if($request->file('image')){
            $data->image=$request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/photo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photos  $photos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Photos $photos,$id)
    {
        //
        $data= Photos::find($id);
        if ($data->image && Storage::disk('public')->exists($data->image)){
            Storage::delete($data->image);
        }
        $data->delete();
        return redirect('admin/photo');
    }
}
