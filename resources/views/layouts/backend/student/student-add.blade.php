@extends('layouts.backend.backend-app')
@section('title', 'Add Student')
@section('content')

<div class="row mt-5">
    <div class="col-md-8 m-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('student.index') }}">Students</a></li>
              <li class="breadcrumb-item active" >Add Student</li>
            </ol>
        </nav>
        <div class="card p-3 mt-4">
            <div class="category_title my-3">
                <h3>Add Student</h3>
            </div>
            <form action="{{ route('student.store') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label class="form-label">Course Name<span class="text-danger">*</span></label>
                    <select name="course_id" class="form-control form-select select2" data-bs-placeholder="Select">
                        <option selected="" disabled="">Select Course</option>
                        @foreach($course_std as $item )
                            <option value="{{ $item->id }}" >{{ $item->course_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Student Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="student_name" placeholder="Student Name">
                    @error('course_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">User Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="username" placeholder="User Name">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Student Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="student_email" placeholder="Student Email">
                    @error('student_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Student Phone<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="student_phone" placeholder="Student Phone">
                    @error('student_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Password<span class="text-danger">*</span></label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="form-group">
                    <label class="form-label">Student Image<span class="text-danger">*</span></label>
                    <input type="file" onchange="document.getElementById('img').src=window.URL.createObjectURL(this.files[0])" class="form-control" name="student_image" >
                </div>

                <div class="form-group">
                    <label for="form-label"></label>
                    <img width="100px" height="100px" id="img" src="{{ url('backend/assets/uploads/default.jpg') }}" >
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input class="btn btn-secondary btn-pill" type="submit" value="Add Student">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
