@extends('layouts.adminbase')

@section('title','Show Category:'.$data->title)

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">Category Show</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table">
                                <tread>
                                    <tr>
                                    <th style='width: 12px;'>Data</th>
                                    <td>Details</td>
                                    </tr>
                                    <th style='width: 12px;'>Id</th>
                                    <td>{{$data->id}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Description</th>
                                    <td>{{$data->description}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Image</th>
                                    <td>{{$data->image}}</td>
                                    </tr>
                                    <tr>
                                    <th style='width: 12px;'>Status</th>
                                    <td>{{$data->status}}</td>
                                    </tr>
                                    <tr>
                                    </tread>
                            </table>
                            <tr>
                          <td colspan="6"></td>
                          <td colspan="2" class="text-right">
                        <a href="/admin/category/edit/{{$data->id}}" class="btn btn-round btn-rose">Edit Category<div class="ripple-container"></div></a>
                        <a href="/admin/category/delete/{{$data->id}}" class="btn btn-round btn-rose">Delete Category<div class="ripple-container"></div></a>
                        </td>
                        </tr>
    </div>
</div>
@endsection