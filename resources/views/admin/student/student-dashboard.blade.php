@extends('admin.admin_master')
@section('title', 'Student Dashboard')
@section('content')
{{-- <div class="row mt-5">
    <div class="col-md-8 m-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item active" >Student Dashboard</li>
            </ol>
        </nav>
        <div class="card p-5 mt-4">
            <div class="category_title my-3">
                <h3>Student</h3>
            </div>

        </div>
    </div>
</div> --}}

<!-- PAGE-HEADER -->
<div class="page-header">
    <h1 class="page-title">Profile</h1>
    <div>
        <ol class="breadcrumb">

            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 OPEN -->
<div class="row" id="user-profile">
    <div class="col-lg-12">
        <div class="row">
            {{-- <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">About</div>
                    </div>
                    <div class="card-body">
                        <div>
                            <h5>Biography<i class="fe fe-edit-3 text-primary mx-2"></i></h5>
                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure.
                                <a href="javascript:void(0)">Read more</a>
                            </p>
                        </div>
                        <hr>
                        <div class="d-flex align-items-center mb-3 mt-3">
                            <div class="me-4 text-center text-primary">
                                <span><i class="fe fe-briefcase fs-20"></i></span>
                            </div>
                            <div>
                                <strong>San Francisco, CA </strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-3">
                            <div class="me-4 text-center text-primary">
                                <span><i class="fe fe-map-pin fs-20"></i></span>
                            </div>
                            <div>
                                <strong>Francisco, USA</strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-3">
                            <div class="me-4 text-center text-primary">
                                <span><i class="fe fe-phone fs-20"></i></span>
                            </div>
                            <div>
                                <strong>+125 254 3562 </strong>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3 mt-3">
                            <div class="me-4 text-center text-primary">
                                <span><i class="fe fe-mail fs-20"></i></span>
                            </div>
                            <div>
                                <strong>georgeme@abc.com </strong>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="col-xl-9">
                <div class="card">
                    <div class="card-body">
                        <h2>Zerin</h2>
                    </div>
                </div>

            </div>
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-header">
                        <div class="card-title">Our Latest News</div>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="media media-xs overflow-visible">
                                <img class="avatar bradius avatar-xl me-3" src="../assets/images/users/12.jpg" alt="avatar-img">
                                <div class="media-body valign-middle">
                                    <a href="javascript:void(0)" class="fw-semibold text-dark">John Paige</a>
                                    <p class="text-muted mb-0"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- COL-END -->
</div>
<!-- ROW-1 CLOSED -->
@endsection
