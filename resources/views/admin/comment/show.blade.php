@extends('layouts.adminbaseshow')

@section('title','Show Message:'.$data->title)

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">Message Show</h3>
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
                                    <th style='width: 12px;'>User Name</th>
                                    <td>{{$data->user->name}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Photo</th>
                                    <td>{{$data->photo->title}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Comment</th>
                                    <td>{{$data->comment}}</td>
                                    </tr>
                                    <th style='width: 12px;'>IP Address</th>
                                    <td>{{$data->ip}}</td>
                                    </tr>
                                    </tr>
                                    <th style='width: 12px;'>Time Send</th>
                                    <td>{{$data->ceated_at}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Admin note:</th>
                                    <td>
                                        <form role="form" action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <div class="dropdown bootstrap-select show-tick">
                                                <select class="selectpicker" name="status" data-style="select-with-transition"  required="true" title="Status" >
                                                    <option selected>{{$data->status}}</option>
                                                    <option value="True">True</option>
                                                    <option value="False">False</option>
                                                </select>
                                            <button type="submit" class="btn btn-round btn-rose">Save Note<div class="ripple-container"></div></button>
                                        </form>
                                    </td>
                                    </tr>
                                    </tread>
                            </table>
                            <tr>
                          <td colspan="6"></td>
                          <td colspan="2" class="text-right">
                        <a href="/admin/comment/delete/{{$data->id}}" class="btn btn-round btn-rose" onclick="return !window.close()">Delete Message<div class="ripple-container"></div></a>
                        </td>
                        </tr>
    </div>
</div>
@endsection
