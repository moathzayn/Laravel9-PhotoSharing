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
                                    <th style='width: 12px;'>First Name</th>
                                    <td>{{$data->firstName}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Last Name</th>
                                    <td>{{$data->lastName}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Subject</th>
                                    <td>{{$data->subject}}</td>
                                    </tr>
                                    <tr>
                                    <th style='width: 12px;'>E-mail</th>
                                    <td>{{$data->email}}</td>
                                    </tr>
                                    <tr>
                                    <th style='width: 12px;'>Phone</th>
                                    <td>{{$data->phone}}</td>
                                    </tr>
                                    <tr>
                                    <th style='width: 12px;'>Message</th>
                                    <td>{{$data->message}}</td>
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
                                        <form role="form" action="{{route('admin.message.update',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <textarea class="swal2-textarea" cols="50" id="note" name="note">
                                                {{$data->note}}
                                            </textarea>
                                            <button type="submit" class="btn btn-round btn-rose">Save Note<div class="ripple-container"></div></button>
                                        </form>
                                    </td>
                                    </tr>


                                    </tread>
                            </table>
                            <tr>
                          <td colspan="6"></td>
                          <td colspan="2" class="text-right">
                        <a href="/admin/message/delete/{{$data->id}}" class="btn btn-round btn-rose" onclick="return !window.close()">Delete Message<div class="ripple-container"></div></a>
                        </td>
                        </tr>
    </div>
</div>
@endsection
