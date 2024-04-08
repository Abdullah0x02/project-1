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
    
                                    <h6 class="card-title">Add Role</h6>
    
                                    <form class="forms-sample" method="POST" action="{{route('store.role')}}"
                                     class="forms-sample" enctype="multipart/form-data">@csrf
                                     <!-- enctype=".." when i want to store image in DB-->
                                        
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Role Name</label>
                                            <input type="text" name="name" class="form-control"  value="">
                                        </div>
                                       
                                       
                                        
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <a href="{{route('all.role')}}" class="btn btn-inverse-danger">Cancel</a>
                                    </form>
    
                  </div>
                </div>
                        </div>
        </div>
      </div>
     
    </div>

        </div>

        

@endsection