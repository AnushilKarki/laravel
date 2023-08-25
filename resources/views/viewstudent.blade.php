<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Result</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  display:flex;
margin: 20px;
margin-right: 30px;;
padding: 20px;
max-width:100%;
overflow: auto;
}

td, th {
  border: 1px solid #dddddd;
  text-align: justify;
  text-justify: inter-word;
  padding:5px;
  max-height:80px;
  font-size: 13px;
  min-width:30px;
 max-width:300px;
 word-break: keep-all;
}
.id {
  min-width: 20px;;
}

             /* th {
             
              word-break: break-word;
             }
             td {
             
          
              word-wrap:break-word;
              width: auto;
             } */
tr:nth-child(even) {
  background-color: #dddddd;
}
            body {
                font-family: 'Nunito', sans-serif;
            }
            .result {
                display:flex;
`               flex-direction:column;
flex-wrap:wrap;
                background-color:snow;
                justify-content:center;
                width:100%;
                height:500px;
            }
.all {
  display:flex;
}
            .heading {
                display:flex;
                flex:100%;
                width:100%;
                justify-content:center;
            }
            .value{
                display:flex;
                justify-content:center;
            }
            h2{
              text-align:center;
              text-decoration-style:solid;
              text-decoration-line:underline;
            }
            .field {
              height: 50px;
              width:300px;
              margin:10px;
              margin-bottom: 10px;
              padding: 10px;
              border: 1px solid black;
            }
            .part {
              text-align:center;
              margin: 10px;
             
            }
            button.add {
              width: 200px;
              height:50px;
              background-color: white;
             }
             button.add:hover {
              background-color: lightblue;
              color:black;
             }
             h3 {
              margin: 10px;
              padding: 5px;
              /* border: 1px solid black; */
             }
        </style>
    </head>
    <body>
    
        <div class="all">
        <div class="result">
            <div class="heading">
<h2>Result of your request </h2>

        </div>
        <div class="heading">
          <div class="part">
            <button class="add" type="button"><a>Total no of student: {{ $studentscount }}</a> </button>
          </div>
        </div>
        <div class="part">
          <button class="add" type="button"><a href="/export">Export All student data</a> </button>
        </div>
        @auth()
        <div class="part">
          <div class="logoutform">
          <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="but">
      
          <button class="logout" type="submit">Logout</button>
      </div>
              </form>
              </div>
        </div>
        @endauth
      
        {{-- <div class="part">
          <button class="add" type="button"><a href="/addnewstudent">Add new student</a> </button>
        </div> --}}
        <form enctype="multipart/form-data" method="post" action="{{  route('searchstudent') }}">
          @csrf
          <input class="field" name="search" type="text" placeholder="search name email or phone wise...">
          <input type="submit" placeholder="search">
              </form>
              <div class="part">
                <button class="add" type="button"><a href="/applicant">Add new student</a> </button>
              </div>
        <div>
          <h3 style="text-align:center;">Today's Remainder</h3>
          <table>
            <tr>
              <th>id</th>
              <th>Student name</th>
              <th>student id </th>
              <th>Student phone no</th>
              <th>Reaminder date</th>
              <th>Remainder detail</th>
              <th>Status </th>
            </tr>
            <?php 
            $i = 1;
          ?>
            @foreach ($remainders as $remainder)
           
          
            <tr>
              <td>
{{$i}}
              </td>
              <td>{{ $remainder->student->firstname.' '.$remainder->student->lastname.$remainder->student->name ?? 'n/a' }} </td>
              <td>{{ $remainder->student->studentid ?? 'n/a' }}</td>
              <td>{{ $remainder->student->contact ?? 'n/a' }}</td>
              <td>{{ $remainder->followup_date ?? 'n/a' }}</td>
              <td>{{$remainder->followup_detail ?? 'n/a'}} </td>
              <td>{{$remainder->status ==1 ? 'active' : 'not active'}} </td>
              <td>  <a href="{{ route('editviewremainder',$remainder->id) }}">  <img src="edit.png" style="width:15px;"/></a> </td>
            </tr>
            <?php 
            $i = $i +1;
          ?>
            @endforeach
          
          </table>
        </div>

<table>
  <tr>
    <th>id</th>
    <th>Student id</th>
    <th>name</th>
    <th>Email</th>
    <th>address</th>
    <th>contact number</th>
    <th>Interest Country</th>
    <th>Interest Course</th>
    <th>Work Experience</th>
    <th>visa rejection</th>
    <th>Call Status</th>
    <th>status</th>
    <th>remark</th>
    <th></th>
  </tr>
  <?php
   $id = 1;
  
  ?>
  @foreach($students as $d)

  <tr>
    <td class="id">{{$id}}</td>
    <td>{{$d['studentid']}}</td>
    <td>{{ $d['firstname'].$d['lastname'] ?? $d['name'] }}</td>
    <td>{{ $d['email'] }}</td>
 
    <td>{{ $d['address'] }}</td>
    <td>{{ $d['contact'] }}</td>
 
    <td>{{ $d['interest_country'] }}</td>
    <td>{{ $d['interest_course'] }}</td>
    <td>{{ $d['work_experience'] }}</td>
 
    <td>{{ $d['visa_rejection'] }}</td>
    <td>{{ $d['calldetail'] }}</td>
    <td>{{ $d['status'] }}</td>
 
    <td>{{ $d['remark'] }}</td>
  <td>
    <a href="{{ route('viewstudent',$d['id']) }}">  <img src="view-.png" style="width:15px;"/></a>
  <a href="{{ route('editstudent',$d['id']) }}">  <img src="edit.png" style="width:15px;"/></a>
  <a data-toggle="tooltip" class="show-confirm" onclick="return confirm('Are you sure you want to delete ?')" href="{{ route('deletestudent',$d['id']) }}">  <img src="delete.png" style="width:15px;"/></a>
  </td>
  </tr>
  <?php 
$id = $id +1;
  ?>
 @endforeach
</table>
{{-- <h1>hello {{ $students->previousPageUrl() }}</h1> --}}
<div style="display:flex;justify-content:space-around;">
  <div>
<h3> <a href="{{$students->previousPageUrl()}}">Previous</a></h3>
  </div>
  <div>
<h3> <a href="{{$students->nextPageUrl()}}">Next</a></h3>
  </div>
</div>
{{-- {{ $students->links() }} --}}
        </div>
        </div>
         
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">
 
     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Are you sure you want to delete this record?`,
              text: "If you delete this, it will be gone forever.",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });
  
</script>
    </body>
</html>
