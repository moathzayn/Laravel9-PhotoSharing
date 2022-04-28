@extends('layouts.adminbase')

@section('title','Show Photo:'.$data->title)

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
                                        <tr>
                                    <th style='width: 12px;'>Id</th>
                                    <td>{{$data->id}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Keywords</th>
                                    <td>{{$data->keywords}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Description</th>
                                    <td>{{$data->description}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Likes</th>
                                    <td>{{$data->like}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Rate</th>
                                    <td>{{$data->rate}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Videlink</th>
                                    <td>{{$data->videlink}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Image</th>
                                    <td><img src="{{\Illuminate\Support\Facades\Storage::url($data->image)}}"</td>
                                    </tr>
                                    <tr>
                                    <th style='width: 12px;'>Status</th>
                                    <td>{{$data->status}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Last Update</th>
                                    <td>{{$data->updated_at}}</td>
                                    </tr>
                                    <tr>
                                        <th style='width: 12px;'>Date Upload</th>
                                        <td>{{$data->created_at}}</td>
                                    </tr>
                                    </tread>
                            </table>
                            <tr>
                          <td colspan="6"></td>
                          <td colspan="2" class="text-right">
                        <a href="/admin/photo/edit/{{$data->id}}" class="btn btn-round btn-rose">Edit Photo<div class="ripple-container"></div></a>
                        <a href="/admin/photo/delete/{{$data->id}}" class="btn btn-round btn-rose">Delete Photo<div class="ripple-container"></div></a>
                        </td>
                        </tr>
    </div>
</div>
@endsection
