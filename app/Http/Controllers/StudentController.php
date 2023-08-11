<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Imap;
use Illuminate\Support\Facades\DB;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Illuminate\Support\Facades\Auth;
use Dompdf\Dompdf;
use Barryvdh\DomPDF\Facade\Pdf;

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
        $students = Student::latest()->simplePaginate(15);
        $studentscount = count($students);
        $studentscount = Student::count();
        return view('viewstudent',compact('students','studentscount'));
    }
    public function searchStudent(Request $request)
        {
            $search = $request->search;
            $studentscount = Student::count();
            $students = Student::where('name','like','%'.$search.'%')->orWhere('email','like','%'.$search.'%')->orWhere('contact','like','%'.$search.'%')->simplePaginate(15);
            return view('viewstudent',compact('students','studentscount'));
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
    $student->work_experience = $request->work_experience;
    $student->callstatus = $request->callstatus;
    $student->email = $request->email; 
    $student->status = $request->status; 
    $student->remark = $request->remark;   
    //after update 
    $student->dob = $request->dob;
    $student->marital_status = $request->marital_status;
    $student->ielts = 'overall score :'.$request->ieltsoverall.'& not less then :'.$request->ieltsnotlessthenscore;
    $student->ielts_ukvi = 'overall score :'.$request->ieltsukvioverall.'& not less then :'.$request->ieltsukvinotlessthenscore;
    $student->pte = 'overall score :'.$request->pteoverall.'& not less then :'.$request->ptenotlessthenscore;
    $student->tofel = 'overall score :'.$request->toefloverall.'& not less then :'.$request->toeflnotlessthenscore;
    $student->sat = 'overall score :'.$request->satoverall.'& not less then :'.$request->satnotlessthenscore;
    $student->gre = 'overall score :'.$request->greoverall.'& not less then :'.$request->grenotlessthenscore;
    $student->slc = 'grade :'.$request->slcgrade.'& passout year :'.$request->slcpassoutyear;
    $student->plus2 = 'grade :'.$request->plus2grade.'& passout year :'.$request->plus2passoutyear;
    $student->bachelor = 'grade :'.$request->bachelorgrade.'& passout year :'.$request->bachelorpassoutyear;
    $student->master = 'grade :'.$request->mastergrade.'& passout year :'.$request->masterpassoutyear;
    $student->counseled_by = $request->counseled_by;
    $student->major_subject = $request->major_subject;
    $student->save();
    // \App\Models\User::create([
    //     'name'=>$request->name,
    //     'email'=>$request->email,
    //     'password'=> bcrypt('password'),
    //         'is_change'=> 0
    // ]);
    return redirect()->route('studentdata');
    }
    public function edit($id){
        $students = Student::where('id',$id)->first();
        return view('editnewstudent',compact('students'));
    }
    public function view($id){
        $students = Student::where('id',$id)->first();
        return view('viewonestudent',compact('students'));
    }
    public function update(Request $request,$id)
    {
        $student = Student::find($id);
        $student->name = $request->name;
        $student->contact = $request->contact;
        $student->address = $request->address;
        $student->highest_acheived = $request->highest_acheived;
        $student->cgpa = $request->cgpa;
        $student->test_preparation = $request->test_preparation;
        $student->test_score = $request->test_score;
        $student->interest_country = $request->interest_country;
        $student->interest_course = $request->interest_course;
        $student->visa_rejection = $request->visa_rejection;
        $student->work_experience = $request->work_experience;
        $student->callstatus = $request->callstatus;
        $student->email = $request->email;  
        $student->status = $request->status; 
        $student->remark = $request->remark;
        //after
        $student->dob = $request->dob;
        $student->marital_status = $request->marital_status;
        $student->ielts = 'overall score :'.$request->ieltsoverall.'& not less then :'.$request->ieltsnotlessthenscore;
        $student->ielts_ukvi = 'overall score :'.$request->ieltsukvioverall.'& not less then :'.$request->ieltsukvinotlessthenscore;
        $student->pte = 'overall score :'.$request->pteoverall.'& not less then :'.$request->ptenotlessthenscore;
        $student->tofel = 'overall score :'.$request->toefloverall.'& not less then :'.$request->toeflnotlessthenscore;
        $student->sat = 'overall score :'.$request->satoverall.'& not less then :'.$request->satnotlessthenscore;
        $student->gre = 'overall score :'.$request->greoverall.'& not less then :'.$request->grenotlessthenscore;
        $student->slc = 'grade :'.$request->slcgrade.'& passout year :'.$request->slcpassoutyear;
        $student->plus2 = 'grade :'.$request->plus2grade.'& passout year :'.$request->plus2passoutyear;
        $student->bachelor = 'grade :'.$request->bachelorgrade.'& passout year :'.$request->bachelorpassoutyear;
        $student->master = 'grade :'.$request->mastergrade.'& passout year :'.$request->masterpassoutyear;
        $student->counseled_by = $request->counseled_by;
        $student->major_subject = $request->major_subject;  
        $student->save();
        return redirect()->route('studentdata');
    }
    public function delete($id)
        {
            $student = Student::find($id);
            $student->delete();
            return redirect()->route('studentdata');
        }
        public function studentexport(){
            $students = DB::table('students')->get();
            $data = $students->toArray();
        //    dd($data);
            $spreadsheet = new Spreadsheet();

// Set the active worksheet
            $sheet = $spreadsheet->getActiveSheet();
            $sheet->setCellValue('A1','Id')
            ->setCellValue('B1','Name')
            ->setCellValue('C1','Contact')
            ->setCellValue('D1','Address')
     ->setCellValue('E1','Highest_acheived')
    ->setCellValue('F1','Cgpa')
    ->setCellValue('G1','Test_preparation')
    ->setCellValue('H1','Test_score')
    ->setCellValue('I1','Interest_country')
    ->setCellValue('J1','Interest_course')
    ->setCellValue('K1','Work_experience')
    ->SetCellValue('L1','Visa_rejection')
    ->setCellValue('M1','Email')
    ->SetCellValue('N1','password')
    ->setCellValue('O1','userid')
    ->setCellValue('P1','created_at')
    ->SetCellValue('Q1','updatedat')
    ->setCellValue('R1','status')
    ->setCellValue('S1','remark');
// Populate the worksheet with data
        foreach ($data as $rowIndex => $rowData) {
            $id=$rowIndex+2;
            $letter = 'A';

            foreach ($rowData as $columnIndex => $value) {
               
                $sheet->setCellValue($letter.$id,$value);
                $letterAscii = ord($letter);
                $letterAscii++;
                $letter = chr($letterAscii);
                    // $sheet->setCellValue(($columnIndex) , ($rowIndex) , $value);
                   
        }
        }
        $writer = new Xlsx($spreadsheet);
        $writer->save('studentdata.xlsx');
        return response()->download('studentdata.xlsx'); 
         return redirect()->route('studentdata');
}
public function exportPdf(){
    $students = DB::table('students')->get();
    $data = $students->toArray();
    $excelFile='studentdata.xlsx';



    // Load the Excel file
    $spreadsheet = IOFactory::load($excelFile);
    $worksheet = $spreadsheet->getActiveSheet();
    // $data = $worksheet->toArray();
    
    // Convert data to an HTML table
    $html = '<table border="1" style="width:100%;">';
    foreach ($data as $row) {
        $html .= '<tr>';
        foreach ($row as $cell) {
            $html .= '<td>' . $cell . '</td>';
        }
        $html .= '</tr>';
    }
    $html .= '</table>';
    
    
    
    
    
    
    // Create a Dompdf object
    $dompdf = new Dompdf();
    
    // Read the contents of the Excel file
    // $excelContents = file_get_contents($excelFile);
    
    // Load the Excel contents into Dompdf
    $dompdf->loadHtml($html);
    
    // Set paper size and rendering options (optional)
    $dompdf->setPaper('A4', 'landscape');
    $dompdf->render();
    
    // Set the filename and mime type
    $filename = 'data_export.pdf';
    header('Content-Type: application/pdf');
    header('Content-Disposition: attachment;filename="' . $filename . '"');
    header('Cache-Control: max-age=0');
    
    // Output the PDF to the browser
    echo $dompdf->output();
    
    // Clean up the temporary Excel file
    unlink($excelFile);
}
public function pdfexport($id){
    $students = Student::where('id',$id)->first()->toArray();
    // dd($students);
    $pdf = Pdf::loadView('new', compact('students'));
    return $pdf->stream();
// return $pdf->download('student.pdf');
}
}
