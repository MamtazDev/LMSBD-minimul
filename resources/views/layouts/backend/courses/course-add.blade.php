@extends('layouts.backend.backend-app')
@section('title', 'Add Course')
@section('content')

<div class="row mt-5">
    <div class="col-md-8 m-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">Courses</a></li>
              <li class="breadcrumb-item active">Add Course</li>
            </ol>
        </nav>
        <div class="card p-3 mt-4">
            <div class="category_title my-3">
                <h3>Add Course</h3>
            </div>
            <form action="{{ route('courses.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="form-label">Course Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="course_name" placeholder="Course Name">
                    @error('course_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Course Duration<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="course_duration" placeholder="Course Duration">
                    @error('course_duration')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <label class="form-label">Start Date<span class="text-danger">*</span></label>
                <div class="wd-200 mg-b-30">
                     <div class="input-group">
                        <div class="input-group-text">
                            <i class="fa fa-calendar tx-16 lh-0 op-6"></i>
                        </div><input name="start_date" class="form-control fc-datepicker" placeholder="MM/DD/YYYY"  type="text">
                    </div>
                    @error('start_date')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <div class="form-check form-switch">
                        <input class="form-check-input form-control" type="checkbox"  name="status" role="switch" id="flexSwitchCheckDefault">
                        <label class="form-label" for="flexSwitchCheckDefault">Status</label>
                    </div>
                </div>

                <div class="form-group">
                    <label class="form-label">Thumbnail</label>
                    <input type="file" onchange="document.getElementById('img').src=window.URL.createObjectURL(this.files[0])" class="form-control" name="thumbnail" >
                </div>

                <div class="form-group">
                    <label for="form-label"></label>
                    <img width="100px" height="100px" id="img" src="{{ url('backend/assets/uploads/default.jpg') }}" >
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input class="btn btn-secondary btn-pill" type="submit" value="Add Course">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
