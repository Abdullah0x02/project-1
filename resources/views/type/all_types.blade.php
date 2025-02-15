@extends('admin.admin_dashboard')
@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">

            <a href="{{route('add.types')}}" class="btn btn-inverse-info">Add Property Type</a>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">Property Type All</h6>
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>sl</th>
            <th>Type name</th>
            <th>Type icon</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
                     @foreach ($t as $key=> $item)
          <tr>
            <td>{{$key+1}}</td>
            <td>{{$item->type_name}}</td>
            <td>{{$item->type_icon}}</td>
            <td>
                <a href="{{route('edit.types',$item->id)}}" class="btn btn-inverse-warning">Edit</a>
                <a href="{{route('del.types',$item->id)}}" class="btn btn-inverse-danger">Delete</a>
            </td>
          </tr>
                      @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
        </div>
    </div>

</div>


@endsection