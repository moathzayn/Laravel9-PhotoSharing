@extends('layouts.adminbase')
@section('title','Setting')
<script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@section('content')
    <form id="RegisterValidation" action="{{route('admin.setting.update')}}" method="post" enctype="multipart/form-data">
        @csrf

    <div class="col-md-12">
        <div class="card ">
            <div class="card-header ">
                <h4 class="card-title">Setting
                    <small class="description"></small>
                </h4>
            </div>
            <div class="card-body ">
                <ul class="nav nav-pills nav-pills-warning" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active show" data-toggle="tab" href="#link1" role="tablist">
                            General
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link2" role="tablist">
                            Smtp Email
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link3" role="tablist">
                            Social Media
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link4" role="tablist">
                            About Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#link5" role="tablist">
                            Contact Page
                        </a>
                    </li>
                </ul>
                <div class="tab-content tab-space">
                    <div class="tab-pane active show" id="link1">
                        <input type="hidden" class="form-control" name="id" required="true" aria-required="true" value="{{$data->id}}" >
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Title</label>
                            <input type="text" class="form-control" name="title" required="true" aria-required="true" value="{{$data->title}}" >
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Keywords</label>
                            <input type="text" class="form-control" name="keywords" id="exampleEmail" value="{{$data->keywords}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Description </label>
                            <input type="text" class="form-control" name="discription" id="exampleEmail" value="{{$data->description}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Company</label>
                            <input type="text" class="form-control" name="company" id="exampleEmail" value="{{$data->company}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Address</label>
                            <input type="text" class="form-control" name="address" id="exampleEmail" value="{{$data->address}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Phone</label>
                            <input type="text" class="form-control" name="phone" id="exampleEmail" value="{{$data->phone}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">E-mail</label>
                            <input type="text" class="form-control" name="email" id="exampleEmail" value="{{$data->email}}">
                        </div>
                        <br>
                        <div class="dropdown bootstrap-select show-tick">
                            <label for="exampleEmail" class="bmd-label-floating">Status</label>
                            <select class="selectpicker" name="status" data-style="select-with-transition"  title="Status" >
                                <option selected>{{$data->status}}</option>
                                <option vaalue="on">On</option>
                                <option value="Off">Off</option>
                            </select>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            <h4 class="title">Icon</h4>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="{{Storage::url($data->icon)}}" width="50px" height="50px" alt="">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail img-circle"></div>
                                <div>
                          <span class="btn btn-round btn-rose btn-file">
                            <span class="fileinput-new">Add Photo</span>
                            <span class="fileinput-exists">Change</span>
                            <input type="file" name="icon">
                          </span>
                                    <br>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="link2">
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Smtp Server</label>
                            <input type="text" class="form-control" name="smtpserver" id="exampleEmail" value="{{$data->smtpserver}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Smtp Email</label>
                            <input type="text" class="form-control" name="smtpemail" id="exampleEmail" value="{{$data->smtpemail}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Smtp Password</label>
                            <input type="password" class="form-control" name="smtppaswword" id="exampleEmail" value="{{$data->smtppassword}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Smtp Port</label>
                            <input type="text" class="form-control" name="smtpport" id="exampleEmail" value="{{$data->smtpport}}">
                        </div>
                    </div>
                    <div class="tab-pane" id="link3">
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Fax</label>
                            <input type="text" class="form-control" name="fax" id="exampleEmail" value="{{$data->fax}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Facebook</label>
                            <input type="text" class="form-control" name="facebook" id="exampleEmail" value="{{$data->facebook}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Instagram</label>
                            <input type="text" class="form-control" name="instagram" id="exampleEmail" value="{{$data->instagram}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Twitter</label>
                            <input type="text" class="form-control" name="twitter" id="exampleEmail" value="{{$data->twitter}}">
                        </div>
                        <div class="form-group bmd-form-group">
                            <label for="exampleEmail" class="bmd-label-floating">Youtube</label>
                            <input type="text" class="form-control" name="youtube" id="exampleEmail" value="{{$data->youtube}}">
                        </div>
                    </div>
                    <div class="tab-pane" id="link4">
                        <div class="form-group bmd-form-group">
                            <label>About Us</label><br>
                            <textarea type="text" id="aboutus" class="form-control" name="aboutus"  aria-required="true">
                                {{$data->aboutus}}
                          </textarea>
                        </div>
                    </div>
                    <div class="tab-pane" id="link5">
                        <div class="form-group bmd-form-group">
                            <label>Contact</label><br>
                            <textarea type="text" id="contact" class="form-control" name="contact" aria-required="true">
                                {{$data->contact}}
                          </textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-rose">Update Setting</button>
    </form>
    </div>
    <script>
        $(function (){
            $('.textarea').summernote()
        })
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#aboutus' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
    <script>
        $(function (){
            $('.textarea').summernote()
        })
    </script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#contact' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
@endsection
