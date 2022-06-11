@extends('layouts.adminbase')

@section('title','User List')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">User List</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table">
                                <tread>
                                    <tr>
                                    <th class="text-center">Id</th>
                                    <th>User Name</th>
                                    <th>E-mail</th>
                                    <th>Role</th>
                                    <th  style='width: 120px;' class="text-center">Show/Delete</th>

                                    </tr>
                                    </tread>
                                <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                    <td class="text-center">{{$rs->id}}</td>
                                    <td>{{$rs->name}}</td>
                                    <td>{{$rs->email}}</td>
                                    <td>@foreach($rs->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['rid'=>$role->id,'uid'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure?')">[x]</a>
                                        @endforeach
                                    </td>
                                    <td class="td-actions text-center">
                                        <a href="{{route('admin.user.show',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')"><button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="Show">
                                        <i class="material-icons">visibility</i>
                                        </button></a>
                                        <a href="{{route('admin.user.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure?')"><button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="Delete">
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
