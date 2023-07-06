<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Tablerate;
use App\Imports\TablerateImport;
use Maatwebsite\Excel\Facades\Excel;
use Maatwebsite\Excel\HeadingRowImport;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\IOFactory;

class TablerateController extends Controller
{
    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }
	
	
    public function premium(Request $request){
		// $dob = new \DateTime($request->dob);
        $d = Carbon::parse($request->dob);
		$new = Carbon::now();

		$diff = $new->diff($d);

// dd("your current age is ".$diff->y."year".$diff->m." months and ".$diff->d."days");
$age = $diff->y;
if($diff->m>=5){
$age = $diff->y + 1; 
	}
    // dd("your current age is ".$age."year".$diff->m." months and ".$diff->d."days");
	//calculate age integer
		$term = $request->term;		

		$tablerate = DB::table('tablerates')->where('age',$age)->where('term',$term)->value('table_rate');
 
		
		$sum = $request->sum;
		// find table rate from the table
		$premium = ($sum/1000)*$tablerate; 

        return view('result',compact('premium'));
	} 
   
    public function import(Request $request){
      

        $request->validate([
                'excel_file' => 'required|mimes:xls,xlsx',
            ]);
    
    
            // 
    
     $file = $request->file('excel_file');
    
            // Load the Excel file
            $spreadsheet = IOFactory::load($file->getPathname());
    
            // Get the active sheet
            $sheet = $spreadsheet->getActiveSheet();
    
            // Extract rows and columns
            $rows = [];
            $columns = [];
    
            foreach ($sheet->getRowIterator() as $row) {
                $rowData = [];
                $cellIterator = $row->getCellIterator();
                $cellIterator->setIterateOnlyExistingCells(false);
    
                foreach ($cellIterator as $cell) {
                    $rowData[] = $cell->getValue();
                }
    
                $rows[] = $rowData;
            }
    // dd(count($rows[0])-1);
    // we reduce count values by 1 inorder to work on forloop within forloop to enter each value into table
    $agecount=count($rows)-1;
    $termcount=count($rows[0])-1;
    // a1 and a2 is age coordinate
    $a1 = 1;
    $a2 = 0;
    //r1 and r2 are rate coordinate
    $r1=1;
    $r2=1;
    //t1 and t2 are term coordinate
    $t1=0;
    $t2=1;
dd(count($rows));
    for($i=0;$i<$agecount;$i++){
        for($j=0;$j<$termcount;$j++){
            $age = $rows[$a1][$a2];
            $rate = $rows[$r1][$r2];
            $term = $rows[$t1][$t2];
            $data = new Tablerate;
            $data->age = $age;
            $data->term = $term;
            $data->table_rate = $rate;
            $data->save();
if($r2<45){
    $r2+=1;
}
         if($t2<45){
            $t2+=1;
         }
          
        }
        $a1+=1;
        $r1+=1;
        $r2=1;
        $t2=1;
        // dd($r2);
    }
    
    //  $highestColumn = $sheet->getHighestColumn();
    //         $columnCount = \PhpOffice\PhpSpreadsheet\Cell\Coordinate::columnIndexFromString($highestColumn);
    
    //         for ($columnIndex = 1; $columnIndex <= $columnCount; $columnIndex++) {
    //             $columnData = [];
    
    //             foreach ($sheet->getColumnIteratorByColumn($columnIndex) as $cell) {
    //                 $columnData[] = $cell->getValue();
    //             }
    
    //             $columns[] = $columnData;
    //         }
    
            // Do something with the extracted data
    
            // ...
    
            return response()->json([
                'rows' => $rows,
                // 'columns' => $columns,
            ]);
      
      
      
      
        // $file = $request->file('excel_file');
       
//         // Read the Excel file
//         $data = Excel::toArray([], $file)[0];

//         // Extract row and column data
//         $rows = [];
//         $columns = [];

     
//         // Do something with the extracted data
// foreach($rows as $row){

// foreach($columns as $column){
//     $data[$row][$column]=
// }

// }
//         // ...

//         return response()->json([
//             'rows' => $rows,
//             'columns' => $columns,
//         ]);
        // $headings = (new HeadingRowImport)->toArray('users.xlsx');

        // Excel::import($file,function($rows){
    
        //     foreach($rows as $row) {
         

        // // row couynt is 46 for 
        //             for ($i = 1; $i < count($row); $i++) {
        //                 // Assuming each column represents a different attribute of the product
        //                 $rate = new Tablerate;
        //                 $rate->age = $row[$i];
        //                 $rate->term = $row[$i];
        //                 $rate->table_rate = $row[$i];
        //                 $rate->save();
        //                 // Update the product attribute with the corresponding column data
        //                 // $rate->$columnName = $row[$i];
        //             }
           
        //     }
        // });
//  $path = "public/users.xlsx";
 

        // $data= Excel::import(new TablerateImport, 'users.xlsx');
        // dd($data->toArray());
// $path ="users";
//         $data = Excel::import($path,function($rows){
//             dd($data);
//         });

// $data = Excel::load($path)->get();

//             foreach ($data as $key => $value) {

//                 $arr[] = ['title' => $value->title, 'body' => $value->body];
//             }

//             if(!empty($arr)){

//                 DB::table('tablerates')->insert($arr);

//                 dd('Insert Recorded successfully.');

//             }

        

    }
    }

