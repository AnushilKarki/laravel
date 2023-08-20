<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Applicant form</title>
    <style>
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
            border-radius: 12px;
            padding: 5px;
        }
        .headertext {
            /* border: 3px solid rosybrown; */
            text-align:center;
            border-radius: 12px;
            padding: 5px;
            display:flex;
            justify-content: center;
        }
        .header {
            border: 3px solid rosybrown;
            text-align:center;
            border-radius: 12px;
            padding: 5px;
            font-size:25px;
            border-color: #23A8E0 black #F89939 black; /* red top, green right, blue bottom and yellow left */
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
        @media only screen and (max-width : 1220px ){
        
            .slcfield {
                width:400px;
            }
            .slc{
                min-width:480px; 
                /* background-color: #23A8E0;  */
            }
            .plus2{
                min-width:480px; 
                /* background-color: #23A8E0;  */
            }
            .bachelor{
                min-width:480px; 
                /* background-color: #23A8E0;  */
            }  .master{
                min-width:480px; 
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
            width:500px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
        }
        .second {
            /* background-color: green; */
            width:500px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .slc {
            /* background-color: pink; */
            width:250px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 10px;
        }
        .plus2 {
            /* background-color: green; */
            width:250px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
        }
        .bachelor {
            /* background-color: pink; */
            width:250px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            padding: 10px;
        }
        .master {
            /* background-color: green; */
            width:250px;
            margin: 10px;
            display: flex;
            flex-wrap: wrap;
            flex-shrink: 1;
            padding: 10px;
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
  font-size: 17px;

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
  font-size: 17px;

  padding: 7px 0;
  background: transparent;

        }
        .addressfield {
            margin-top: 10px;
            margin-bottom: 10px;
            /* padding: 10px; */
            font-family: inherit;
width: 400px;
  border: none;
  border-bottom: 2px solid grey;
  outline: none;
  font-size: 17px;

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
        Add New Applicant
            </div>
        </div>

        <div class="personaldetail">
         <div class="sidedesign">
                <div class="sidetext"> 
                 <h1>  Personal details </h1>
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

        <div class="personaldetail">
             <div class="secondsidedesign">
                 <div class="sidetext"> 
                 <h1>  Academic details </h1>
                </div> 
            </div> 
            <div class="slc">
                <div class="slcinputfield" style="text-align: left;">
                    <label style="margin:5px;padding:10px;border: 1px solid;font-size:20px;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">SLC / SEE</label><br>
                   
                </div>
                <div class="slcinputfield" style="margin-top: 10px;">
                    <label>Board</label><br>
                    <input class="slcfield" style="" type="text" name="slcboard" placeholder="HMG / PCL">
                </div>
                <div class="slcinputfield">
                    <label>Stream</label><br>
                    {{-- <input type="text" class="field" name="name" placeholder="Management"> --}}
                    <select style="width:200px;" name="slcstream" class="field">
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                    </select>
                </div>
                <div class="slcinputfield">
                    <label>CGPA / GRADE</label><br>
                    <input style="width:200px;" class="field" type="text" name="slcgrade" placeholder="CGPA / GRADE">
                </div>
                <div class="slcinputfield">
                    <label>Pass out year</label><br>
                    <input style="width:200px;" type="month" class="field" name="slcpassoutyear" placeholder="Management">
                </div>
          
            
            </div>
            {{-- <div class="sidedesignsecond"> --}}
                {{-- <div class="sidetext"> --}}
                 {{-- <h1>  Personal details </h1> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            <div class="plus2">
                <div class="slcinputfield" style="text-align: left;">
                    <label style="margin:5px;padding:10px;border: 1px solid;font-size:20px;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">+2 / HCL</label><br>
                   
                </div>
                <div class="slcinputfield" style="margin-top: 10px;">
                    <label>Board</label><br>
                    <input style="width:200px;" class="field" type="text" name="plus2board" placeholder="HSEB / A LEVEL">
                </div>
                <div class="slcinputfield">
                    <label>Stream</label><br>
                    {{-- <input type="text" class="field" name="name" placeholder="Management"> --}}
                    <select style="width:200px;" name="plus2stream" class="field">
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                    </select>
                </div>
                <div class="slcinputfield">
                    <label>CGPA / GRADE</label><br>
                    <input style="width:200px;" class="field" type="text" name="plus2grade" placeholder="CGPA / GRADE">
                </div>
                <div class="slcinputfield">
                    <label>Pass out year</label><br>
                    <input style="width:200px;" type="month" class="field" name="plus2passoutyear" placeholder="Management">
                </div>
          
            </div>
            <div class="bachelor">
                <div class="slcinputfield" style="text-align: left;">
                    <label style="margin:5px;padding:10px;border: 1px solid;font-size:20px;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">Bachelor</label><br>
                   
                </div>
                <div class="slcinputfield" style="margin-top: 10px;">
                    <label>Board</label><br>
                    <input style="width:200px;" class="field" type="text" name="bachelorboard" placeholder="TU,PU,KU">
                </div>
                <div class="slcinputfield">
                    <label>Stream</label><br>
                    {{-- <input type="text" class="field" name="name" placeholder="Management"> --}}
                    <select style="width:200px;" name="bachelorstream" class="field">
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                    </select>
                </div>
                <div class="slcinputfield">
                    <label>CGPA / GRADE</label><br>
                    <input style="width:200px;" class="field" type="text" name="bachelorgrade" placeholder="CGPA / GRADE">
                </div>
                <div class="slcinputfield">
                    <label>Pass out year</label><br>
                    <input style="width:200px;" type="month" class="field" name="bachelorpassoutyear" placeholder="Management">
                </div>
          
            </div>
            <div class="master">
                <div class="slcinputfield" style="text-align: left;">
                    <label style="margin:5px;padding:10px;border: 1px solid;font-size:20px;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">Master</label><br>
                   
                </div>
                <div class="slcinputfield" style="margin-top: 10px;">
                    <label>Board</label><br>
                    <input style="width:200px;" class="field" type="text" name="masterboard" placeholder="TU,PU,KU">
                </div>
                <div class="slcinputfield">
                    <label>Stream</label><br>
                    {{-- <input type="text" class="field" name="masterstream" placeholder="Management"> --}}
                    <select style="width:200px;" name="slcstream" class="field">
                        <option value="science">Science</option>
                        <option value="management">Management</option>
                    </select>
                </div>
                <div class="slcinputfield">
                    <label>CGPA / GRADE</label><br>
                    <input style="width:200px;" class="field" type="text" name="mastergrade" placeholder="CGPA / GRADE">
                </div>
                <div class="slcinputfield">
                    <label>Pass out year</label><br>
                    <input style="width:200px;" type="month" class="field" name="masterpassoutyear" placeholder="Management">
                </div>
          
            </div>
        </div>
        {{-- course detailas  --}}
        
        <div class="personaldetail">
             <div class="sidedesign">
                 <div class="sidetext"> 
                 <h1>  Course details </h1>
                 </div> 
            </div> 
            <div class="first">
                <div class="inputfield">
                    <input class="addressfield" type="text" name="interest_country" placeholder="Intrested Country"><br>
                    <label>please enter your interested country</label>
                </div>
                <div class="inputfield">
                    <input type="text" class="addressfield" name="interest_course" placeholder="Interest Course"><br>
                    <label>please enter your interested course</label>
                </div>
                <div class="inputfield">
                     <input type="text" name="intake" class="addressfield" placeholder="ie. jan intake"><br> 
                    
                    {{-- <select style="width:200px;" name="intake" class="field">
                    <option value="">Prefered intake</option>
                        <option value="jan_intake">Jan intake</option>
                        <option value="september_intake">September Intake</option>
                    </select><br> --}}
                    <label>please enter your intake</label>
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
                    <label>please select interested city</label>
                </div>
                <div class="inputfield">
                    <input type="text" name="interestcityremark" class="addressfield" placeholder="Remark"><br>
                    <label>please consider any alternative possibilities that you may wish to investigate further</label>
                </div>
                <div class="inputfield">
                    <input type="text" name="gap" class="addressfield" placeholder="enter gapif any">
                    <br><label>Please mention Gap between education (if any) </label>
                </div>
              
            </div>
        </div>
        {{-- test information --}}

        <div class="personaldetail">
             <div class="sidedesign" style="height:470px;">
                 <div class="sidetext"> 
                 <h1>  Test Information </h1>
                 </div>
            </div> 
            <div class="first">
                <div class="inputfield">
                <select style="width:200px;" placeholder="plese select prefered english proficiency test" name="test_preparation" class="field">
                <option>select prefered english proficiency test</option>
                        <option value="ielts">ielts </option>
                        <option value="ielts_ukvi"> ielts_ukvi</option>
                        <option value="pte"> pte</option>
                        <option value="toefl"> toefl</option>
                        <option value="sat">sat </option>
                        <option value="gre">gre </option>
                    </select><br>
                    <!-- <input class="addressfield" type="text" name="test_preparation" placeholder="Select your english language profiencency test"><br> -->
                    <label>please select from above option</label>
                </div>
                <div class="inputfield">
                    <input type="text" class="addressfield" name="test_score" placeholder="select score"><br>
                    <label>please enter interested course</label>
                </div>
                <div class="inputfield">
                    <input type="text" name="test_issue_Date" class="addressfield" placeholder="select test given year"><br>
                    <label>please enter Test given year</label>
                </div>
            
            </div>
            {{-- <div class="sidedesignsecond"> --}}
                {{-- <div class="sidetext"> --}}
                 {{-- <h1>  Personal details </h1> --}}
                {{-- </div> --}}
            {{-- </div> --}}
             <div class="secondsidedesign">
                 <div class="sidetext"> 
                 <h2> Experience Information </h2>
                 </div> 
            </div>
            <div class="second">
                <div class="inputfield">
                    <input class="addressfield" type="text" name="work_experience" placeholder="work experience"><br>
                    <label>please enter your work experience if any</label>
                </div>
                <div class="inputfield">
                    <input type="text" class="addressfield" name="work_description" placeholder="job description"><br>
                    <label>please enter job description</label>
                </div>
                <div class="inputfield">
                    <input type="text" name="work_duration" class="addressfield" placeholder="Duration"><br>
                    <label>please enter your work duration</label>
                </div>
            </div>
        </div>
        {{-- visa hostory  --}}
        <div class="personaldetail">
             <div class="sidedesign" style="height:200px;">
                 <div class="sidetext"> 
                 <h1> Visa History </h1>
                 </div> 
            </div>
            <div class="first">
                <div class="inputfield">
                    <!-- <input class="addressfield" type="text" name="rejection" placeholder=" visa rejection"><br> -->
                    <select style="width:200px;" placeholder="plese enter visa rejection" name="visa_rejection" class="field">
                    <option value="">visa rejection </option>  
                    <option value="yes">yes </option>
                        <option value="no"> no</option>
                    </select><br>
                    <label>please select if your visa is rejected </label>
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
                    <label>please describe reason for visa rejection</label>
                </div>
            
            </div>
        </div>
        <div class="personaldetail" style="background-color : white;justify-content:center;">
        <div style="display: flex;flex-direction:column;align-items:center;justify-content:center;">
            <a id="start-camera" style="padding:5px;margin:60px;height:40px;width:100%;text-align:center;margin-top:15px;margin:5px;padding:5px;border: 1px solid;font-size:20px;background-color:#23A8E0;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">Start Camera</a>
            <a style="height:40px;width:100%;text-align:center;margin-top:15px;margin:5px;padding:5px;border: 1px solid;font-size:20px;background-color:#23A8E0;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;" type="botton" id="click-photo">Click Photo</a>
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
        <div class="personaldetail" style="background-color : white;">
        <div class="official"  style="height:70px;width:100%;text-align:center;margin-top:15px;margin:5px;padding:5px;border: 1px solid;font-size:20px;background-color:#23A8E0;border-color: #23A8E0 #23A8E0 #F89939 #F89939;border-radius:50px;">
            <h3>OFFICIAL USE ONLY</h3>
        </div>
    </div>
    <div class="personaldetail" style="background-color : white;justify-content:center;">
        <div class="first">
            <div class="inputfield">
                <input class="addressfield" type="text" name="assigned_counsellor" placeholder="Assigned Cousellor"><br>
                <label>please select Assigned Cousellor</label>
            </div>
     
        
        </div>
    
        <div class="second">
            <div class="inputfield">
                <input class="addressfield" type="text" name="counsellor" placeholder="Counsellor"><br>
                <label>please select Counsellor </label>
            </div>
        
        </div>
    </div>
  

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
    </script>
</body>
</html>