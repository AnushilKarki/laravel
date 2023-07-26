<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function add(Request $request) {
        $email = $request->email;
        $password = $request->password;
        $student = Student::create([
            'email'=>$email,
            'password'=>$password
        ]);
        return view('email');
    }
}
