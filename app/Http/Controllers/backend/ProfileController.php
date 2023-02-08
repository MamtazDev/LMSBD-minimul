<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Image;


class ProfileController extends Controller
{
    public function profile_index()
    {
        return view('layouts.backend.profile.profile-index');
    }

    public function StudentProfile(){
        $student = User::find(Auth::user()->id)->get();

        return view('admin.profile.student-profile', compact('student'));
    }

    public function update_image(Request $request)
    {

        $image = $request->file('image');

        if($image != ""){

            if(Auth::user()->image != "backend/assets/uploads/default.png"){
                if(file_exists($request->old_image)){
                    unlink($request->old_image);
                }
            }
        }

        $imag_ext = $image->getClientOriginalExtension();
        $hexCode = hexdec(uniqid());
        $full_name = $hexCode.'.'.$imag_ext;
        $upload_location = 'backend/assets/uploads/profile/';
        $last_image = $upload_location.$full_name;
        Image::make($image)->resize(300, 300)->save($last_image);
        User::findOrFail(Auth::id())->update([
            'image' => $last_image,
        ]);

        return redirect()->back()->with('success', 'Profile Image update success');

    }


    public function profile_password_change(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ],[
            'current_password.required' => 'Old Password is required !',
            'new_password.required' => 'New Password is required !',
            'confirm_password.required' => 'Confirm Password is required !',
        ]);

        if(Hash::check($request->current_password, Auth::user()->password)){

            if($request->new_password == $request->confirm_password){

                User::find(Auth::id())->update([
                    'password' => Hash::make($request->new_password),
                ]);
                Auth::logout();
                return redirect()->route('login');
            }
            else {
                return redirect()->back()->with('fail', 'New password and confirm password does not match');
            }
        }
        else {
           return redirect()->back()->with('fail', 'Old password and current password does not match !');
        }

    }

    public function edit_profile(Request $request)
    {

        User::find(Auth::id())->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'bio' => $request->bio,
            'website' => $request->website,
            'date_of_birth' => $request->date_of_birth
        ]);
        return redirect()->back()->with('success', 'Profile update succes');
    }

}

