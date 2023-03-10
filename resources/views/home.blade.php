<<<<<<< HEAD
@extends('layouts.frontend.home_master')
@section('title','Home')
@section('content')
<section class="hero__section">
    <div class="container">
        <div class="banner__section">
            <div class="banner__content">
                <h1>Start your tech <span>journey with us</span></h1>
                <p>Farjax Tech & Consulting Inc is an IT consulting company headquartered
                    in New York, USA, providing services like , Business Consulting ,
                    Application Development & Management , Talent Acquisitions, Job
                    Placement and training.</p>
                <button class="applyBtn">Apply Now</button>
            </div>
        </div>

    </div>

</section>

    <!-- bootcamp section start here -->
    <section class="bootcamp__section section__gap">
        <div class="container">
            <div class="bootcamp__inner">
                <div class="row">
                    @foreach ($courses as $course)
                    <div class="col-sm-6 col-md-4">
                        <a href="{{ route('home.course', $course->slug) }}">
                            <div class="bootcamp mx-auto" style="background-image: url('{{ asset($course->thumbnail) }}');">
                                <div class="bootContent">
                                    <h4>{{ $course->course_name}}</h4>
                                    <p><i class="fa-regular fa-calendar"></i> <span>{{ $course->course_duration }}</span></p>
                                    <p><i class="fa-regular fa-clock"></i> <span>Course Starts : {{  \Carbon\Carbon::parse($course->start_date)->format("j M, Y") }}</span></p>
                                </div>
                            </div>
                        </a>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </section>
    <!-- bootcamp section end here -->


    <!-- service section start here -->
    <section class="service__section section__gap">
        <div class="container">
            <div class="service__inner">
                <div class="service__title text-center">
                    <h4>Request For Services</h4>
                    <p>Find out more about how we can help our organization navigate its next. Let us know your areas of interest so that we can serve you better.</p>
                </div>
                <div class="service__form">
                    <form action="{{ route('contact') }}" method="post">
                        @csrf
                        <div class="formInput">
                            <input type="text" name="name" placeholder="Name*" required>

                            <input type="email" name="email"  placeholder="Email*" required>
                        </div>
                        <div class="formInput">
                            <input type="tel" id="phone" name="phone" >
                        </div>
                        <div>
                            <textarea placeholder="Message*" name="message" id=""  rows="1" style="width: 100%;" required></textarea>
                        </div>
                        <div class="form-check d-flex align-items-center">
                            <input type="checkbox" class="form-check-input mb-0 me-2" id="check2" name="option2" value="something" style="width: unset; border: 1px solid #d5d5d5;
                            padding: 10px; cursor: pointer;">
                            <label class="form-check-label" for="check2" style=" color: #33334d; user-select: none; cursor: pointer;">Opt in marketing communication Privacy Statement</label>
                        </div>
                        <button class="applyBtn mt-4" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- service section start here -->
=======
@extends('layouts.backend.backend-app')
@section('title','Dashboard')
@section('content')
 <!-- PAGE-HEADER -->
 <div class="page-header">
    <h1 class="page-title">Dashboard</h1>
    <div>
        <ol class="breadcrumb">
            {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li> --}}
            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
        </ol>
    </div>
</div>
<!-- PAGE-HEADER END -->

<!-- ROW-1 -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Total Courses</h6>
                                <h2 class="mb-0 number-font">{{ count($courses) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Total Batches</h6>
                                <h2 class="mb-0 number-font">{{ count($batches) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Total Classes</h6>
                                <h2 class="mb-0 number-font">{{ count($class) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xl-3">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="d-flex">
                            <div class="mt-2">
                                <h6 class="">Total Student</h6>
                                <h2 class="mb-0 number-font">{{ count($students) }}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ROW-1 END -->


>>>>>>> zerin
@endsection
