<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
body {
    color:black;
}
.column {
  float: left;
  width: 33.33%;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
margin-top: 10px;
margin-left:100px;
min-width:400px;
padding: 20px;
max-width:100%;
overflow: auto;
}
/* tr:nth-child(even) {
  background-color: #dddddd;
} */
td, th {
  border: 1px solid #dddddd;
  text-align: justify;
  text-justify: inter-word;
  padding:5px;
  max-height:80px;
  font-size: 13px;
  /* min-width:30px; */
 /* max-width:300px; */
 word-break: keep-all;
}
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
        </style>
</head>
<body>
<div class="logo" style="text-align:center;">
                <img src="logo.png" style="width:150px;" alt="logo"/>
                
            </div>
 <h2 style="text-align: center;">SajiloVisa Applicant Details</h2>
<table style="width:100%;margin:5px;">
<tr>
<th> {{ $students['studentid'] }}</th>
<th> {{$students['status']}}</th>
</tr>
  <tr>
    <td>Name: {{ $students['firstname'].' '.$students['lastname'] }} </td>
    <td>email: {{$students['email']}}</td>
    <td>address: {{$students['address']}}</td>
    <td>Dob: {{ $students['dob'] }}</td>
    <td>Contact: {{ $students['contact'] }}</td>
    <td>Marital status: {{$students['marital_status']}}</td>
    </tr>
    <tr>
      <td>Intake : {{$students['intake'] }}</td>
      <td>Gurdain name : {{$students['gurdain_name']}} </td>
      <td>Gurdain conatct : {{$students['gurdain_no']}} </td>
      <td>Interest Country: {{ $students['interest_country'] }}</td>
      <td>Interest City: {{ $students['interest_city'] }}</td>
      <td>city remark : {{ $students['interestcityremark'] }}</td>

    </tr>
    <tr>
      <td>Gap : {{ $students['gap'] }}</td>
      <td>Work Experience: {{ $students['work_experience'] }}</td>
      <td>Work Description: {{ $students['work_description'] }}</td>
      <td>Work duration: {{ $students['work_duration'] }}</td>
      <td>Interest Course: {{ $students['interest_course'] }}</td>
 
    
      <td>Visa Rejection: {{ $students['visa_rejection'] }}</td>
    
    </tr>
    <tr>
      <td>Visa Rejection Detail : {{ $students['visa_rejection_detail'] }}</td>
<td>Test Preparation: {{ $students['test_preparation'] }}</td>
<td>Test score: {{ $students['test_score'] }}</td>
<td>Test issue date: {{ $students['test_issue_date'] }}</td>
<!-- <td>Highest acheived: {{ $students['highest_acheived'] }}</td> -->
<td>Counseled By: {{ $students['counseled_by'] }}</td>
<td>Remark: {{ $students['remark'] }}</td>
    </tr>
</table>
 {{-- <div style="width:100%;height:150px;"> 

 <div class="column">
    <div>Name: {{ $students['name'] }}</div> <br>
    <div>email: {{$students['email']}}</div><br>
    <div>Interest Country: {{ $students['interest_country'] }}</div>  
    <div>Work Experience: {{ $students['work_experience'] }}</div>  
   </div>
   <div class="column">
    <div>Address: {{ $students['address'] }}</div> <br>
    <div>Marital status: {{$students['marital_status']}}</div><br>
    <div>Interest Course: {{ $students['interest_course'] }}</div>
    <div>Visa Rejection: {{ $students['visa_rejection'] }}</div>  
</div>
<div class="column">
    <div>Contact: {{ $students['contact'] }}</div> <br>
    <div>Dob: {{ $students['dob'] }}</div> <br>
    <div>Major Subject: {{$students['major_subject']}}</div>
    <div>Test Preparation: {{ $students['test_preparation'] }}</div>
</div>
</div> --}}

<div class="fullcolumn">
    {{-- <h2 style="text-align: center;">Academic and Test Examination Details</h2> --}}
    <table>
      <tr>
        {{-- <th>id</th> --}}
       {{-- <th>Qualificaion</th> --}}
       {{-- <th>grade/score</th>
       <th>date of completion</th> --}}
        <th></th>
      </tr>
    
      
    
      <tr>
     <td>1.</td>
     <td>Board</td>
     <td>Stream </td>
     <td>grade/score</td>
     <td>date of completion</td>
     <td></td>
      </tr>
     @if($students['slcboard'])
      <tr>
    <td></td>
    <td>{{ $students['slcboard'] }}</td>
    <td>{{ $students['slcstream'] }}</td>
    <td>{{ $students['slc_score'] }}</td>
    <td>{{ $students['slc_passoutyear'] }}</td>
      </tr>
      @endif
      @if($students['plus2board'])
      <tr>

        <td></td>
        <td>{{ $students['plus2board'] }}</td>
        <td>{{ $students['plus2stream'] }}</td>
        <td>{{ $students['plus2_score'] }}</td>
        <td>{{ $students['plus2_passoutyear'] }}</td>
          </tr>
          @endif
          @if($students['bachelorboard'])
          <tr>
            <td></td>
            <td>{{ $students['bachelorboard'] }}</td>
            <td>{{ $students['bachelorstream'] }}</td>
            <td>{{ $students['bachelor_score'] }}</td>
            <td>{{ $students['bachelor_passoutyear'] }}</td>
              </tr>
              @endif
              @if($students['masterboard'])
              <tr>
                <td></td>
                <td>{{ $students['masterboard'] }}</td>
                <td>{{ $students['masterstream'] }}</td>
                <td>{{ $students['master_score'] }}</td>
                <td>{{ $students['master_passoutyear'] }}</td>
                  </tr>
                  @endif
        <tr>
            <td>2.</td>
            <td>Test Examination </td>
            <td>overall score</td>
            {{-- <td>not less then score</td> --}}
            <td>issue date</td>
            <td></td>
        </tr>
      <tr>
      @if($students['test_preparation'])
      <tr>
    <td></td>
    <td>{{ $students['test_preparation'] }}</td>
    <td>{{ $students['test_score'] }}</td>
    <td>{{ $students['test_issue_date'] }}</td>
      </tr>
      @endif
       </tr>
    
    </table> 
</div>
<div>
  {{-- <h2 style="text-align: center;text-decoration:underline;">Account Details</h2> --}}
  <img src="../public/sajilovisaqr.png" width="90" style="margin:5px;" alt="qr">
  <span> your account has been created automatically.please scan qr to visit our app and change your password to proceed forward with your application</span> 
 <br> <span>username : {{$students['studentid']}} </span>
<br>
  <span>password : sajilo@123</span>  
<Br>
  <span>website : https://www.sajilovisa.com</span>
  <br><br>
  <div style="float: left;">
  counselled by : ..........................
  </div>
  <div style="float:right;">
  Date          : ..........................
  </div>
</div>
</body>
</html>