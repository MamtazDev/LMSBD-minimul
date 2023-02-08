@extends('admin.admin_master')
@section('title', 'Class Content')
@section('content')
<div class="row mt-5">
    <div class="col-md-12 m-auto">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('class-content.index') }}">Class List</a></li>
                <li class="breadcrumb-item active">Class Content</li>
            </ol>
          </nav>

        <div class="card p-5 mt-4">
            <div class="category_title my-3 d-flex justify-content-between">
                <div class="left">
                     <h3>Class Content</h3>
                </div>
            </div>

            <div class="table-responsive">
                <table class="table table-bordered mb-0">
                    <tbody>
                        <tr>
                            <th>Course Name</th>
                            <td>{{ $items->course->course_name }}</td>
                        </tr>
                        <tr>
                            <th>Video URL</th>
                            <td>{{ $items->class_video }}</td>
                        </tr>
                        <tr>
                            <th>Class Content</th>
                            <td>{!! $items->class_text !!}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
