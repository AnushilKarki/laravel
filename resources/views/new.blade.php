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
min-width:400px;
padding: 20px;
max-width:100%;
overflow: auto;
}
tr:nth-child(even) {
  background-color: #dddddd;
}
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
    <h2 style="text-align: center;">Account Details</h2>
    <span> your account has been created automatically.please visit our app and change your password to proceed forward with your application</span> 
    <br>
    <span>email : anushil.karki34@gmail.com </span>
    <br>
    <span>password : password</span>  
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
          <th></th>
         <th></th>
         <th></th>
          <th></th>
        </tr>
      
        
      
        <tr>
       <td>1.</td>
       <td>Academic Qualification</td>
       <td></td>
        </tr>
        <tr>
      <td></td>
      <td>SLC</td>
      <td>{{ $students['slc'] ? :'not available' }}</td>
        </tr>
        <tr>
          <td></td>
          <td>+2</td>
          <td>{{ $students['plus2'] ? : 'not available' }}</td>
            </tr>
            <tr>
              <td></td>
              <td>Bachelor</td>
              <td>{{ $students['bachelor'] ? : 'not available'}}</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Master</td>
                  <td>{{ $students['master'] ? : 'not available'}}</td>
                    </tr>
          <tr>
              <td>2.</td>
              <td>Test Examination </td>
              <td></td>
          </tr>
          <tr>
              <td></td>
              <td>Ielts</td>
              <td>{{ $students['ielts'] ? : 'not available' }}</td>
                </tr>
                <tr>
                  <td></td>
                  <td>Ielts ukvi</td>
                  <td>{{ $students['ielts_ukvi'] ? : 'not available' }}</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td>Toefel</td>
                      <td>{{ $students['tofel'] ? : 'not available' }}</td>
                        </tr>
                        <tr>
                          <td></td>
                          <td>Pte</td>
                          <td>{{ $students['pte'] ? : 'not available'}}</td>
                            </tr>
                            <tr>
                              <td></td>
                              <td>Gre</td>
                              <td>{{ $students['gre'] ? : 'not available' }}</td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>Sat</td>
                                  <td>{{ $students['sat'] ? :'not available' }}</td>
                                    </tr>
      
      </table> 
</div>
</body>
</html>