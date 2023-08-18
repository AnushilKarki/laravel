<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Applicant</title>
    <style>
        .main {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            border: 3px solid rosybrown;
            padding: 5px;
            margin: 5px;
            background-color: gainsboro;
        }
        .headertext {
            text-decoration: underline;
            text-decoration-color: black;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 20px;
            text-align: center;
        }
        .formpart {
            border: 1px dotted black;
           margin:10px;
            /* height: 200px; */
            display: flex;
            flex-wrap: wrap;
        }
        .inputfield {
            margin:5px;
            padding: 5px;
        }
        .inputacademicfield {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            margin:5px;
        }
        .field {
            padding: 5px;
            
        }
        .personal-detail {
            /* border: 1px solid black; */
            width:96%;
            /* height:400px; */
            margin: 10px;
            padding: 10px;
            display: flex;
            flex-direction: column;
            flex-wrap:wrap;
        }
        .academic-qualification {
            /* border: 1px solid black; */
            width:96%;
            /* height:400px; */
            margin: 10px;
            padding: 10px;
        }
        .course-detail {
            /* border: 1px solid black; */
            width:96%;
            /* height:400px; */
            margin: 10px;
            padding: 10px;
        }
        .test-detail {
            /* border: 1px solid black; */
            width:96%;
            /* height:400px; */
            margin: 10px;
            padding: 10px;
        }
        .extra-detail {
            width:96%;
            /* height:400px; */
            margin: 10px;
            padding: 10px; 
        }
        .submitbtn {
            text-align: center;
            margin: 5px;
            padding: 10px;
            /* background-color: blue; */
            color:red;
        }
        #slc{
            visibility: visible;
            /* display: block; */
        }
        #plus2{
            visibility: visible;
            /* display: none; */
        }
        #bachelor{
            visibility: visible;
            /* display: none; */
        }
        #master{
            visibility: visible;
            /* display: none; */
        }
        #ielts{
            visibility: visible;
            /* display: block; */
        }
        #ieltsukvi{
            visibility: visible;
            /* display: none; */
        }
        #pte{
            visibility: visible;
            /* display: none; */
        }
        #toefel{
            visibility: visible;
            /* display: none; */
        }
     
        #sat{
            visibility: visible;
            /* display: none; */
        }
        #gre{
            visibility: visible;
            /* display: none; */
        }
        .academicbtn {
            /* background-color: blue; */
            color:black;
        }
        
    </style>
</head>
<body>
    <div class="main">
        <form action="{{ route('addnewstudent') }}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="headertext">
            Add New Applicant
        </div>
        <div class="personal-detail">
            <div class="headertext">
                Personal Details
            </div>
            <div class="formpart">
                <div class="inputfield">
                    <label>Name : </label>
                    <input class="field" type="text" name="name"  placeholder="enter name">
                </div>
                <div class="inputfield">
                    <label>Email : </label>
                    <input class="field" type="text" name="email"  placeholder="enter email">
                </div>
                <div class="inputfield">
                    <label>Address : </label>
                    <input class="field" type="text" name="address"  placeholder="enter address">
                </div>
                <div class="inputfield">
                    <label>Phone : </label>
                    <input class="field" type="text" name="contact"  placeholder="enter contact">
                </div>
                <div class="inputfield">
                    <label>DOB : </label>
                    <input class="field" type="date" name="dob"  placeholder="enter dob">
                </div>
                <div class="inputfield">
                    <label>Marital status : </label>
                    {{-- <input class="field" type="text" name="marital_Status"> --}}
                    <input type="radio" id="html" name="marital_status" value="single">
                    <label for="html">Single</label>
                    <input type="radio" id="css" name="marital_status" value="married">
                    <label for="css">Married</label>
                    <input type="radio" id="javascript" name="marital_status" value="divorced">
                    <label for="javascript">Divorced</label>
                </div>
                <div class="inputfield">
                    <label>Gurdain name : </label>
                    <input class="field" type="text" name="gurdain_name"  placeholder="enter gurdain name">
                </div>
                <div class="inputfield">
                    <label>Gurdain no : </label>
                    <input class="field" type="text" name="gurdain_no"  placeholder="enter gurdain contact">
                </div>
            </div>
        </div>
        <div class="academic-qualification">
            <div class="headertext">
               Academic Qualification
            </div>
            <div class="formpart">
                <div class="inputacademicfield">
                    <div class="headertext">
                       <button type="button" class="academicbtn" onclick="myFunction()"> SLC/SEE</button>
                     </div>
                     <div id="slc">
                     <div class="inputfield">
                        <label>Level : </label>
                        <input class="field" type="text" name="slclevel"  placeholder=" eg : slc ">
                       </div>
                   <div class="inputfield">
                    <label>CGPA/GRADE : </label>
                    <input class="field" type="text" name="slcgrade"  placeholder="eg : A+">
                   </div>
                   <div class="inputfield">
                    <label>PassOutYear : </label>
                    <input class="field" type="date" name="slcpassoutyear"  placeholder="eg : 2017">
                   </div>
                </div>
                </div>
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button type="button" class="academicbtn" onclick="myFunction1()"> Plus2 / pcl</button>
                     </div>
                     <div id="plus2">
                     <div class="inputfield">
                        <label>level : </label>
                        <input class="field" type="text" name="plus2level"  placeholder="eg : +2">
                       </div>
                   <div class="inputfield">
                    <label>CGPA/GRADE : </label>
                    <input class="field" type="text" name="plus2grade"  placeholder="eg : 3.4 / 59%">
                   </div>
                   <div class="inputfield">
                    <label>PassOutYear : </label>
                    <input class="field" type="date" name="plus2passoutyear" placeholder="eg : 2015">
                   </div>
                </div>
                </div>
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button type="button" class="academicbtn" onclick="myFunction2()"> Bachelor</button>
                     </div>
                     <div id="bachelor">
                     <div class="inputfield">
                        <label>Level : </label>
                        <input class="field" type="text" name="bachelorlevel" placeholder="eg : bachelor in software engineering">
                       </div>
                   <div class="inputfield">
                    <label>CGPA/GRADE : </label>
                    <input class="field" type="text" name="bachelorgrade" placeholder="eg : 3.4gpa">
                   </div>
                   <div class="inputfield">
                    <label>PassOutYear : </label>
                    <input class="field" type="date" name="bachelorpassoutyear"  placeholder="eg : 2021">
                   </div>
                </div>
                </div>
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button type="button" class="academicbtn" onclick="myFunction3()"> Master</button>
                     </div>
                     <div id="master">
                     <div class="inputfield">
                        <label>Level : </label>
                        <input class="field" type="text" name="masterlevel" placeholder="eg: master in economics">
                       </div>
                   <div class="inputfield">
                    <label>CGPA/GRADE : </label>
                    <input class="field" type="text" name="mastergrade" placeholder="eg: 3.4cgpa">
                   </div>
                   <div class="inputfield">
                    <label>PassOutYear : </label>
                    <input class="field" type="date" name="masterpassoutyear" placeholder="eg: 2021">
                   </div>
                </div>
                </div>
            </div>
        </div>
        <div class="course-detail">
            <div class="headertext">
               Course Detail
            </div>
            <div class="formpart">
                <div class="inputfield">
                    <label>Interest Country : </label>
                    <input class="field" type="text" name="interest_country" placeholder="enter your interest country">
                </div>
                <div class="inputfield">
                    <label>Interest City : </label>
                    <input class="field" type="text" name="interest_city" placeholder="enter yoir interest city">
                </div>
                <div class="inputfield">
                    <label>Interest Course : </label>
                    <input class="field" type="text" name="interest_course" placeholder="enter your interest course">
                </div>
            </div>
        </div>
        <div class="test-detail">
            <div class="headertext">
               Test Detail
            </div>
            <div class="formpart">
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button type="button" class="academicbtn" onclick="myFunction4()"> Ielts Score</button>    
                     </div>
                     <div id="ielts">
                   <div class="inputfield">
                    <label>Overall score : </label>
                    <input class="field" type="text" name="ieltsoverall" placeholder="enter ielts overall score">
                   </div>
                   <div class="inputfield">
                    <label>Not less then score : </label>
                    <input class="field" type="text" name="ieltsnotlessthenscore" placeholder="enter ieltsnotlessthen score">
                   </div>
                   <div class="inputfield">
                    <label>issue date : </label>
                    <input class="field" type="date" name="ielts_issue_date" placeholder="enter ieltsissuedate">
                   </div>
                </div>
                </div>
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button type="button" class="academicbtn" onclick="myFunction5()"> Ielts ukvi score</button> 
                     </div>
                     <div id="ieltsukvi">
                   <div class="inputfield">
                    <label>Overall score : </label>
                    <input class="field" type="text" name="ieltsukvioverall" placeholder="enter ieltsukvi overall score">
                   </div>
                   <div class="inputfield">
                    <label>Not less then score : </label>
                    <input class="field" type="text" name="ieltsukvinotlessthenscore" placeholder="enter ieltsukvinotlessthen score">
                   </div>
                   <div class="inputfield">
                    <label>issue date : </label>
                    <input class="field" type="date" name="ielts_ukvi_issue_date"  placeholder="enter ielts ukvi issue date">
                   </div>
                </div>
                </div>
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button type="button" class="academicbtn" onclick="myFunction6()"> Pte score</button>
                     </div>
                     <div id="pte">
                   <div class="inputfield">
                    <label>Overall score : </label>
                    <input class="field" type="text" name="pteoverall" placeholder="enter pte overall score">
                   </div>
                   <div class="inputfield">
                    <label>Not less then score : </label>
                    <input class="field" type="text" name="ptenotlessthenscore" placeholder="enter ptenot less then score">
                   </div>
                   <div class="inputfield">
                    <label>issue date : </label>
                    <input class="field" type="date" name="pte_issue_date" placeholder="enter pte issuedate">
                   </div>
                     </div>
                </div>
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button  type="button" class="academicbtn" onclick="myFunction7()"> Toefel</button>
                     </div>
                     <div id="toefel">
                   <div class="inputfield">
                    <label>Overall score : </label>
                    <input class="field" type="text" name="toefloverall"  placeholder="enter toefl overall">
                   </div>
                   <div class="inputfield">
                    <label>Not less then score : </label>
                    <input class="field" type="text" name="toeflnotlessthenscore" placeholder="enter toeflnotlessthenscore">
                   </div>
                   <div class="inputfield">
                    <label>issue date : </label>
                    <input class="field" type="date" name="toefl_issue_date"  placeholder="enter toefel issue date">
                   </div>
                     </div>
                </div>
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button type="button" class="academicbtn" onclick="myFunction8()"> Sat</button>
                     </div>
                     <div id="sat">
                   <div class="inputfield">
                    <label>Overall score : </label>
                    <input class="field" type="text" name="satoverall" placeholder="enter satoverall score">
                   </div>
                   <div class="inputfield">
                    <label>Not less then score : </label>
                    <input class="field" type="text" name="satnotlessthenscore" placeholder="enter satnotlessthen score">
                   </div>
                   <div class="inputfield">
                    <label>issue date : </label>
                    <input class="field" type="date" name="sat_issue_date" placeholder="enter sat issue date">
                   </div>
                </div>
                </div>
                <div class="inputacademicfield">
                    <div class="headertext">
                        <button type="button" class="academicbtn" onclick="myFunction9()"> Gre</button>
                     </div>
                     <div id="gre">
                   <div class="inputfield">
                    <label>Overall score : </label>
                    <input class="field" type="text" name="greoverall" placeholder="enter greoverall score">
                   </div>
                   <div class="inputfield">
                    <label>Not less then score : </label>
                    <input class="field" type="text" name="grenotlessthenscore" placeholder="enter grenotlessthen score">
                   </div>
                   <div class="inputfield">
                    <label>issue date : </label>
                    <input class="field" type="date" name="gre_issue_date" placeholder="enter grenotlessthen score">
                   </div>
                </div>
                </div>
            </div>
        </div>
        <div class="extra-detail">
            <div class="formpart">
                <div class="inputfield">
                    <label>Your Recent Test Preparation : </label>
                    <input class="field" type="text" name="test_preparation"placeholder="eg : ielts">
                </div>
                <div class="inputfield">
                    <label>Work Experience : </label>
                    <input class="field" type="text" name="work_experience" placeholder="enter your work experience">
                </div>
                <div class="inputfield">
                    <label>Visa Rejection : </label>
                    <input class="field" type="text" name="visa_rejection" placeholder="eg: not rejected till now">
                </div>
                <div class="inputfield">
                    <label>Call Status : </label>
                    <input class="field" type="text" name="calldetail" placeholder="enter about call status">
                    {{-- <select name="callstatus" class="field" style="">
                        <option value="called">called</option>
                        <option value="not_called">not called</option>
                       </select> --}}
                </div>
                <div class="inputfield">
                    <label>Status : </label>
                    {{-- <input class="field" type="text" name="address"> --}}
                    <select name="status" class="field" style="">
                        <option value="not processing" default>Not proessing till now </option>
                        <option value="processing">processing</option>
                        <option value="completed">completed</option>
                       </select>
                </div>
                <div class="inputfield">
                    <label>Counselled by : </label>
                    <input class="field" type="text" name="counseled_by" placeholder="eg : ragab sir">
                </div>
                <div class="inputfield">
                    <label>Rmarks : </label>
                    <input class="field" type="text" name="remark" placeholder="enter remark">
                </div>
            </div>
        </div>
        <div class="submitbtn">
<input class="field" type="submit">
        </div>
        </form>
    </div>
    <script>
function myFunction() {
  var element = document.getElementById("slc");
//   if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
}
function myFunction1() {
  var element = document.getElementById("plus2");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
function myFunction2() {
  var element = document.getElementById("bachelor");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
function myFunction3() {
  var element = document.getElementById("master");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
function myFunction4() {
  var element = document.getElementById("ielts");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
function myFunction5() {
  var element = document.getElementById("ieltsukvi");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
function myFunction6() {
  var element = document.getElementById("pte");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
function myFunction7() {
  var element = document.getElementById("toefel");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
function myFunction8() {
  var element = document.getElementById("sat");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
function myFunction9() {
    // e.preventDefault();
  var element = document.getElementById("gre");
  if(element.style.visibility === "hidden"){
    element.style.visibility = "visible";
  }else {
    element.style.visibility = "hidden";
  }
// if(element.style.display === "none"){
//     element.style.display = "block";
//   }else {
//     element.style.display = "none";
//   }
}
        </script>
</body>
</html>