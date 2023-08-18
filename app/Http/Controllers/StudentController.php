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
use Carbon\Carbon;
use Illuminate\Support\Facades\Cache;
use Dompdf\Dompdf;
use App\Models\Remainder;
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
        $remainders = Remainder::where('user_id',auth()->id())->where('status',1)->whereDate('followup_date',today())->get();
        return view('viewstudent',compact('students','studentscount','remainders'));
    }
    public function searchStudent(Request $request)
        {
            $search = $request->search;
            $studentscount = Student::count();
            $remainders = Remainder::where('user_id',auth()->id())->where('status',1)->whereDate('followup_date',today())->get();
            $students = Student::where('name','like','%'.$search.'%')->orWhere('email','like','%'.$search.'%')->orWhere('contact','like','%'.$search.'%')->orWhere('studentid','like','%'.$search.'%')->simplePaginate(15);
            return view('viewstudent',compact('students','studentscount','remainders'));
        }
    public function addnewstudent(Request $request){
        $sid = Carbon::now();
        $month = $sid->month;
        $year = substr(($sid->year),1);
 
        $value = cache('applicantid');
        if($value){
            $y = cache('year');
            $m = cache('month');
            if($sid->year == $y && $sid->month == $m){
                Cache::increment('applicantid');
            }else {
                Cache::flush();
                Cache::put('year', $sid->year);
                Cache::put('month', $sid->month);
                Cache::put('applicantid', 1);
            }
        }else {
           Cache::put('applicantid', 1);
           Cache::put('year', $sid->year);
           Cache::put('month', $sid->month);
        }
        $value = cache('applicantid');

        if($value<10){
            if($month<10){
                $studentid = 'svd-'.$year.'0'.$month.'00'.$value;
            }else {
                $studentid = 'svd-'.$year.$month.'00'.$value;
            }
        }else if($value>=10 && $value<100){
            if($month<10){
                $studentid = 'svd-'.$year.'0'.$month.'0'.$value;
            }else {
                $studentid = 'svd-'.$year.$month.'0'.$value;
            }
        }else {
            if($month<10){
                $studentid = 'svd-'.$year.'0'.$month.$value;
            }else {
                $studentid = 'svd-'.$year.$month.$value;
            }
        }
       
        // dd($studentid);
      $student = new Student;
        // if($request->has('name')){
            $student->name = $request->name;
            $student->studentid = $studentid;
            $student->contact = $request->contact;
            $student->address = $request->address;
            $student->highest_acheived = $request->highest_acheived;
            $student->gurdain_name = $request->gurdain_name;
            $student->gurdain_no = $request->gurdain_no;
            $student->interest_city = $request->interest_city;
    //    }
    $student->cgpa = $request->cgpa;
    $student->test_preparation = $request->test_preparation;
    $student->test_score = $request->test_score;
    $student->interest_country = $request->interest_country;
    $student->interest_course = $request->interest_course;
    $student->visa_rejection = $request->visa_rejection;
    $student->work_experience = $request->work_experience;
    $student->calldetail = $request->calldetail;
    $student->email = $request->email; 
    $student->status = $request->status; 
    $student->remark = $request->remark;   
    //after update 
    $student->dob = $request->dob;
    $student->marital_status = $request->marital_status;

    $student->ielts = $request->ieltsoverall;
    $student->ielts_ukvi = $request->ieltsukvioverall;
    $student->pte = $request->pteoverall;
    $student->tofel = $request->toefloverall;
    $student->sat = $request->satoverall;
    $student->gre = $request->greoverall;

    $student->ielts_notlessthen = $request->ieltsnotlessthenscore;
    $student->ielts_ukvi_notlessthen = $request->ieltsukvinotlessthenscore;
    $student->pte_notlessthen = $request->ptenotlessthenscore;
    $student->tofel_notlessthen = $request->toeflnotlessthenscore;
    $student->sat_notlessthen = $request->satnotlessthenscore;
    $student->gre_notlessthen = $request->grenotlessthenscore;

    $student->ielts_issue_date = $request->ielts_issue_date;
    $student->ielts_ukvi_issue_date = $request->ielts_ukvi_issue_date;
    $student->pte_issue_date = $request->pte_issue_date;
    $student->tofel_issue_date = $request->toefl_issue_date;
    $student->sat_issue_date= $request->sat_issue_date;
    $student->gre_issue_date = $request->gre_issue_date;
    // $student->slc = 'grade :'.$request->slcgrade.'& passout year :'.$request->slcpassoutyear;
    // $student->plus2 = 'grade :'.$request->plus2grade.'& passout year :'.$request->plus2passoutyear;
    // $student->bachelor = 'grade :'.$request->bachelorgrade.'& passout year :'.$request->bachelorpassoutyear;
    // $student->master = 'grade :'.$request->mastergrade.'& passout year :'.$request->masterpassoutyear;

    $student->master = $request->masterlevel;
    $student->bachelor = $request->bachelorlevel;
    $student->plus2 = $request->plus2level;
    $student->slc = $request->slclevel;

    $student->master_score = $request->mastergrade;
    $student->bachelor_score = $request->bachelorgrade;
    $student->plus2_score = $request->plus2grade;
    $student->slc_score = $request->slcgrade;

    $student->master_passoutyear = $request->masterpassoutyear;
    $student->bachelor_passoutyear = $request->bachelorpassoutyear;
    $student->plus2_passoutyear = $request->plus2passoutyear;
    $student->slc_passoutyear = $request->slcpassoutyear;

   
    $student->counseled_by = $request->counseled_by;
    $student->major_subject = $request->major_subject;
    $student->save();
   $newuser = \App\Models\User::create([
        'name'=>$studentid,
        'email'=>$request->email,
        'password'=> bcrypt('sajilo@123'),
            'is_change'=> 0
    ]);

    // create remainder
    // 
    $authid = Auth()->id();
    $studentid = $student->id;
    // $remainder = Remainder::create([
    //     'student_id'=>$studentid,
    //     'user_id'=>$authid,
    //     'followup_date'=> '',
    //     'followup_detail'=> ''
    // ]);
    return redirect()->route('studentdata');
    }
    public function edit($id){
        $students = Student::where('id',$id)->first();
        return view('editApplicant',compact('students'));
    }
    public function view($id){
        $students = Student::where('id',$id)->first();
        $remainders = Remainder::where('student_id',$id)->get();
        return view('viewonestudent',compact('students','remainders'));
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
        $student->calldetail = $request->calldetail;
        $student->email = $request->email;  
        $student->status = $request->status; 
        $student->remark = $request->remark;
        $student->gurdain_name = $request->gurdain_name;
        $student->gurdain_no = $request->gurdain_no;
        $student->interest_city = $request->interest_city;
        //after
        $student->dob = $request->dob;
        $student->marital_status = $request->marital_status;

        // $student->ielts = 'overall score :'.$request->ieltsoverall.'& not less then :'.$request->ieltsnotlessthenscore;
        // $student->ielts_ukvi = 'overall score :'.$request->ieltsukvioverall.'& not less then :'.$request->ieltsukvinotlessthenscore;
        // $student->pte = 'overall score :'.$request->pteoverall.'& not less then :'.$request->ptenotlessthenscore;
        // $student->tofel = 'overall score :'.$request->toefloverall.'& not less then :'.$request->toeflnotlessthenscore;
        // $student->sat = 'overall score :'.$request->satoverall.'& not less then :'.$request->satnotlessthenscore;
        // $student->gre = 'overall score :'.$request->greoverall.'& not less then :'.$request->grenotlessthenscore;
        // $student->slc = 'grade :'.$request->slcgrade.'& passout year :'.$request->slcpassoutyear;
        // $student->plus2 = 'grade :'.$request->plus2grade.'& passout year :'.$request->plus2passoutyear;
        // $student->bachelor = 'grade :'.$request->bachelorgrade.'& passout year :'.$request->bachelorpassoutyear;
        // $student->master = 'grade :'.$request->mastergrade.'& passout year :'.$request->masterpassoutyear;
        $student->ielts = $request->ieltsoverall;
    $student->ielts_ukvi = $request->ieltsukvioverall;
    $student->pte = $request->pteoverall;
    $student->tofel = $request->toefloverall;
    $student->sat = $request->satoverall;
    $student->gre = $request->greoverall;

    $student->ielts_notlessthen = $request->ieltsnotlessthenscore;
    $student->ielts_ukvi_notlessthen = $request->ieltsukvinotlessthenscore;
    $student->pte_notlessthen = $request->ptenotlessthenscore;
    $student->tofel_notlessthen = $request->toeflnotlessthenscore;
    $student->sat_notlessthen = $request->satnotlessthenscore;
    $student->gre_notlessthen = $request->grenotlessthenscore;


    $student->ielts_issue_date = $request->ielts_issue_date;
    $student->ielts_ukvi_issue_date = $request->ielts_ukvi_issue_date;
    $student->pte_issue_date = $request->pte_issue_date;
    $student->tofel_issue_date = $request->toefl_issue_date;
    $student->sat_issue_date= $request->sat_issue_date;
    $student->gre_issue_date = $request->gre_issue_date;
    // $student->slc = 'grade :'.$request->slcgrade.'& passout year :'.$request->slcpassoutyear;
    // $student->plus2 = 'grade :'.$request->plus2grade.'& passout year :'.$request->plus2passoutyear;
    // $student->bachelor = 'grade :'.$request->bachelorgrade.'& passout year :'.$request->bachelorpassoutyear;
    // $student->master = 'grade :'.$request->mastergrade.'& passout year :'.$request->masterpassoutyear;

    $student->master = $request->masterlevel;
    $student->bachelor = $request->bachelorlevel;
    $student->plus2 = $request->plus2level;
    $student->slc = $request->slclevel;

    $student->master_score = $request->mastergrade;
    $student->bachelor_score = $request->bachelorgrade;
    $student->plus2_score = $request->plus2grade;
    $student->slc_score = $request->slcgrade;

    $student->master_passoutyear = $request->masterpassoutyear;
    $student->bachelor_passoutyear = $request->bachelorpassoutyear;
    $student->plus2_passoutyear = $request->plus2passoutyear;
    $student->slc_passoutyear = $request->slcpassoutyear;

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
            $data = json_decode( json_encode($data), true);
            // dd($data);
        //    dd($data);
            $spreadsheet = new Spreadsheet();
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
    ->SetCellValue('Q1','updated_at')
    ->setCellValue('R1','status')
    ->setCellValue('S1','remark')
    ->SetCellValue('T1','callstatus')
    ->setCellValue('U1','dob')
    ->SetCellValue('V1','master')
    ->setCellValue('W1','bachelor')
    ->setCellValue('X1','plus2')
    ->SetCellValue('Y1','slc')
    ->setCellValue('Z1','major_subject')
    ->SetCellValue('AA1','marital_status')
    ->setCellValue('AB1','ielts')
    ->SetCellValue('AC1','ielts_ukvi')
    ->setCellValue('AD1','tofel')
    ->setCellValue('AE1','sat')
    ->SetCellValue('AF1','pte')
    ->setCellValue('AG1','gre')
    ->SetCellValue('AH1','extra')
    ->setCellValue('AI1','counseled by')
    ->SetCellValue('AJ1','studentid')
    ->setCellValue('AK1','master_score')
    ->setCellValue('AL1','bachelor_score')
    ->SetCellValue('AM1','plus2_score')
    ->setCellValue('AN1','slc_score')
    ->SetCellValue('AO1','master_passoutyear')
    ->setCellValue('AP1','bachelor_passoutyear')
    ->SetCellValue('AQ1','plus2_passoutyear')
    ->setCellValue('AR1','slc_passoutyear')
    ->setCellValue('AS1','ielts_notlessthen')
    ->SetCellValue('AT1','ielts_ukvi_notlessthen')
    ->setCellValue('AU1','tofel_notlessthen')
    ->SetCellValue('AV1','sat_notlessthen')
    ->setCellValue('AW1','pte_notlessthen')
    ->SetCellValue('AX1','gre_notlessthen')
    ->setCellValue('AY1','gurdain name')
    ->SetCellValue('AZ1','gurdain_no')
    ->setCellValue('BA1','interest_city')
    ->setCellValue('BA2','ielts issue date')
    ->setCellValue('BA3','ielts_ukvi issue date')
    ->setCellValue('BA4','pte issue date')
    ->setCellValue('BA5','toefel issue date')
    ->setCellValue('BA6','sat issue date')
    ->setCellValue('BA7','gre issue date')
    ->setCellValue('BA8','call detail');
            $sheet
            ->fromArray(
                $data,  // The data to set
                NULL,        // Array values with this value will not be set
                'A2'         // Top left coordinate of the worksheet range where
                             //    we want to set these values (default is A1)
            );
// Set the active worksheet
//             $sheet = $spreadsheet->getActiveSheet();
//             $sheet->setCellValue('A1','Id')
//             ->setCellValue('B1','Name')
//             ->setCellValue('C1','Contact')
//             ->setCellValue('D1','Address')
//      ->setCellValue('E1','Highest_acheived')
//     ->setCellValue('F1','Cgpa')
//     ->setCellValue('G1','Test_preparation')
//     ->setCellValue('H1','Test_score')
//     ->setCellValue('I1','Interest_country')
//     ->setCellValue('J1','Interest_course')
//     ->setCellValue('K1','Work_experience')
//     ->SetCellValue('L1','Visa_rejection')
//     ->setCellValue('M1','Email')
//     ->SetCellValue('N1','password')
//     ->setCellValue('O1','userid')
//     ->setCellValue('P1','created_at')
//     ->SetCellValue('Q1','updatedat')
//     ->setCellValue('R1','status')
//     ->setCellValue('S1','remark')
//     ->SetCellValue('T1','callstatus')
//     ->setCellValue('U1','dob')
//     ->SetCellValue('V1','master')
//     ->setCellValue('W1','bachelor')
//     ->setCellValue('X1','plus2')
//     ->SetCellValue('Y1','slc')
//     ->setCellValue('Z1','major_subject')
//     ->SetCellValue('AA1','marital_status')
//     ->setCellValue('AB1','ielts')
//     ->SetCellValue('AC1','ielts_ukvi')
//     ->setCellValue('AD1','tofel')
//     ->setCellValue('AE1','sat')
//     ->SetCellValue('AF1','pte')
//     ->setCellValue('AG1','gre')
//     ->SetCellValue('AH1','extra')
//     ->setCellValue('AI1','counseled by')
//     ->SetCellValue('AJ1','studentid')
//     ->setCellValue('AK1','master_score')
//     ->setCellValue('AL1','bachelor_score')
//     ->SetCellValue('AM1','plus2_score')
//     ->setCellValue('AN1','slc_score')
//     ->SetCellValue('AO1','master_passoutyear')
//     ->setCellValue('AP1','bachelor_passoutyear')
//     ->SetCellValue('AQ1','plus2_passoutyear')
//     ->setCellValue('AR1','slc_passoutyear')
//     ->setCellValue('AS1','ielts_notlessthen')
//     ->SetCellValue('AT1','ielts_ukvi_notlessthen')
//     ->setCellValue('AU1','tofel_notlessthen')
//     ->SetCellValue('AV1','sat_notlessthen')
//     ->setCellValue('AW1','pte_notlessthen')
//     ->SetCellValue('AX1','gre_notlessthen');
// // Populate the worksheet with data
//         foreach ($data as $rowIndex => $rowData) {
//             $id=$rowIndex+2;
//             $letter = 'A';

//             foreach ($rowData as $columnIndex => $value) {
               
//                 $sheet->setCellValue($letter.$id,$value);
//                 $letterAscii = ord($letter);
//                 $letterAscii++;
//                 $letter = chr($letterAscii);
//                     // $sheet->setCellValue(($columnIndex) , ($rowIndex) , $value);
                   
//         }
//         }
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
