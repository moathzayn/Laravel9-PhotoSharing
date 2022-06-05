@extends('layouts.adminbaseshow')

@section('title','Show FAQ:'.$data->title)

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">FAQ Show</h3>
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
                                    <th style='width: 12px;'>Question</th>
                                    <td>{{$data->question}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Answer</th>
                                    <td>{!! $data->answer !!}</td>
                                    </tr>
                                    <th style='width: 12px;'>Status</th>
                                    <td>{{$data->status}}</td>
                                    </tr>
                                    </tread>
                            </table>
                            <tr>
                          <td colspan="6"></td>
                          <td colspan="2" class="text-right">
                        <a href="/admin/message/delete/{{$data->id}}" class="btn btn-round btn-rose" onclick="return !window.close()">Delete FAQ<div class="ripple-container"></div></a>
                        </td>
                        </tr>
    </div>
</div>
@endsection
