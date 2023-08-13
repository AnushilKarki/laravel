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
margin-top: 50px;
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
   
 <h2 style="text-align: center;">Student Details</h2>

 <div style="width:100%;height:150px;"> 
 <div class="column">
    <div>Name: {{ $students['name'] }}</div> <br>
    <div>email: {{$students['email']}}</div><br>
    <div>Interest Country: {{ $students['interest_country'] }}</div>  
   </div>
   <div class="column">
    <div>Address: {{ $students['address'] }}</div> <br>
    <div>Marital status: {{$students['marital_status']}}</div><br>
    <div>Interest Course: {{ $students['interest_course'] }}</div>
</div>
<div class="column">
    <div>Contact: {{ $students['contact'] }}</div> <br>
    <div>Dob: {{ $students['dob'] }}</div> <br>
    <div>Major Subject: {{$students['major_subject']}}</div>
    <div>Test Preparation: {{ $students['test_preparation'] }}</div>
</div>
</div>

<div class="fullcolumn">
    <h2 style="text-align: center;">Academic and Test Examination Details</h2>
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
     <td>Academic Qualification</td>
     <td>grade/score</td>
     <td>date of completion</td>
     <td></td>
      </tr>
     @if($students['slc'])
      <tr>
    <td></td>
    <td>{{ $students['slc'] }}</td>
    <td>{{ $students['slc_score'] }}</td>
    <td>{{ $students['slc_passoutyear'] }}</td>
      </tr>
      @endif
      @if($students['plus2'])
      <tr>

        <td></td>
        <td>{{ $students['plus2'] }}</td>
        <td>{{ $students['plus2_score'] }}</td>
        <td>{{ $students['plus2_passoutyear'] }}</td>
          </tr>
          @endif
          @if($students['bachelor'])
          <tr>
            <td></td>
            <td>{{ $students['bachelor'] }}</td>
            <td>{{ $students['bachelor_score'] }}</td>
            <td>{{ $students['bachelor_passoutyear'] }}</td>
              </tr>
              @endif
              @if($students['master'])
              <tr>
                <td></td>
                <td>{{ $students['master'] }}</td>
                <td>{{ $students['master_score'] }}</td>
                <td>{{ $students['master_passoutyear'] }}</td>
                  </tr>
                  @endif
        <tr>
            <td>2.</td>
            <td>Test Examination </td>
            <td>overall score</td>
            <td>not less then score</td>
            <td></td>
        </tr>
        @if($students['ielts'])
        <tr>
            <td></td>
            <td>Ielts</td>
            <td>overall :{{ $students['ielts'] }}  </td>
              <td> not less then score : {{ $students['ielts_notlessthen'] }}</td>
              </tr>
              @endif
              @if($students['ielts_ukvi'])
              <tr>
                <td></td>
                <td>Ielts ukvi</td>
                <td>overall :{{ $students['ielts_ukvi'] }} </td>
                  <td> not less then : {{ $students['ielts_ukvi_notlessthen'] }}</td>
                  </tr>
                  @endif
                  @if($students['tofel'])
                  <tr>
                    <td></td>
                    <td>Toefel</td>
                    <td>overall :{{ $students['tofel'] }} </td>
                      <td> not less then : {{ $students['tofel_notlessthen'] }}</td>
                      </tr>
                      @endif
                      @if($students['pte'])
                      <tr>
                        <td></td>
                        <td>Pte</td>
                        <td>overall :{{ $students['pte'] }} </td>
                        <td> not less then : {{ $students['pte_notlessthen'] }}</td>
                          </tr>
                          @endif
                          @if($students['gre'])
                          <tr>
                            <td></td>
                            <td>Gre</td>
                            <td>overall :{{ $students['gre'] }} </td>
                               <td> not less then : {{ $students['gre_notlessthen'] }}</td>
                              </tr>
                              @endif
                              @if($students['sat'])
                              <tr>
                                <td></td>
                                <td>Sat</td>
                                <td>overall :{{ $students['sat'] }} </td>
                                <td> not less then : {{ $students['sat_notlessthen'] }}</td>
                                  </tr>
                                  @endif
    
    </table> 
</div>
<div>
  <h2 style="text-align: center;text-decoration:underline;">Account Details</h2>
  <img src="../public/sajilovisaqr.png" width="90" style="margin:5px;" alt="qr">
  <span> your account has been created automatically.please scan qr to visit our app and change your password to proceed forward with your application</span> 
 <br> <span>email : anushil.karki34@gmail.com </span>
<br>
  <span>password : sajilo@123</span>  
<Br>
  <span>website : https://www.sajilovisa.com</span>
  <br><br>
  counselled by : ..........................
  
  Date          : ..........................
</div>
</body>
</html>