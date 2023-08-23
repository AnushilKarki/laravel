<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applicant form</title>
    <style>
        .bottomtext {
            color: #23A8E0;
            font-size: 14px;
        }
          .main {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            /* border: 3px solid rosybrown; */
            padding: 5px;
            margin: 5px;
            background-color: white;
        }
        .logoimage {
            /* border: 3px solid rosybrown; */
            text-align: center;
            display: flex;
            justify-content: center;
        }
        .logo {
            /* border: 3px solid rosybrown; */
            text-align:center;
            /* border-radius: 12px; */
            padding: 5px;
        }
        .headertext {
            /* border: 3px solid rosybrown; */
            text-align:center;
            border-radius: 12px;
            /* background: linear-gradient( #23A8E0, #F89939); */
            padding: 5px;
            /* width:210px; */
            display:flex;
            justify-content: center;
        }
        .text {
    background-color: white;
    color:black;
    border-radius: 50px;
  padding: 10px;

  font-size:20px;
}
        .header {
            text-align:center;
            color: black;
          background-image:linear-gradient( #23A8E0, #F89939); 
            border-image-slice: 1;
            border-radius: 50px;
            padding: 3px;
      
        }
        .personaldetail {
            /* border: 3px solid rosybrown; */
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
            /* justify-content: center; */
            background-color: #E9E8E8;
            /* align-items: stretch; */
        }
        /* @media only screen and (max-width : 1250px ){
            .first {
                width:400px;

            }
            .second {
                width:400px;
            }
        } */
        @media only screen and (min-width : 1250px ){
            .first {
            /* background-color: pink; */
            min-width:500px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .second {
            /* background-color: green; */
            min-width:500px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .slc {
            /* background-color: pink; */
            min-width:220px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }
        .plus2 {
            /* background-color: green; */
            min-width:220px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .bachelor {
            /* background-color: pink; */
            min-width:220px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
        }
        .master {
            /* background-color: green; */
            min-width:220px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        }
        @media only screen and (min-width: 850px) {
            .first {
            /* background-color: pink; */
            width:300px;
            margin-right:5px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .second {
            /* background-color: green; */
            width:300px;
            margin-right:5px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .slc {
            /* background-color: pink; */
            width:130px;
            margin: 5px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 5px;
        }
        .plus2 {
            /* background-color: green; */
            width:120px;
            margin: 5px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 5px;
        }
        .bachelor {
            /* background-color: pink; */
            width:120px;
            margin: 5px;
            display: flex;
            flex-wrap: wrap;
            padding: 5px;
        }
        .master {
            /* background-color: green; */
            width:120px;
            margin: 5px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 5px;
        }
        }
        @media only screen and (max-width : 850px ){
            .visaflex {
                display: flex;
                flex-direction: column;
                flex-wrap: wrap;
                height:350px;
            }
            #academicdesign {
                margin-left: 20px;
            }
            .slcfield {
                width:400px;
            }
            .slc{
                width:450px; 
                /* background-color: #23A8E0;  */
            }
            .plus2{
                width:450px; 
                /* background-color: #23A8E0;  */
            }
            .bachelor{
                width:450px; 
                /* background-color: #23A8E0;  */
            }  .master{
                width:450px; 
                /* background-color: #23A8E0;  */
            }
            .slcinputfield {
                width:100%;
            }
            .sidedesign {
               
                transform: rotate(90deg);
      
                position: static;
                margin: 1px;
                padding: 1px;
                max-height:300px;
                /* height:300px; */
                margin-right:40px;
                /* width:360px; */
                margin:-100px;
                background-color: white; 
                /* justify-content:center; */
                
            }
            .secondsidedesign{
               
               transform: rotate(90deg);
     
               position: static;
               margin: 1px;
               padding: 1px;
               max-height:300px;
               /* height:300px; */
               margin-right:40px;
               /* width:360px; */
               margin:-100px;
               background-image: none; 
               /* justify-content:center; */
               
           }
            .main {
                justify-content: center;
                align-items: center;
            }
            .personaldetail {
                display : flex;
                flex-direction: column;
                flex-wrap: wrap;
                justify-content: center;
                align-items: center;
                width:100%;
                margin-top:30px;
                
            }
            h1 {
                position: absolute;
                transform: rotate(90deg);
                width: 200px;
                height:70px;
                margin-bottom: 30px;
                /* right:260px; */
            }
        }
        .sidedesignsecond {
            width:41px;
            height:336px;
background-image: linear-gradient(#23A8E0,white); 
            padding: 10px;
            margin-right:30px;
           flex-wrap: wrap;
           display: flex;
           align-items: center;   
        }
        .sidedesign {
            width:41px;
            height:336px;
background-image: linear-gradient(#23A8E0,white); 
            padding: 10px;
            margin-right:30px;
           flex-wrap: wrap;
           display: flex;
           align-items: center;   
        }
        .secondsidedesign {
            width:41px;
            height:470px;
            background-image: linear-gradient(#F89939,white); 
            padding: 10px;
            margin-right:30px;
           flex-wrap: wrap;
           display: flex;
           align-items: center;   
        }
        h1 {
      
            color:black;
            transform: rotate(-90deg);
             /* white-space: nowrap; */
             margin: 10px;
              font-size: 20px;
            
             word-spacing: 15px;
             letter-spacing: 2px;
 
            position: absolute;
            left:-45px;
      
        }
        h2 {
      
      color:black;
      transform: rotate(-90deg);
       /* white-space: nowrap; */
       /* margin: 10px; */
        font-size: 20px;
      width: 50px;
       word-spacing: 15px;
       letter-spacing: 2px;

      position: absolute;
      /* left:-25px; */

  }
        .first {
            /* background-color: pink; */
            max-width:450px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .second {
            /* background-color: green; */
            max-width:450px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .slc {
            /* background-color: pink; */
            max-width:220px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }
        .plus2 {
            /* background-color: green; */
            max-width:220px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
            visibility: hidden;
        }
        .bachelor {
            /* background-color: pink; */
            max-width:220px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
            visibility: hidden;
        }
        .master {
            /* background-color: green; */
            max-width:220px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
            visibility: hidden;
        }
        .inputfielddob {
            width:105px;
            margin-top: 10px;
            margin-bottom: 10px;
        }
        .field {
            margin-top: 10px;
            margin-bottom: 10px;
            /* padding: 10px; */
            font-family: inherit;
width: 145px;
  border: none;
  border-bottom: 2px solid grey;
  outline: none;
  font-size: 11px;

  padding: 7px 0;
  background: transparent;

        }
        .slcfield {
            margin-top: 10px;
            margin-bottom: 10px;
            /* padding: 10px; */
            font-family: inherit;
width: 145px;
  border: none;
  border-bottom: 2px solid grey;
  outline: none;
  font-size: 11px;

  padding: 7px 0;
  background: transparent;

        }
        .addressfield {
            margin-top: 10px;
            margin-bottom: 10px;
            /* padding: 10px; */
            font-family: inherit;
width: 300px;
  border: none;
  border-bottom: 2px solid grey;
  outline: none;
  font-size: 11px;

  padding: 7px 0;
  background: transparent;

        }
        .marital {
            margin-right:15px;
            margin-left:15px;
        }
        .academic-details {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            margin-top: 20px;
            background-color: #E9E8E8;
        }
        .slc {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            
        }
        .slcinputfield {
            padding:5px;
            margin:5px;
        }
        .slcheader {
            border: 1px solid black;
        }
        .plus2 {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .bachelor {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .master {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        input[type='text'] { font-size: 14px; }
        ::-webkit-input-placeholder {

  font-size: 11px;
}
::-moz-placeholder {

  font-size: 11px;
}
:-ms-input-placeholder {

  font-size: 11px;
}
::placeholder {
  /* color: peachpuff; */
  font-size: 11px;
}

    </style>
</head>
<body>
    <form action="{{route('addnewstudent')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <div class="main">

        <div class="logoimage">
            <div class="logo">
                <img src="logo.png" style="width:150px;" alt="logo"/>
                
            </div>
        </div>

        <div class="headertext">
            <div class="header">
        <div class="text">
            Add New Applicant
        </div>
            </div>
        </div>

        <div class="personaldetail">
         <div class="sidedesign">
                <div class="" style="writing-mode: vertical-rl; transform: rotate(-180deg);font-size:25px;" > 
                 <span>  Personal details </span>
                 </div> 
            </div> 
            <div class="first">
                <div class="inputfield">
                    <input class="field" type="text" name="firstname" placeholder="Firstname">
                </div>
                <div class="inputfield">
                    <input type="text" class="field" name="middlename" placeholder="Middlename">
                </div>
                <div class="inputfield">
                    <input type="text" class="field" name="lastname" placeholder="Surname">
                </div>
                <div class="inputfield">
                    <input type="text" name="address" class="addressfield" placeholder="Address">
                </div>
                <div class="inputfield">
                    <input type="text" name="gurdain_name" class="addressfield" placeholder="Gurdain name">
                </div>
                {{-- <div class="inputfielddob"> 
                    <input type="day" name="name" class="field" placeholder="day">
             
                </div>  --}}
                <div class="inputfield">
                  <span style="margin-right:20px;">  Date Of Birth </span>  <input type="date" style="width:250px;" name="dob" class="field" placeholder="month">
                </div>
            
            </div>
            {{-- <div class="sidedesignsecond"> --}}
                {{-- <div class="sidetext"> --}}
                 {{-- <h1>  Personal details </h1> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            <div class="second">
                <div class="inputfield">
                    <input type="email" name="email" class="addressfield" placeholder="Email address">
                </div>
                <div class="inputfield">
                    <input type="text" name="contact" class="addressfield" placeholder="Phone no">
                </div>
                <div class="inputfield">
                    <input type="text" name="gurdain_no" class="addressfield" placeholder="Gurdain/Local gurdain number">
                </div>
                <div class="inputfield">
                    <span>Maritial status </span>
                    {{-- <input type="text" name="name" class="addressfield" placeholder="maritalstatus"> --}}
                    <input type="checkbox" id="single" class="marital" name="marital_status" value="single">
                    <label for="single"> Single </label>
                    <input type="checkbox" id="married" name="marital_status" value="married" class="marital">
                    <label for="married"> Married </label>
                    <input type="checkbox" id="divorced" name="marital_status" value="divorced" class="marital">
                    <label for="divorced"> Divorced </label>

                </div>
            </div>
        </div>
        {{-- Academic details --}}

        <div class="personaldetail" style="background-color: #F7F7F7;">
             <div class="secondsidedesign" id="academicdesign">
                <div class="" style="writing-mode: vertical-rl; transform: rotate(-180deg);font-size:25px;" > 
                    <span>  Academic details </span>
                    </div> 
            </div> 
            <div class="slc" id="slc" style="">
                {{-- <div class="slcinputfield" style="text-align: left;">
                    <label style="margin:5px;padding:10px;border: 1px solid;font-size:20px;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">SLC / SEE</label><br>
                   
                </div> --}}
                <div class="headertext">
                    <div class="header">
                <div class="text">
                 SLC / SEE
                </div>
                    </div>
                </div>
                <div class="slcinputfield" style="margin-top: 10px;">
                    <label>Board</label><br>
                    <input class="slcfield" style="width:120px;background:white;border-radius:50px;padding:10px;" type="text" id="slcboard" name="slcboard" placeholder="HMG / PCL">
                </div>
                <div class="slcinputfield">
                    <label>Stream</label><br>
                    {{-- <input type="text" class="field" name="name" placeholder="Management"> --}}
                    <select style="width:120px;background:white;border-radius:50px;padding:10px;" name="slcstream" id="slcstream" class="field">
                        <option value="others">Others</option>
                        {{-- <option value="management">Management</option> --}}
                    </select>
                </div>
                <div class="slcinputfield">
                    <label>CGPA / GRADE</label><br>
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" class="field" type="number" id="slcgrade" step="any" name="slcgrade" placeholder="CGPA / GRADE">
                </div>
                <div class="slcinputfield">
                    <label>Pass out year</label><br>
                    {{-- <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="month" class="field" name="slcpassoutyear" placeholder="Management"> --}}
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="number" class="field" name="slcpassoutyear" id="slcpassoutyear" placeholder="YYYY" min="1990" max="2023" onchange="myplus2()">
                </div>
          
            
            </div>
         
            <div class="plus2" id="plus2">
                {{-- <div class="slcinputfield" style="text-align: left;">
                    <label style="margin:5px;padding:10px;border: 1px solid;font-size:20px;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">+2 / HCL</label><br>
                   
                </div> --}}
                <div class="headertext">
                    <div class="header">
                <div class="text">
                 +2 / HCL
                </div>
                    </div>
                </div>
                <div class="slcinputfield" style="margin-top: 10px;">
                    <label>Board</label><br>
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" class="field" type="text" id="plus2board" name="plus2board" placeholder="HSEB / A LEVEL">
                </div>
                <div class="slcinputfield">
                    <label>Stream</label><br>
                    {{-- <input type="text" class="field" name="name" placeholder="Management"> --}}
                    <select style="width:120px;background:white;border-radius:50px;padding:10px;" id="plus2stream" name="plus2stream" class="field">
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                        <option value="diploma">Diploma</option>
                        <option value="nurse">Nurse</option>
                    </select>
                </div>
                <div class="slcinputfield">
                    <label>CGPA / GRADE</label><br>
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" class="field" type="number" id="plus2grade" step="any" name="plus2grade" placeholder="CGPA / GRADE">
                </div>
                <div class="slcinputfield">
                    <label>Pass out year</label><br>
                    {{-- <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="month" class="field" name="plus2passoutyear" placeholder="Management"> --}}
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="number" class="field"name="plus2passoutyear" id="plus2passoutyear" placeholder="YYYY" min="1990" max="2023" onchange="mybachelor()">
                </div>
          
            </div>
            <div class="bachelor" id="bachelor">
                {{-- <div class="slcinputfield" style="text-align: left;">
                    <label style="margin:5px;padding:10px;border: 1px solid;font-size:20px;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">Bachelor</label><br>
                   
                </div> --}}
                <div class="headertext">
                    <div class="header">
                <div class="text">
                Bachelor
                </div>
                    </div>
                </div>
                <div class="slcinputfield" style="margin-top: 10px;">
                    <label>Board</label><br>
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" class="field" type="text" id="bachelorboard" name="bachelorboard" placeholder="TU,PU,KU">
                </div>
                <div class="slcinputfield">
                    <label>Stream</label><br>
                    {{-- <input type="text" class="field" name="name" placeholder="Management"> --}}
                    <select style="width:120px;background:white;border-radius:50px;padding:10px;" name="bachelorstream" id="bachelorstream" class="field">
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                        <option value="arts">Arts</option>
                        <option value="it">Information Technology</option>
                        <option value="socialscience">Social Science</option>
                    </select>
                </div>
                <div class="slcinputfield">
                    <label>CGPA / GRADE</label><br>
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" class="field" type="number" step="any" id="bachelorgrade" name="bachelorgrade" placeholder="CGPA / GRADE">
                </div>
                <div class="slcinputfield">
                    <label>Pass out year</label><br>
                    {{-- <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="month" class="field" name="bachelorpassoutyear" placeholder="Management"> --}}
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="number" class="field" name="bachelorpassoutyear" id="bachelorpassoutyear" placeholder="YYYY" min="1990" max="2023" onchange="mymaster()">
                </div>
          
            </div>
            <div class="master" id="master">
                {{-- <div class="slcinputfield" style="text-align: left;">
                    <label style="margin:5px;padding:10px;border: 1px solid;font-size:20px; background-image:linear-gradient( #23A8E0, #F89939); padding:3px;border-radius:50px;">Master</label><br>
                   
                </div> --}}
                <div class="headertext">
                    <div class="header">
                <div class="text">
                Master
                </div>
                    </div>
                </div>
                <div class="slcinputfield" style="margin-top: 10px;">
                    <label style="font-size:15px;">Board</label><br>
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" class="field" type="text" id="masterboard" name="masterboard" placeholder="TU,PU,KU">
                </div>
                <div class="slcinputfield">
                    <label>Stream</label><br>
                    {{-- <input type="text" class="field" name="masterstream" placeholder="Management"> --}}
                    <select style="width:120px;background:white;border-radius:50px;padding:10px;" name="masterstream" id="masterstream" class="field">
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                        <option value="arts">Arts</option>
                        <option value="it">Information Technology</option>
                        <option value="socialscience">Social Science</option>
                    </select>
                </div>
                <div class="slcinputfield">
                    <label>CGPA / GRADE</label><br>
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" class="field" type="number" step="any" id="mastergrade" name="mastergrade" placeholder="CGPA / GRADE">
                </div>
                <div class="slcinputfield">
                    <label>Pass out year</label><br>
                    {{-- <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="month" class="field" name="masterpassoutyear" placeholder="Management"> --}}
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="number" name="masterpassoutyear" id="masterpassoutyear" class="field" placeholder="YYYY" min="1990" max="2023">
                </div>
          
            </div>
        </div>
        {{-- course detailas  --}}
        
        <div class="personaldetail" style="background-color: #F7F7F7;">
             <div class="sidedesign">
                <div class="" style="writing-mode: vertical-rl; transform: rotate(-180deg);font-size:25px;" > 
                    <span>  Course details </span>
                    </div> 
            </div> 
            <div class="first">
                <div class="inputfield">
                    {{-- <input class="addressfield" type="text" name="interest_country" placeholder="Intrested Country"><br> --}}
                    <select style="" placeholder="please select intrested country" name="interest_country" class="addressfield">
                        <option>Interested Country </option>  
                        <option value="USA">USA </option>
                            <option value="UK"> UK</option>
                            <option value="CANADA">CANADA </option>
                            <option value="AUSTRALIA">AUSTRALIA </option>
                            <option value="JAPAN"> JAPAN </option>
                            <option value="INDIA">INDIA </option>
                            <option value="GERMANY"> GERMANY</option>
                            <option value="OTHERS">OTHERS </option>
                        </select><br>
                    <label class="bottomtext">select from the above optionsy</label>
                </div>
                <div class="inputfield">
                    <input type="text" class="addressfield" name="interest_course" placeholder="Interest Course"><br>
                    <label class="bottomtext">please enter your interested course</label>
                </div>
                <div class="inputfield">
                     {{-- <input type="text" name="intake" class="addressfield" placeholder="ie. jan intake"><br>  --}}
                     <select style="" placeholder="plese select intake" name="intake" class="addressfield">
                        <option>Prefered intake </option>  
                        <option value="jan">Jan </option>
                            <option value="feb"> Feb</option>
                            <option value="mar">Mar </option>
                            <option value="apr"> Apr </option>
                            <option value="May">May </option>
                            <option value="jun"> Jun</option>
                            <option value="jul">Jul </option>
                            <option value="aug"> Aug </option>
                            <option value="sep">Sep </option>
                            <option value="oct"> Oct</option>
                            <option value="nov">Nov </option>
                            <option value="dec"> Dec </option>
                        </select><br>
                    {{-- <select style="width:200px;" name="intake" class="field">
                    <option value="">Prefered intake</option>
                        <option value="jan_intake">Jan intake</option>
                        <option value="september_intake">September Intake</option>
                    </select><br> --}}
                    <label class="bottomtext">select from the option above</label>
                </div>
          
                {{-- <div class="inputfielddob"> 
                    <input type="day" name="name" class="field" placeholder="day">
             
                </div>  --}}
             
            
            </div>
            {{-- <div class="sidedesignsecond"> --}}
                {{-- <div class="sidetext"> --}}
                 {{-- <h1>  Personal details </h1> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            <div class="second">
                <div class="inputfield">
                    <input type="text" name="interest_city" class="addressfield" placeholder="Interest City"><br>
                    <label class="bottomtext">please enter interested city</label>
                </div>
                <div class="inputfield">
                    <input type="text" name="interestcityremark" class="addressfield" placeholder="Remark"><br>
                    <label class="bottomtext">please consider any alternative possibilities that you may wish to investigate further</label>
                </div>
                <div class="inputfield">
                    <input type="text" name="gap" class="addressfield" placeholder="enter gapif any">
                    <br><label class="bottomtext">Please mention Gap between education (if any) </label>
                </div>
              
            </div>
        </div>
        {{-- test information --}}

        <div class="personaldetail" style="background-color: white;">
             <div class="sidedesign" style="height:450px;">
                <div class="" style="writing-mode: vertical-rl; transform: rotate(-180deg);font-size:25px;" > 
                    <span>  Test Information </span>
                    </div> 
            </div> 
            <div class="first" style="background-color: #F7F7F7;opacity:0.8;">
                <div class="inputfield">
                <select style="" placeholder="plese select prefered english proficiency test" name="test_preparation" class="addressfield">
                <option>select prefered english proficiency test</option>
                        <option value="ielts">ielts </option>
                        <option value="ielts_ukvi"> ielts_ukvi</option>
                        <option value="pte"> pte</option>
                        <option value="toefl"> toefl</option>
                        <option value="sat">sat </option>
                        <option value="gre">gre </option>
                    </select><br>
                    <!-- <input class="addressfield" type="text" name="test_preparation" placeholder="Select your english language profiencency test"><br> -->
                    <label class="bottomtext"> select from the option above</label>
                </div>
                <div class="inputfield">
                    <input type="number" step="any" class="addressfield" name="test_score" placeholder="select score"><br>
                    <label class="bottomtext">enter your test score</label>
                </div>
                <div class="inputfield">
                    <input style="width:120px;background:white;border-radius:50px;padding:10px;" type="number" name="test_issue_date" id="test_issue_date" class="field" placeholder="YYYY" min="1990" max="2023"><br>
                    <label class="bottomtext"> enter Test given year</label>
                </div>
            
            </div>
            {{-- <div class="sidedesignsecond"> --}}
                {{-- <div class="sidetext"> --}}
                 {{-- <h1>  Personal details </h1> --}}
                {{-- </div> --}}
            {{-- </div> --}}
             <div class="secondsidedesign" style="margin-left:5px;">
                <div class="" style="writing-mode: vertical-rl; transform: rotate(-180deg);font-size:25px;" > 
                    <span>  Experience Information </span>
                    </div> 
            </div>
            <div class="second" style="background-color: #F7F7F7;opacity:0.8;">
                <div class="inputfield">
                    {{-- <input class="addressfield" type="text" name="work_experience" placeholder="work experience"><br> --}}
                    <select style="" placeholder="" name="work_experience" class="addressfield">
                        <option value="">Work Experience </option>  
                        <option value="yes">yes </option>
                            <option value="no"> no</option>
                        </select><br>
                    <label class="bottomtext"> select from the above options</label>
                </div>
                <div class="inputfield">
                    <input type="text" class="addressfield" name="work_description" placeholder="job description"><br>
                    <label class="bottomtext">please enter job description</label>
                </div>
                <div class="inputfield">
                    <input type="text" name="work_duration" class="addressfield" placeholder="Duration"><br>
                    <label class="bottomtext">please enter your work duration</label>
                </div>
            </div>
        </div>
        {{-- visa hostory  --}}
        <div class="personaldetail" style="border:1px solid transparency;background:linear-gradient( #23A8E0, #F89939);border-radius:50px;align-items:center;padding:3px;">
            <div class="visaflex" style="display:flex;flex-wrap:wrap;background:white;border-radius:50px;width:100%;align-items:center;">
             <div class="sidedesign" style="border:none;background:none;height:100%;">
                <div class="" style="writing-mode: vertical-rl; transform: rotate(-180deg);font-size:25px;text-align:left;" > 
                    <span style="text-align: left;margin:10px;">  Visa History </span>
                    </div> 
            </div>
            <div class="first">
                <div class="inputfield">
                    <!-- <input class="addressfield" type="text" name="rejection" placeholder=" visa rejection"><br> -->
                    <select style="" placeholder="plese enter visa rejection" name="visa_rejection" class="addressfield">
                    <option value="">visa rejection </option>  
                    <option value="yes">yes </option>
                        <option value="no"> no</option>
                    </select><br>
                    <label class="bottomtext">please select if your visa is rejected </label>
                </div>
         
            
            </div>
            {{-- <div class="sidedesignsecond"> --}}
                {{-- <div class="sidetext"> --}}
                 {{-- <h1>  Personal details </h1> --}}
                {{-- </div> --}}
            {{-- </div> --}}
      
            <div class="second">
                <div class="inputfield">
                    <input class="addressfield" type="text" name="visa_rejection_detail" placeholder="reason for visa rejection"><br>
                    <label class="bottomtext">please describe reason for visa rejection</label>
                </div>
            
            </div>
        </div>
        </div>
        <div class="personaldetail" style="background-color : white;justify-content:center;align-items:center;">
        <div style="display: flex;flex-direction:column;align-items:center;justify-content:center;">
            <a id="start-camera" style="padding:5px;width:100%;text-align:center;margin-top:15px;font-size:20px;;"><img src="unnamed.png" width="150"></a>
            <a style="margin-bottom:30px;width:100%;text-align:center;margin-top:25px;margin:5px;padding:5px;font-size:20px;" type="botton" id="click-photo"><img src="camera.png" width="100"></a>
    </div>
            <div class="first">
                <div class="inputfield">
                    {{-- <input class="addressfield" type="text" name="intrest_country" placeholder="Assigned Cousellor"><br> --}}
                    <video id="video" width="320" height="240" autoplay></video>
                    {{-- <label>please select interested country</label> --}}
                </div>
         
            
            </div>
        
            <div class="second">
                <div class="inputfield">
                    <canvas id="canvas" width="320" height="240"></canvas>
                    
                    {{-- <label>please select interested country</label> --}}
                </div>
            
            </div>
        </div>
        {{-- <div class="personaldetail" style="background-color : white;">
            <div class="official"  style="height:70px;width:100%;text-align:center;margin-top:15px;margin:5px;padding:5px;border: 1px solid;font-size:20px;background-color:#23A8E0;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">
                <h3>OFFICIAL USE ONLY</h3>
            </div>
        </div>
        <div class="personaldetail" style="background-color : white;justify-content:center;">
            <div class="first">
                <div class="inputfield">
                    <input class="addressfield" type="text" name="assigned_counsellor" placeholder="Assigned Cousellor"><br>
                    <label class="bottomtext">please select Assigned Cousellor</label>
                </div>
         
            
            </div>
        
            <div class="second">
                <div class="inputfield">
                    <input class="addressfield" type="text" name="counsellor" placeholder="Counsellor"><br>
                    <label class="bottomtext">please select Counsellor </label>
                </div>
            
            </div>
        </div> --}}
    {{-- <div class="personaldetail" style="background-color : white;"> --}}
        <div class="official" style="margin-top: 40px;text-align:center;">
            <input type="text" name="remark" placeholder="remark" style="height:100px;width:90%;text-align:center;margin-top:15px;margin:5px;padding:5px;border: 3px solid;font-size:20px;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;"/>
            {{-- <h3>Remark</h3> --}}
        </div>
    {{-- </div> --}}
    <div>
        <input type="text" hidden id="image" name="image" >
        {{-- <input type="file" hidden id="image1" name="image1"> --}}
    </div>
    </div>
    <div style="text-align: center;">
    <input class="" style="height:70px;width:30%;text-align:center;margin-top:15px;margin:5px;padding:5px;border: 1px solid;font-size:20px;background-color:#23A8E0;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;" type="submit"/>
    </div>
    </form>
    {{-- <button type="botton" id="start-camera">Start Camera</button>
    <button type="botton" id="click-photo">Click Photo</button>
    <button type="botton" id="" onclick="vidOff()">stop camera</button> --}}
    {{-- <h1>Open WebCam Using JavaScript</h1>
    <br/>
    <button id="startBtn" onclick="openCam()">Open Webcam</button>
    <br/><br/>
    <video id="videoCam"></video>
    <script>
       function openCam(){
          let All_mediaDevices=navigator.mediaDevices
          if (!All_mediaDevices || !All_mediaDevices.getUserMedia) {
             console.log("getUserMedia() not supported.");
             return;
          }
          All_mediaDevices.getUserMedia({
             audio: true,
             video: true
          })
          .then(function(vidStream) {
             var video = document.getElementById('videoCam');
             if ("srcObject" in video) {
                video.srcObject = vidStream;
             } else {
                video.src = window.URL.createObjectURL(vidStream);
             }
             video.onloadedmetadata = function(e) {
                video.play();
             };
          })
          .catch(function(e) {
             console.log(e.name + ": " + e.message);
          });
       }
    </script> --}}
    {{-- <button id="start-camera">Start Camera</button> --}}
{{-- <video id="video" width="320" height="240" autoplay></video> --}}
{{-- <button id="click-photo">Click Photo</button> --}}
{{-- <canvas id="canvas" width="320" height="240"></canvas> --}}
<script>
let camera_button = document.querySelector("#start-camera");
let video = document.querySelector("#video");
let click_button = document.querySelector("#click-photo");
let canvas = document.querySelector("#canvas");

camera_button.addEventListener('click', async function() {
   	let stream = await navigator.mediaDevices.getUserMedia({ video: true, audio: false });
	video.srcObject = stream;
});

click_button.addEventListener('click', function() {
   	canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);
   	let image_data_url = canvas.toDataURL('image/jpeg');
    var image = document.getElementById('image');

    let image_base64 = document.querySelector("#canvas").toDataURL().replace(/^data:image\/png;base64,/, "");
    image.value = image_base64
//     let file = null;
// let blob = document.querySelector("#canvas").toBlob(function(blob) {
// 				file = new File([blob], 'test.png', { type: 'image/png' });
// 			}, 'image/png');
//             var image1 = document.getElementById('image1');
//             image1.value = blob;
   	// data url of the image
   	console.log(image.value);
});
function vidOff() {
  //clearInterval(theDrawLoop);
  //ExtensionData.vidStatus = 'off';
//   vid.pause();
//     vid.src = "";
//     localstream.stop();
const tracks = mediaStream.getTracks();

// Tracks are returned as an array, so if you know you only have one, you can stop it with: 
tracks[0].stop();
}
// document.querySelector("#slcpassoutyear").addEventListener("change", myplus2);
function myplus2(){
 var slcboard = document.getElementById('slcboard').value;
 var slcstream = document.getElementById('slcstream').value;
 var slcgrade = document.getElementById('slcgrade').value;
 var slcpassoutyear = document.getElementById('slcpassoutyear').value;

 if(slcboard!=null && slcstream!=null && slcgrade!=null && slcpassoutyear!=null){
    document.getElementById('plus2').style.visibility ='visible';
 }
}
function mybachelor(){
    var plus2board = document.getElementById('plus2board').value;
 var plus2stream = document.getElementById('plus2stream').value;
 var plus2grade = document.getElementById('plus2grade').value;
 var plus2passoutyear = document.getElementById('plus2passoutyear').value;

//  var plus2 = document.getElementById('plus2');
 if(plus2board!=null && plus2stream!=null && plus2grade!=null && plus2passoutyear!=null){
    document.getElementById('bachelor').style.visibility ='visible';
 }
}
function mymaster(){
    var bachelorboard = document.getElementById('bachelorboard').value;
 var bachelorstream = document.getElementById('bachelorstream').value;
 var bachelorgrade = document.getElementById('bachelorgrade').value;
 var bachelorpassoutyear = document.getElementById('bachelorpassoutyear').value;
//  var plus2 = document.getElementById('plus2');
 if(bachelorboard!=null && bachelorstream!=null && bachelorgrade!=null && bachelorpassoutyear!=null){
    document.getElementById('master').style.visibility ='visible';
 }
}
    </script>
</body>
</html>