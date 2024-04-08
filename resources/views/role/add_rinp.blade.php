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
    
                                    <h6 class="card-title">Add Roles in P</h6>
    
                                    <form class="forms-sample" method="POST" action="{{route('role.perm.store')}}"
                                     class="forms-sample" enctype="multipart/form-data">@csrf
                                     <!-- enctype=".." when i want to store image in DB-->
                                        
                                        <div class="mb-3">
                                            <label for="exampleInputUsername1" class="form-label">Role Name</label>
                                            <select name="role_id" class="form-select"
                                            id="exampleFormControlSelect1">
                                               <option selected="" disabled="">Select group</option>
                                               @foreach($r as $r1)
                                               <option value="{{$r1->id}}" >{{$r1->name}}</option>
                                               @endforeach
                                           </select>
                                        </div>

                                        <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                <label class="form-check-label" for="exampleCheck1">
                                                                   All P
                                                                </label>
                                                            </div>
                                                            <hr>
                                                            @foreach($p_group as $pg1)
                                                            <div class="row" >
                                                                <div class="col-3">
                                                                    <div class="form-check mb-3">
                                                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                                            <label class="form-check-label" for="exampleCheck1">
                                                                                               {{$pg1->group_name}}
                                                                                            </label>
                                                                                        </div>
                                                                </div>
                                                                <div class="col-9">
                                                                    @php
                                                                     $x=App\Models\User::xf($pg1->group_name)   
                                                                    @endphp
                                                                    @foreach($x as $x1)
                                                                    <div class="form-check mb-3">
                                            <input type="checkbox" class="form-check-input" name="perm[]"
                                            id="exampleCheck1{{$x1->id}}" value="{{$x1->id}}">
                                                                <label class="form-check-label" for="exampleCheck1{{$x1->id}}">
                                                                   {{$x1->name}}
                                                                </label>
                                                            </div>
                                                            @endforeach
                                                                </div>
                                                            </div>
                                                            @endforeach
                                       
                                        
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