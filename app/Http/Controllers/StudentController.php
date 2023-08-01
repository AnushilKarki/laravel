<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Imap;
use Illuminate\Support\Facades\Auth;

class StudentController extends Controller
{
    public function add(Request $request) {
        $email = $request->email;
        $password = $request->password;
        try {
            $userid = Auth::id();
            $check = Imap::where('email',$email)->get();
            if(sizeof($check) >0){
$msg = 'this email already registered.plz use another email';
return view('addstudent',compact('msg'));
            }
            // Validate the value...
           $mbox = @imap_open("{imap.gmail.com:993/imap/ssl/novalidate-cert}INBOX", $email, $password);
           if($mbox==true){
           
            $student = Imap::create([
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
    public function studentdata(){
        $students = Student::all();
        return view('viewstudent',compact('students'));
    }
    public function addnewstudent(Request $request){
      $student =new Student;
        // if($request->has('name')){
            $student->name = $request->name;
            $student->contact = $request->contact;
            $student->address = $request->address;
            $student->highest_acheived = $request->highest_acheived;
    //    }
    $student->cgpa = $request->cgpa;
    $student->test_preparation = $request->test_preparation;
    $student->test_score = $request->test_score;
    $student->interest_country = $request->interest_country;
    $student->interest_course = $request->interest_course;
    $student->visa_rejection = $request->visa_rejection;
    $student->email = $request->email;   
    $student->save();
    $students = Student::all();
    return view('viewstudent',compact('students'));
    }
}
