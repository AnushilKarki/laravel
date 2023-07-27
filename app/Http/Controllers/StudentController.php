<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function add(Request $request) {
        $email = $request->email;
        $password = $request->password;
        try {
            $userid = Auth::id();
            $check = Student::where('email',$email)->get();
            if(sizeof($check) >0){
$msg = 'this email already registered.plz use another email';
return view('addstudent',compact('msg'));
            }
            // Validate the value...
           $mbox = @imap_open("{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX", $email, $password);
           if($mbox==true){
           
            $student = Student::create([
                'email'=>$email,
                'password'=>$password,
                'user_id'=>$userid
            ]);
            $msg = 'Thank you for registering email and app password';
           }else {
            $msg = 'plz enter valid email and app password';
            return view('addstudent',compact('msg'));
           }
        } catch (Throwable $e) {
            report($e);
     
            return false;
        }
        return view('email',compact('msg'));
    }
}
