@extends('layouts.adminbase')

@section('title','Edit Category:'.$data->title)

@section('content')
<div class="col-md-12">
              <form id="RegisterValidation" action="/admin/category/update/{{$data->id}}" method="post" >
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">library_add</i>
                    </div>
                    <h4 class="card-title">Edit {{$data->title}}</h4>
                  </div>
                  <div class="card-body ">
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
                    <div class="col-lg-5 col-md-6 col-sm-3">
                          <div class="dropdown bootstrap-select show-tick">
                              <select class="selectpicker" name="status" data-style="select-with-transition"  required="true" title="Status" >
                                  <option selected>{{$data->status}}</option>
                            <option vaalue="on">On</option>
                            <option value="Off">Off</option>  
                          </select>
                        </div>
                    
                        <div class="col-md-4 col-sm-4">
                      <h4 class="title">Upload Image</h4>
                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                        <div class="fileinput-new thumbnail">
                          <img src="{{asset('assets')}}/admin/img/image_placeholder.jpg" alt="...">
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
                    
                    
                    <button type="submit" class="btn btn-rose">Update Category</button>
                  </div>
                </div>
              </form>
            </div>

@endsection