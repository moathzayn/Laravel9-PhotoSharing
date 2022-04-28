@extends('layouts.adminbase')

@section('title','Edit Photo:'.$data->title)

@section('content')
<div class="col-md-12">
              <form id="RegisterValidation" action="/admin/photo/update/{{$data->id}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">edit</i>
                    </div>
                    <h4 class="card-title">Edit Photo:{{$data->title}}</h4>
                  </div>
                  <div class="card-body ">
                    <div class="form-group bmd-form-group">
                    <div class="dropdown bootstrap-select show-tick">
                    <label for="exampleEmail" class="bmd-label-floating"></label>
                    <div class="dropdown bootstrap-select show-tick">

                              <select class="selectpicker" name="parent_Id" data-style="select-with-transition" >
                              @foreach($datalist as $rs)
                              <option value="{{$rs->id}}" @if($rs->id==$data->parent_Id) selected="selected" @endif >
                                {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title) }}
                              </option>
                              @endforeach
                              </select>
                            </div>
                            </div>
                    </div>
                    <div class="form-group bmd-form-group">
                    <label for="exampleEmail" class="bmd-label-floating">Title</label>
                    <input type="text" class="form-control" name="title" required="true" aria-required="true" value="{{$data->title}}" >
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Keywords</label>
                      <input type="text" class="form-control" name="keywords" required="true" aria-required="true" value="{{$data->keywords}}">
                    </div>
                    <div class="form-group bmd-form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Description</label>
                      <input type="text" class="form-control" name="description" required="true" aria-required="true" value="{{$data->description}}">
                    </div>
                      <div class="form-group bmd-form-group">
                          <label for="exampleEmail" class="bmd-label-floating">Detail</label>
                          <input type="text" class="form-control" name="detail" required="true" aria-required="true" value="{{$data->detail}}" >
                      </div>
                      <div class="form-group bmd-form-group">
                          <label for="exampleEmail" class="bmd-label-floating">Text</label>
                          <input type="text" class="form-control" name="text" required="true" aria-required="true" value="{{$data->text}}" >
                      </div>
                      <div class="form-group bmd-form-group">
                          <label for="exampleEmail" class="bmd-label-floating">Videlink</label>
                          <input type="text" class="form-control" name="videlink" required="true" aria-required="true" value="{{$data->videlink}}" >
                      </div>
                    <div class="col-lg-5 col-md-6 col-sm-3">
                          <div class="dropdown bootstrap-select show-tick">
                              <select class="selectpicker" name="status" data-style="select-with-transition"  required="true" title="Status" >
                                  <option selected>{{$data->status}}</option>
                                  <option selected>{{$data->status}}</option>
                            <option vaalue="on">On</option>
                            <option value="Off">Off</option>
                          </select>
                        </div>

                        <div class="col-md-4 col-sm-4">
                      <h4 class="title">Upload Image</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{Storage::url($data->image)}}" alt="">
                        </div>
                        <div class="fileinput-preview fileinput-exists thumbnail"></div>
                        <div>
                          <span class="btn btn-rose btn-round btn-file">
                            <span class="fileinput-new">Select image</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="image">
                          </span>
                          <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                        </div>
                      </div>
                    </div>


                    <button type="submit" class="btn btn-rose">Update Photo</button>
                  </div>
                </div>
              </form>
            </div>

@endsection
