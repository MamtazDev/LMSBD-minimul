<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all();
        return view('layouts.backend.courses.course-index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.backend.courses.course-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'course_name' => 'required',
            'course_duration' => 'required',
            'start_date' => 'required'
        ]);

        if($request->file('thumbnail'))
        {
            $image = $request->file('thumbnail');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $location = 'backend/assets/uploads/course/';
            $final_image = $location.$name_gen;
            Image::make($image)->save($final_image);

        }

        $course = new Course;
        $course->course_name = $request->course_name;
        $course->course_duration = $request->course_duration;
        $course->start_date = $request->start_date;
        $course->status = $request->status;
        if(!empty($final_image)){
            $course->thumbnail = $final_image;
        }
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('layouts.backend.courses.course-edit', Compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'course_name' => 'required',
            'course_duration' => 'required',
            'start_date' => 'required'
        ]);

        $course = Course::findOrFail($id);

        if($request->file('thumbnail'))
        {
            if(file_exists($course->thumbnail)){
                unlink($course->thumbnail);
            }
            $image = $request->file('thumbnail');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $location = 'backend/assets/uploads/course/';
            $final_image = $location.$name_gen;
            Image::make($image)->save($final_image);
            $course->thumbnail = $final_image;
        }

        $course->course_name = $request->course_name;
        $course->course_duration = $request->course_duration;
        $course->start_date = $request->start_date;
        $course->status = $request->status;
        $course->save();

        return redirect()->route('courses.index')->with('success', 'Course update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::where('course_id', $id)->count();

        if($student > 0){
            return redirect()->back()->with('fail', 'Student is enroll in this course ');
        }else{
            $course = Course::findOrFail($id);
            if($course->thumbnail){
                unlink($course->thumbnail);
            }
            $course->delete();
            return redirect()->back()->with('success', 'Course delete successfully');
        }

    }


    public function inactive($id) {
        Course::findOrFail($id)->update(['status' => 'off']);
        return redirect()->back()->with('success', 'Course Inactive Successfully');
    }

    public function active($id) {
        Course::findOrFail($id)->update(['status' => 'on']);
        return redirect()->back()->with('success', 'Course Active Successfully');
    }



}
