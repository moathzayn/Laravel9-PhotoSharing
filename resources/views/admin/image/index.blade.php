
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-rose card-header-icon">
            <div class="card-icon">
                    <i class="material-icons">assignment</i>
                </div>
                  <h3 class="card-title">Category Images</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                        <table class="table">
                                <tread>
                                    <tr>
                                    <th class="text-center">Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th  style='width: 120px;' class="text-center">Update/Delete</th>

                                    </tr>
                                    </tread>
                                <tbody>
                                    @foreach($data as $rs)
                                    <tr>
                                    <td class="text-center">{{$rs->id}}</td>
                                    <td>{{$rs->title}}</td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" style="height: 40px" >
                                        @endif
                                    </td>
                                    <td class="td-actions text-right">
                                        <a href="/admin/category/edit/{{$rs->id}}"><button type="button" rel="tooltip" class="btn btn-success" data-original-title="" title="Edit">
                                        <i class="material-icons">refresh</i>
                                        </button></a>
                                        <a href="/admin/category/delete/{{$rs->id}}"><button type="button" rel="tooltip" class="btn btn-danger" data-original-title="" title="Delete">
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

