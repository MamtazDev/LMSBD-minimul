<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Batch;
use App\Models\Course;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = User::all();
        return view('admin.student.student-index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course_std = Course::latest()->get();
        $batch = Batch::latest()->get();
        return view('admin.student.student-add', compact('course_std','batch'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        // $request ->validate([
        //     'course_id' => 'required',
        //     'batch_id' => 'required',
        //     'first_name' => 'required',
        //     'username' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'password' => 'required',
        // ],[
        //     'course_id.required' => 'The course field is required',
        //     'batch_id.required' => 'The batch field is required',
        // ]);

        if($request->file('image'))
        {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $location = 'backend/assets/uploads/student/';
            $final_image = $location.$name_gen;
            Image::make($image)->save($final_image);

        }

        $student = new User;
        $student->course_id = $request->course_id;
        $student->batch_id = $request->batch_id;
        $student->name = $request->name;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->student_phone = $request->student_phone;
        $student->password = Hash::make($request->password);
        if(!empty($final_image)){
            $student->student_image = $final_image;
        }
        $student->save();

        return redirect()->route('student.index')->with('success', 'Student create successfully');
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
        $student = User::findOrFail($id);
        $course_std = Course::latest()->get();
        $batch = Batch::latest()->get();
        return view('admin.student.student-edit', compact('student', 'course_std','batch'));
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
        $request ->validate([
            'course_id' => 'required',
            'batch_id' => 'required',
            'student_name' => 'required',
            'username' => 'required',
            'student_email' => 'required|email',
            'student_phone' => 'required',
        ],[
            'course_id.required' => 'The course field is required',
            'batch_id.required' => 'The course field is required',
        ]);

        $student = User::findOrFail($id);

        if($request->file('student_image'))
        {
            if(file_exists($student->student_image)){
                unlink($student->student_image);
            }
            $image = $request->file('student_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $location = 'backend/assets/uploads/student/';
            $final_image = $location.$name_gen;
            Image::make($image)->save($final_image);
            $student->student_image = $final_image;
        }

        $student->course_id = $request->course_id;
        $student->batch_id = $request->batch_id;
        $student->name = $request->name;
        $student->username = $request->username;
        $student->email = $request->email;
        $student->student_phone = $request->student_phone;
        // $student->password = Hash::make($request->password);
        $student->save();

        return redirect()->route('student.index')->with('success', 'Student update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = User::findOrFail($id);
        if($student->student_image){
            unlink($student->student_image);
        }
        $student->delete();
        return redirect()->back()->with('success', 'Student delete successfully');
    }

    public function dropdown(Request $request)
    {

        $show_batch = "<option value>Select Batch</option>";
        $sub_batch = Batch::where('course_id', $request->course_id)->get(['id','batch_name']);
        foreach ($sub_batch as $batch) {
            $show_batch .= "<option value='$batch->id'>$batch->batch_name</option>";
        }
        echo $show_batch;
    }


}
