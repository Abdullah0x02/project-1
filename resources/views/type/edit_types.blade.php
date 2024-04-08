@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">

   
    <div class="row profile-body">

      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-6 middle-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
    
                                    <h6 class="card-title">Edit property type</h6>
    
                                    <form class="forms-sample" method="POST" action="{{route('update.types')}}"
                                     class="forms-sample" enctype="multipart/form-data">@csrf
                                     <!-- enctype=".." when i want to store image in DB-->
                                        
                                     <input type="hidden" name="id" value="{{$t->id}}">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Type Name</label>
                                            <input type="text" name="type_name" class="form-control" id="exampleInputUsername1" autocomplete="off" value="{{$t->type_name}}">
                                        </div>
                                        <div class="mb-3">
                                          <label for="exampleInputUsername1" class="form-label">Type icon</label>
                                          <input type="text" name="type_icon" class="form-control" id="exampleInputUsername1" autocomplete="off" value="{{$t->type_icon}}">
                                      </div>
                                       
                                        
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                     
                                      <a href="{{route('all.types')}}" class="btn btn-inverse-danger">Cancel</a>
                                    </form>
    
                  </div>
                </div>
                        </div>
        </div>
      </div>
     
    </div>

        </div>

        

@endsection