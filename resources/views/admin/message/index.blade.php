@extends('layouts.adminbase')

@section('title','Messages List')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">Message List</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table">
                                <tread>
                                    <tr>
                                    <th class="text-center">Id</th>
                                    <th>First Name</th>
                                    <th >Last Name</th>
                                    <th>Subject</th>
                                    <th>E-mail</th>
                                    <th>Phone</th>
                                    <th>Message</th>
                                    <th>IP Address</th>
                                    <th  style='width: 120px;' class="text-center">Show/Delete</th>

                                    </tr>
                                    </tread>
                                <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                    <td class="text-center">{{$rs->id}}</td>
                                    <td>{{$rs->firstName}}</td>
                                    <td>{{$rs->lastName}}</td>
                                    <td>{{$rs->subject}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>{{$rs->phone}}</td>
                                    <td>{{$rs->message}}</td>
                                    <td>{{$rs->ip}}</td>
                                    <td class="td-actions text-center">
                                        <a href="{{route('admin.message.show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="Show">
                                                <i class="material-icons">visibility</i>

                                            </button></a>
                                        <a href="{{route('admin.message.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure?')"><button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="Delete">
                                        <i class="material-icons">close</i>
                                        </button></a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </tr>
    </div>
</div>
@endsection
