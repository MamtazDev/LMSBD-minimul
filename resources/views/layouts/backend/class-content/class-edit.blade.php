@extends('layouts.backend.backend-app')
@section('title', 'Class Update')
@section('content')

<div class="row mt-5">
    <div class="col-md-8 m-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('class-content.index') }}">Class Content</a></li>
              <li class="breadcrumb-item active" >Edit Class Content</li>
            </ol>
        </nav>
        <div class="card p-3 mt-4">
            <div class="category_title my-3">
                <h3>Edit Class</h3>
            </div>
            <form action="{{ route('class-content.update', $class->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label class="form-label">Course Name<span class="text-danger">*</span></label>
                    <select name="course_id" class="form-control form-select select2" data-bs-placeholder="Select">
                        <option selected="" disabled="">Select Course</option>
                        @foreach($course as $item )
                            <option value="{{ $item->id }}" {{ $item->id == $class->course_id ? 'selected': ''}}>{{ $item->course_name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label class="form-label">Video URL</label>
                    <input type="url" class="form-control" name="class_video" value="{{ $class->class_video }}">
                    @error('class_video')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="form-label">Text</label>
                    <input type="text" class="form-control" name="class_text" value="{{ $class->class_text }}">
                    @error('class_text')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <input class="btn btn-secondary btn-pill" type="submit" value="Update class">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
