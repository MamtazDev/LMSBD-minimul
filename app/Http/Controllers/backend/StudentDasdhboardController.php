<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentDasdhboardController extends Controller
{
    public function index()
    {
        $user = User::find(Auth::user()->id);
        return view('admin.student.student-dashboard', compact('user'));
    }
}
