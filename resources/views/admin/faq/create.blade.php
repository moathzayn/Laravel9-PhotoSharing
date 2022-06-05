@extends('layouts.adminbase')

@section('head')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
@endsection
@yield('namepage','Create FAQ')
@section('title','Add FAQ')

@section('content')
<div class="col-md-12">
  <form id="RegisterValidation" action="{{route('admin.faq.store')}}" method="post" enctype="multipart/form-data">
    @csrf
          <div class="card ">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">library_add</i>
                    </div>
                    <h4 class="card-title">Add Question</h4>
                  </div>
                  <div class="card-body ">
                    <div class="col-lg-5 col-md-6 col-sm-3">
                    <div class="form-group bmd-form-group">
                      <label for="exampleEmail" class="bmd-label-floating">Question</label>
                      <input type="text" class="form-control" name="question" required="true" aria-required="true">
                    <br>
                    </div>
                        <div class="form-group bmd-form-group">
                            <label>Answer</label><br>
                            <textarea type="text" id="detail" class="form-control" name="answer" required="true" aria-required="true">

                          </textarea>
                        </div>
                    <div class="col-lg-5 col-md-6 col-sm-3">
                          <div class="dropdown bootstrap-select show-tick">
                              <select class="selectpicker" name="status" data-style="select-with-transition"  required="true" title="Status" >
                            <option vaalue="on">False</option>
                            <option value="off">True</option>
                          </select>
                        </div>
                    <button type="submit" class="btn btn-rose">Save Question</button>
                  </div>
            </div>
    </form>
  </div>
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
