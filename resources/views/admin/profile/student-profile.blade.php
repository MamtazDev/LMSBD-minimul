@extends('admin.admin_master')
@section('content')

    <!--app-content open-->
    <div class="main-content app-content mt-0">
        <div class="side-app">

            <!-- CONTAINER -->
            <div class="main-container container-fluid">

                <!-- PAGE-HEADER -->
                <div class="page-header">
                    <h1 class="page-title">Edit Profile</h1>
                    <div>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Pages</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Edit Profile</li>
                        </ol>
                    </div>
                </div>
                <!-- PAGE-HEADER END -->

                <!-- ROW-1 OPEN -->
                <div class="row">
                    <div class="col-xl-4">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Edit Password</div>
                            </div>
                            <div class="card-body">
                                <div class="text-center chat-image mb-5">

                                    <form action="#" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="old_image" value="{{ Auth::user()->student_image }}">
                                        <div class="brround">

                                            <img alt="avatar" width="300px" id="img" height="300px" src="{{ asset(Auth::user()->student_image) }}" class="brround">

                                            <h5 class="mb-1 mt-2 text-dark fw-semibold mt-3">{{ Auth::user()->name }} </h5>

                                            <input onchange="document.getElementById('img').src=window.URL.createObjectURL(this.files[0])" type="file" name="student_image" class="form-control my-4">
                                            <input type="submit" value="Upload" class="btn btn-success">
                                        </div>
                                    </form>


                                </div>
                                {{-- <form action="{{ route('profile.password.change') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Current Password</label>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" name="current_password" type="password" placeholder="Current Password">
                                        </div>
                                        @error('current_password')
                                            <span class="text-danger">{{  $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">New Password</label>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle1">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" name="new_password" type="password" placeholder="New Password">
                                        </div>
                                        @error('new_password')
                                            <span class="text-danger">{{  $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Confirm Password</label>
                                        <div class="wrap-input100 validate-input input-group" id="Password-toggle2">
                                            <a href="javascript:void(0)" class="input-group-text bg-white text-muted">
                                                <i class="zmdi zmdi-eye text-muted" aria-hidden="true"></i>
                                            </a>
                                            <input class="input100 form-control" name="confirm_password" type="password" placeholder="Confirm Password">
                                        </div>
                                        @error('confirm_password')
                                            <span class="text-danger">{{  $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary">Update Password</Button>
                                    </div>
                                </form> --}}
                            </div>
                        </div>
                        <div class="card panel-theme">
                            <div class="card-header">
                                <div class="float-start">
                                    <h3 class="card-title">Contact</h3>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="card-body no-padding">
                                <ul class="list-group no-margin">
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-mail"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="my-auto">{{ Auth::user()->email }}</a>
                                    </li>
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-globe"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="my-auto">{{ Auth::user()->website ? Auth::user()->website : 'www.abcd.com' }}</a>
                                    </li>
                                    <li class="list-group-item d-flex ps-3">
                                        <div class="social social-profile-buttons me-2">
                                            <a class="social-icon text-primary" href="javascript:void(0)"><i class="fe fe-phone"></i></a>
                                        </div>
                                        <a href="javascript:void(0)" class="my-auto">{{ Auth::user()->phone ? Auth::user()->phone : '+125 5826 3658' }}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        {{-- <form action="{{ route('profile.edit') }}" method="post" >
                            @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Profile</h3>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputname">First Name</label>
                                                <input type="text" name="first_name" class="form-control" value="{{ Auth::user()->first_name }}" id="exampleInputname" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputname1">Last Name</label>
                                                <input type="text" name="last_name" class="form-control" value="{{ Auth::user()->last_name }}"  id="exampleInputname1" placeholder="Enter Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" name="email" id="exampleInputEmail1" value="{{ Auth::user()->email }}" placeholder="Email address">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputnumber">Contact Number</label>
                                        <input type="number" name="phone" value="{{ Auth::user()->phone }}" class="form-control" id="exampleInputnumber" placeholder="Contact number">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">About Me</label>
                                        <textarea class="form-control" name="bio" placeholder="My bio........."  rows="6">{{ Auth::user()->bio }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Website</label>
                                        <input class="form-control" name="website" value="{{ Auth::user()->website }}" placeholder="http://splink.com">
                                    </div>

                                    <p class="mg-b-20 mg-sm-b-40"><strong>Date Of Birth</strong></p>
                                    <div class="wd-200 mg-b-30">
                                            <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                                            </div><input name="date_of_birth" class="form-control fc-datepicker" placeholder="MM/DD/YYYY" value="{{ Auth::user()->date_of_birth }}" type="text">
                                        </div>
                                    </div>

                                </div>
                                <div class="card-footer text-end">
                                    <button type="submit" class="btn btn-success my-1">Save</a>
                                </div>
                            </div>
                        </form> --}}
                    </div>
                </div>
                <!-- ROW-1 CLOSED -->

            </div>
            <!--CONTAINER CLOSED -->

        </div>
    </div>
    <!--app-content open-->
@endsection
