@extends('admin.admin_dashboard')
@section('admin')
<div class="page-content">


    <div class="row profile-body">
      <!-- left wrapper start -->
      <div class="d-none d-md-block col-md-4 col-xl-4 left-wrapper">
        <div class="card rounded">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-2">

              <div>
                <img class="wd-100 rounded-circle" src="{{asset('upload/user.png')}}" alt="profile">
                <span class="h3 ms-4 " dir="rtl">   عبد الله   </span>
              </div>
              <div class="dropdown">
                <a type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="edit-2" class="icon-sm me-2"></i> <span class="">Edit</span></a>
                  <a class="dropdown-item d-flex align-items-center" href="javascript:;"><i data-feather="git-branch" class="icon-sm me-2"></i> <span class="">Update</span></a>
                </div>
              </div>
            </div>
            <h4><p dir="rtl">اللهم صل وسلم على سيدنا محمد</p></h4>
            <div class="mt-3">
                <label class="tx-11 fw-bolder mb-0 text-uppercase">Useraname:</label>
                <p class="text-muted">{{$data->username}}</p>
              </div>
            <div class="mt-3">
             <label class="tx-11 fw-bolder mb-0 text-uppercase">Joined:</label>
              <p class="text-muted">{{$data->created_at}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Lives:</label>
              <p class="text-muted">Daraa, Syria</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Email:</label>
              <p class="text-muted">{{$data->email}}</p>
            </div>
            <div class="mt-3">
              <label class="tx-11 fw-bolder mb-0 text-uppercase">Website:</label>
              <p class="text-muted"><a href="http:\\www.fb.com" target=blank>www.abdullah.yamen.net</p></a>
            </div>
            <div class="mt-3 d-flex social-links">

              <a href="https://www.facebook.com/AbdullahDA02" target=blank class="btn btn-icon border btn-xs me-2">
                <i data-feather="facebook"></i>
              </a>

            </div>
          </div>
        </div>
      </div>
      <!-- left wrapper end -->
      <!-- middle wrapper start -->
      <div class="col-md-8 col-xl-8 middle-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                                    <div class="mb-3">
                                     <h6 class="card-title">Update Information</h6>
  <form class="forms-sample" method="POST" action="{{route('admin.profile.update')}}"
                                     class="forms-sample" enctype="multipart/form-data">@csrf
                                     <!-- enctype=".." when i want to store image in DB-->

 <label for="exampleInputUsername1" class="form-label">Username</label>
                                            <input type="text" name="username" class="form-control" id="exampleInputUsername1" autocomplete="off" value="{{$data->username}}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$data->email}}">
                                        </div>
                                        <div class="mb-3">
                                           <!-- <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="text" name="password"class="form-control" id="exampleInputPassword1" autocomplete="off"
                   value="{{$data->password}}"> -->
<button type="submit" class="btn btn-primary me-2">Submit</button>
                                        <button class="btn btn-secondary">Cancel</button>
                                    </form>
                                    </div>



                  </div>
                </div>
                        </div>
        </div>
      </div>

    </div>

        </div>



@endsection
