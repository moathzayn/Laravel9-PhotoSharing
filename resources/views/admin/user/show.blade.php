@extends('layouts.adminbaseshow')

@section('title','Show User:'.$data->name)

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">User Show</h3>
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
                                    <td>{{$data->name}}</td>
                                    </tr>
                                    <tr>
                                        <th style='width: 12px;'>E-mail</th>
                                        <td>{{$data->email}}</td>
                                    </tr>
                                    <th style='width: 12px;'>Roles</th>
                                    <td>
                                        @foreach($data->roles as $rs)
                                            {{$rs->name}}
                                            <a href="{{route('admin.user.destroyroleshow',['rid'=>$rs->id,'uid'=>$data->id])}}" onclick="return confirm('Deleting !! Are you sure?')">[x]</a>
                                        @endforeach
                                    </td>
                                    </tr>


                                    <th style='width: 12px;'>Add Role To User</th>
                                    <td>
                                        <form role="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}" method="post">
                                            @csrf
                                            <div class="dropdown bootstrap-select show-tick">
                                                <select class="selectpicker" name="role_id" data-style="select-with-transition"  required="true" title="Role" >
                                                    @foreach($roles as $role)
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <button type="submit" class="btn btn-round btn-rose">Save<div class="ripple-container"></div></button>
                                        </form>
                                    </td>
                                    </tr>


                                    </tread>
                            </table>
                            <tr>
                          <td colspan="6"></td>
                          <td colspan="2" class="text-right">
                        <a href="/admin/message/delete/{{$data->id}}" class="btn btn-round btn-rose" onclick="return !window.close()">Delete User<div class="ripple-container"></div></a>
                        </td>
                        </tr>
    </div>
</div>
@endsection
