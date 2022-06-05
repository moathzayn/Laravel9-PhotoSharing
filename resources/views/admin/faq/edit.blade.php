@extends('layouts.adminbase')

@section('title','Edit FAQ:'.$data->title)
@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@section('content')
<div class="col-md-12">
              <form id="RegisterValidation" action="{{route('admin.faq.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                  @csrf
                <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">edit</i>
                    </div>
                    <h4 class="card-title">Edit FAQ</h4>
                  </div>
                  <div class="card-body ">
                    <div class="form-group bmd-form-group">
                    <input type="text" class="form-control" name="question" required="true" aria-required="true" value="{{$data->question}}" >
                    </div>
                      <br>
                      <div class="form-group bmd-form-group">
                          <label>Answer</label>

                          <textarea class="textarea" id='detail' name="answer">
                            {!! $data->answer !!}

                          </textarea>
                      </div>
                    <div class="col-lg-5 col-md-6 col-sm-3">
                          <div class="dropdown bootstrap-select show-tick">
                              <select class="selectpicker" name="status" data-style="select-with-transition"  required="true" value="{{$data->status}}" >
                            <option value="False">False</option>
                            <option value="True">True</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-rose">Update</button>
              </form>
            </div>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/ist/summernote.min.js"></script>
            <script>
                $(function (){
                    $('.textarea').summernote()
                })
            </script>
<script>
    ClassicEditor
        .create( document.querySelector( '#detail' ) )
        .then( editor => {
            console.log( editor );
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection
