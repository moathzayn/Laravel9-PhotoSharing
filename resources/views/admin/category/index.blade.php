@extends('layouts.adminbase')

@section('title','Category List')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">Category List</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table">
                                <tread>
                                    <tr>
                                    <th class="text-center">Id</th>
                                    <th>Parent</th>
                                    <th>Title</th>
                                    <th>Keywords</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th  style='width: 120px;' class="text-center">Show/Edit/Delete</th>
                                    
                                    </tr>
                                    </tread>
                                <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                    <td class="text-center">{{$rs->id}}</td>
                                    <td> {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs,$rs->title)}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>{{$rs->keywords}}</td>
                                    <td>{{$rs->description}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px" >
                                        @endif
                                    </td>
                                    <td>{{$rs->status}}</td>
                                    <td class="td-actions text-right">
                                        <a href="/admin/category/show/{{$rs->id}}"><button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="Show">
                                        <i class="material-icons">visibility</i>
                                        </button></a>
                                        <a href="/admin/category/edit/{{$rs->id}}"><button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="Edit">
                                        <i class="material-icons">edit</i>
                                        </button></a>
                                        <a href="/admin/category/delete/{{$rs->id}}"><button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="Delete">
                                        <i class="material-icons">close</i>
                                        </button></a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <tr>
                          <td colspan="6"></td>
                          <td colspan="2" class="text-right">
                          <a href="/admin/category/create" class="btn btn-round btn-rose">Create Category<div class="ripple-container"></div></a>
                        </td>
                        </tr>
    </div>
</div>
@endsection