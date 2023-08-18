<?php

namespace App\Http\Controllers;

use App\Models\Remainder;
use Illuminate\Http\Request;

class RemainderController extends Controller
{
    public function getremainderuserwise(){
        $remainder = Remainder::where('user_id',auth()->id())->get();

    }
    public function getremainderstudentwise($id){
        $remainder = Remainder::where('student_id',$id)->get();

    }
    public function storeremainder(Request $request,$id){
        // $studentid = $id;
        $remainder = Remainder::create([
            'followup_date'=>$request->followup_date,
            'followup_detail'=>$request->followup_detail,
            'student_id'=>$id,
            'user_id'=>auth()->id(),
        ]);
        return redirect()->route('viewstudent',$id);
    }
    public function edit($id){
        $remainder = Remainder::where('id',$id)->first();
        return view('editremainder',compact('remainder'));
    }
    public function editremainder(Request $request,$id){
        $remainder = Remainder::find($id);
        $remainder->followup_date = $request->followup_date;
        $remainder->followup_detail = $request->followup_detail;
        $remainder->status = $request->status;
        $remainder->save();
        return redirect()->route('viewstudent',$remainder->student_id);
    }
    public function deleteremainder($id){
        $remainder = Remainder::find($id);
        $remainder->delete();
    }
    public function testcamera(Request $request){
        $data =$request->image;
    
$data = base64_decode($data);

file_put_contents('test.png', $data);
    }
}
