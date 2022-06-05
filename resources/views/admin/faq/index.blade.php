@extends('layouts.adminbase')

@section('title','FAQ List')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">FAQ List</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table">
                                <tread>
                                    <tr>
                                    <th class="text-center">Id</th>
                                    <th>Question</th>
                                    <th>Answer</th>
                                    <th>Status</th>
                                    <th  style='width: 120px;' class="text-center">Show/edit/Delete</th>

                                    </tr>
                                    </tread>
                                <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                    <td class="text-center">{{$rs->id}}</td>
                                    <td>{{$rs->question}}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td class="td-actions text-center">
                                        <a href="{{route('admin.faq.show',['id'=>$rs->id])}}" ><button type="button" rel="tooltip" class="btn btn-info" data-original-title="" title="Show">
                                                <i class="material-icons">visibility</i></button></a>
                                        <a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"><button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="Edit">
                                                <i class="material-icons">edit</i>
                                            </button></a>
                                        <a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}" onclick="return confirm('Deleting !! Are you sure?')"><button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="Delete">
                                        <i class="material-icons">close</i>
                                        </button></a>
                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        <td colspan="6"></td>
                        <td colspan="2" class="text-right"></td>
                        <a href="{{route('admin.faq.create')}}" class="btn btn-round btn-rose">Create FAQ<div class="ripple-container"></div></a>
                        </tr>
    </div>
</div>
@endsection
