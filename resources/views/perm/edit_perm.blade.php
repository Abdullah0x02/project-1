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
    
                                    <h6 class="card-title">Add amenitie</h6>
    
                                    <form class="forms-sample" method="POST" action="{{route('update.perm')}}"
                                     class="forms-sample" enctype="multipart/form-data">@csrf
                                     <!-- enctype=".." when i want to store image in DB-->
                                        <input type="hidden" name="id" value="{{$t->id}}">
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">perm Name</label>
                                            <input type="text" name="name" class="form-control"  value={{$t->name}}>
                                        </div>
                                       
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">group Name</label>
                                            <select name="group_name" class="form-select"
                                             id="exampleFormControlSelect1">
                                                <option selected="" disabled="">Select group</option>
                                                <option value="type" {{$t->group_name=='type'? 'selected':''}}>property type</option>
                                                <option value="state" {{$t->group_name=='state'? 'selected':''}}>state</option>
                                                <option value="amenities" {{$t->group_name=='amenities'? 'selected':''}}>amenitie</option>
                                            </select>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <a href="{{route('all.perm')}}" class="btn btn-inverse-danger">Cancel</a>
                                    </form>
    
                  </div>
                </div>
                        </div>
        </div>
      </div>
     
    </div>

        </div>

        

@endsection