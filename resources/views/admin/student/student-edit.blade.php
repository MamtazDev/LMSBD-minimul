@extends('admin.admin_master')
@section('title', 'Student Update')
@section('content')

<div class="row mt-5">
    <div class="col-md-8 m-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('student.index') }}">Students</a></li>
              <li class="breadcrumb-item active" >Edit Student</li>
            </ol>
        </nav>
        <div class="card p-5 mt-4">
            <div class="category_title my-3">
                <h3>Edit Student</h3>
            </div>
            <form action="{{ route('student.update', $student->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label">Course Name<span class="text-danger">*</span></label>
                    <select name="course_id" id="course_id" class="form-control form-select select2" data-bs-placeholder="Select">
                        <option selected="" disabled="">Select Course</option>
                        @foreach($course_std as $item )
                            <option value="{{ $item->id }}" {{ $item->id == $student->course_id ? 'selected': ''}}>{{ $item->course_name }}</option>
                        @endforeach
                    </select>
                    @error('course_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Batch Name<span class="text-danger">*</span></label>
                    <select name="batch_id" id="batch_dropdown" class="form-control form-select select2" data-bs-placeholder="Select">
                        <option selected="" disabled="">Select Batch</option>
                        @foreach($batch as $item )
                            <option value="{{ $item->id }}" {{ $item->id == $student->batch_id ? 'selected': ''}}>
                                {{ $item->batch_name}}
                            </option>
                        @endforeach
                    </select>
                    @error('batch_id')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Student Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="student_name" value="{{ $student->student_name }}">
                    @error('student_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                {{-- <div class="form-group">
                    <label class="form-label">Student User Name<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="username" value="{{ $student->username }}">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}

                <div class="form-group">
                    <label class="form-label">Student Email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="student_email" value="{{ $student->student_email }}">
                    @error('student_email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Student Phone<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="student_phone" value="{{ $student->student_phone }}">
                    @error('student_phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" readonly>
                </div>


                <div class="form-group">
                    <label class="form-label">Student Image</label>
                    <input type="file" onchange="document.getElementById('img').src=window.URL.createObjectURL(this.files[0])" class="form-control" name="student_image" >
                </div>

                <div class="form-group">
                    <label for="form-label"></label>
                    <img width="100px" height="100px" id="img" src="{{ (!empty($student->student_image)) ? asset($student->student_image) : asset('backend/assets/uploads/default.jpg') }}" >
                </div>

                <div class="form-group">
                    <input class="btn btn-secondary btn-pill" type="submit" value="Update Student">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('scripts')

    <script type="text/javascript">
        $(document).ready(function(){
            $('#course_id').change(function(){

                let course_id = $(this).val()
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url: "{{ route('batch.dropdown') }}",
                        type: "POST",
                        data: {
                            course_id : course_id,
                        },
                        success: function(data){
                            $('#batch_dropdown').html(data)
                        },
                    });
                });
        });

    </script>

@endsection

