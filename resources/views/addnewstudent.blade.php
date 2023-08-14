<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
            .formhead {
                display:flex;
                flex-direction: column;
                width:100%;
                height:100%;
                background-color:grey;
                border:1px solid black;
                justify-content:center;
            }
            .formfull {
                /* width:100px;
                height:400px; */
                display:flex;
                text-align: center;
                flex-direction:column;
                flex-wrap:wrap;
                justify-content: center;
               
            }
            select.callfield {
                height:60px;width:350px; background-color:snow;
                   color:black;
                   font-size:20px;
                   border: 1px solid black;
                   margin-top:5px;
                   margin-bottom:5px;
            }
            .field{
                height:60px;
                width:350px;
                background-color:snow;
                color:black;
                font-size:20px;
                border: 1px solid black;
                margin-top:5px;
                margin-bottom:5px;
            }
           
            h1{
                text-align:center;
                color:grey;
                text-decoration-line: underline;
                text-decoration-style: solid;
            }
            .table-form {
                display: flex;
                justify-content: center;
                max-width:100%;
overflow: auto;
margin-right: 30px;;
padding: 20px;

            }
            table {
                max-width:100%;
overflow: auto;
margin: 20px;
margin-right: 30px;
padding: 20px;

            }
            .wrapup {
                display: flex;
                width:100%;
                flex-wrap: wrap;
            }
            .first {
                max-width: 100%;
            }
            .second {
                max-width: 100%;
            }
        </style>
    </head>
    <body class="antialiased">
    <h1>Fill the request for add student information </h1>

    {{-- <div class="formhead">
    <form action="{{ route('addnewstudent') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="formfull">
<div class="">
    <label>enter name:</label>
    <input class="field" type="text" name="name">
</div>
<div class="">
<label>enter contact:</label>
	<input class="field" type="text" name="contact">
	</div>
<div class="">
<label>enter address:</label>
<input class="field" type="text" name="address">
</div>
<div class="">
    <label>enter email:</label>
    <input class="field" type="text" name="email">
</div>
<div class="">
    <label>enter highest acheived:</label>
    <input class="field" type="text" name="highest_acheived">
</div>
<div class="">
<label>enter cgpa:</label>
	<input class="field" type="text" name="cgpa">
	</div>
<div class="">
<label>enter test Preparation:</label>
<input class="field" type="text" name="test_preparation">
</div>
<div class="">
    <label>enter test score:</label>
    <input class="field" type="text" name="test_score">
</div>
<div class="">
<label>enter interest country:</label>
	<input class="field" type="text" name="interest_country">
	</div>
<div class="">
<label>enter Interest course:</label>
<input class="field" type="text" name="interest_course">
</div>
<div class="">
    <label>enter work experience:</label>
    <input class="field" type="text" name="work_experience">
</div>
<div class="">
<label>enter visa rejection:</label>
	<input class="field" type="text" name="visa_rejection">
	</div>
<div class="">
<label>enter address:</label>
<input class="field" type="text" name="address">
</div>
<div class="">
<label>submit your request:</label>
    <button class="field" type="submit">Submit</button>
</div>
</div>
</form>
        </div> --}}
        <div class="">
        <form action="{{ route('addnewstudent') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="wrapup">
                <div class="first">
        <table>
            <tr>
                <th>  </th>
                <th>  </th>
            </tr>
            <tr>
                <td>
                    <label>enter name:</label>
                </td>
                <td>
                    <input class="field" type="text" name="name"  placeholder="enter name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter email:</label>
                </td>
                <td>
                    <input class="field" type="text" name="email"  placeholder="enter email" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter address:</label>
                </td>
                <td>
                    <input class="field" type="text" name="address"  placeholder="enter address">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter contact:</label>
                </td>
                <td>
                    <input class="field" type="text" name="contact"  placeholder="enter contact">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter dob:</label>
                </td>
                <td>
                    <input class="field" type="date" name="dob" placeholder="enter date of birth">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter marital status:</label>
                </td>
                <td>
                    <input type="radio" id="html" name="marital_status" value="single">
                    <label for="html">Single</label><br>
                    <input type="radio" id="css" name="marital_status" value="married">
                    <label for="css">Married</label><br>
                    <input type="radio" id="javascript" name="marital_status" value="divorced">
                    <label for="javascript">Divorced</label>
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter highest acheived:</label>
                </td>
                <td>
                    <input class="field" type="text" name="highest_acheived"  placeholder="enter highest academic qualification">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter cgpa:</label>
                </td>
                <td>
                    <input class="field" type="text" name="cgpa"  placeholder="enter cgpa">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter test_preparation:</label>
                </td>
                <td>
                    <input class="field" type="text" name="test_preparation" placeholder="enter your test prepration">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter test_score:</label>
                </td>
                <td>
                    <input class="field" type="text" name="test_score"  placeholder="enter your test score">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter interest_country:</label>
                </td>
                <td>
                    <input class="field" type="text" name="interest_country" placeholder="enter your interest country">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter interest_course:</label>
                </td>
                <td>
                    <input class="field" type="text" name="interest_course" placeholder="enter your intrest course">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter work_experience:</label>
                </td>
                <td>
                    <input class="field" type="text" name="work_experience" placeholder="enter your work experience" >
                </td>
            </tr>
            <tr>
                <td>
                    <label>entervisa_rejection:</label>
                </td>
                <td>
                    <input class="field" type="text" name="visa_rejection" placeholder="enter your visa rejection details">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Counseled by:</label>
                </td>
                <td>
                    <input class="field" type="text" name="counseled_by" placeholder="enter name of counsellor">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Call status:</label>
                </td>
                <td>
                   <select name="callstatus" class="callfield" style="">
                    <option value="called">Called</option>
                    <option value="not_called" default>Not Called </option>
                   </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label>status:</label>
                </td>
                <td>
                    <input class="field" type="text" name="status" placeholder="enter status of applicant">
                </td>
            </tr>
            <tr>
                <td>
                    <label>remark:</label>
                </td>
                <td>
                    <input class="field" type="text" name="remark" placeholder="enter your remarks">
                </td>
            </tr>
            {{-- <tr>
                <td>
                    <label></label>
                </td>
                <td>
                    <input class="field" type="submit">
                </td>
            </tr> --}}
        </table>
    </div>
    <div class="second">
        <table>
            <tr>
                <th>  </th>
                <th>  </th>
            </tr>
           
            <tr>
                <td>
                    <label>Ielts Exam :</label>
                </td>
                <td>
                    {{-- <select name="examtest" id="examtest" class="callfield" style="">
                        <option value="called">IELTS</option>
                        <option value="not_called">IELTS UKVI </option>
                        <option value="called">PTE</option>
                        <option value="not_called">TOEFL </option>
                        <option value="called">SAT</option>
                        <option value="not_called">GRE </option>
                       </select><br> --}}
                    <input class="field" type="text" id="ieltsoverall" placeholder="enter ielts overall score" name="ieltsoverall"><br>
                    <input class="field" type="text" id="ieltsnotlessthen" placeholder="enter ieltsnot less then score" name="ieltsnotlessthenscore"><br>
                    {{-- <input class="field" type="text" id="ieltsukvioverall" placeholder="enter ieltsukvi  overall score" name="ieltsukvioverall"><br>
                    <input class="field" type="text" id="ieltsukvinotlessthen" placeholder="enter ieltsukvi not less then score" name="ieltsukvinotlessthenscore"><br> --}}
                    {{-- <input class="field" type="text" id="pteoverall" placeholder="enter pte overall score" name="pteoverall"><br>
                    <input class="field" type="text" id="ptenotlessthen" placeholder="enter pte not less then score" name="ptenotlessthenscore"><br> --}}
                    {{-- <input class="field" type="text" id="toefloverall" placeholder="enter toefl overall score" name="toeftoverall"><br>
                    <input class="field" type="text" id="toeflnotlessthen" placeholder="enter toefl  not less then score" name="toeflnotlessthenscore"><br> --}}
                    {{-- <input class="field" id="satoverall" type="text" placeholder="enter overall score" name="satoverall"><br>
                    <input class="field" id="satnotlessthen" type="text" placeholder="enter sat not less then score" name="satnotlessthenscore"><br> --}}
                    {{-- <input class="field" type="text" id="greoverall" placeholder="enter gre overall score" name="greoverall"><br>
                    <input class="field" type="text" id="grenotlessthen" placeholder="enter gre not less then score" name="grenotlessthenscore"> --}}
                </td>
            </tr>
            <tr>
                <td>
                    <label>Ielts ukvi Exam :</label>
                </td>
                <td>
                    <input class="field" type="text" id="ieltsukvioverall" placeholder="enter ieltsukvi  overall score" name="ieltsukvioverall"><br>
                    <input class="field" type="text" id="ieltsukvinotlessthen" placeholder="enter ieltsukvi not less then score" name="ieltsukvinotlessthenscore"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Pte Exam:</label>
                </td>
                <td>
                    <input class="field" type="text" id="pteoverall" placeholder="enter pte overall score" name="pteoverall"><br>
                    <input class="field" type="text" id="ptenotlessthen" placeholder="enter pte not less then score" name="ptenotlessthenscore"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Toefl Exam :</label>
                </td>
                <td>
                    <input class="field" type="text" id="toefloverall" placeholder="enter toefl overall score" name="toefloverall"><br>
                    <input class="field" type="text" id="toeflnotlessthen" placeholder="enter toefl  not less then score" name="toeflnotlessthenscore"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Sat Exam :</label>
                </td>
                <td>
                    <input class="field" id="satoverall" type="text" placeholder="enter overall score" name="satoverall"><br>
                    <input class="field" id="satnotlessthen" type="text" placeholder="enter sat not less then score" name="satnotlessthenscore"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label>Gre Exam :</label>
                </td>
                <td>
                    <input class="field" type="text" id="greoverall" placeholder="enter gre overall score" name="greoverall"><br>
                    <input class="field" type="text" id="grenotlessthen" placeholder="enter gre not less then score" name="grenotlessthenscore">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Major subject:</label>
                </td>
                <td>
                    <input class="field" type="text" name="major_subject">
                </td>
            </tr>
            <tr>
            {{-- <tr>
                <td>
                    <label>enter Academic qualification:</label>
                </td>
                <td>
                    <select name="academic" id="academic" class="callfield" style="" onchange="checkacademic(this)">
                        <option value="slc">SLC</option>
                        <option value="plus2">plus 2 </option>
                        <option value="bachelor">Bachelor</option>
                        <option value="master">Master </option>
                       </select><br>
                       <input class="field" id="slcgrade" type="text" placeholder="enter slc cgpa/grade" name="slcgrade"><br>
                       <input class="field" id="slcpassout" type="text" placeholder="enter slc passed out year" name="slcpassoutyear"><br>
                       <input class="field" id="plus2grade" type="text" placeholder="enter plus 2 cgpa/grade" name="plus2grade"><br>
                       <input class="field" id="plus2passout" type="text" placeholder="enter plus 2 passed out year" name="plus2passoutyear"><br>
                       <input class="field" id="bachelorgrade" type="text" placeholder="enter bachelor cgpa/grade" name="bachelorgrade"><br>
                       <input class="field" id="bachelorpassout" type="text" placeholder="enter bachelor pass out year" name="bachelorpassoutyear"><br>
                       <input class="field" id="mastergrade" type="text" placeholder="enter master cgpa/grade" name="mastergrade"><br>
                       <input class="field" id="masterpassout" type="text" placeholder="enter master pass out year" name="masterpassoutyear"><br>
                </td>
            </tr> --}}
                <td>
                    <label> SLC/SEE :</label>
                </td>
                <td>
                    <input class="field" id="slclevel" type="text" placeholder="enter slc/A+ level" name="slclevel"><br>
                    <input class="field" id="slcgrade" type="text" placeholder="enter slc cgpa/grade" name="slcgrade"><br>
                       <input class="field" id="slcpassout" type="text" placeholder="enter slc passed out year" name="slcpassoutyear"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label> +2/Pcl :</label>
                </td>
                <td>
                    <input class="field" id="slclevel" type="text" placeholder="enter +2 level" name="plus2level"><br>
                    <input class="field" id="plus2grade" type="text" placeholder="enter plus 2 cgpa/grade" name="plus2grade"><br>
                    <input class="field" id="plus2passout" type="text" placeholder="enter plus 2 passed out year" name="plus2passoutyear"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label> Bachelor degree:</label>
                </td>
                <td>
                    <input class="field" id="bachelorlevel" type="text" placeholder="enter bachelor level" name="bachelorlevel"><br>
                    <input class="field" id="bachelorgrade" type="text" placeholder="enter bachelor cgpa/grade" name="bachelorgrade"><br>
                       <input class="field" id="bachelorpassout" type="text" placeholder="enter bachelor pass out year" name="bachelorpassoutyear"><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label> Master degree:</label>
                </td>
                <td>
                    <input class="field" id="masterlevel" type="text" placeholder="enter master level" name="masterlevel"><br>
                    <input class="field" id="mastergrade" type="text" placeholder="enter master cgpa/grade" name="mastergrade"><br>
                    <input class="field" id="masterpassout" type="text" placeholder="enter master pass out year" name="masterpassoutyear"><br>
                </td>
            </tr>
            {{-- <tr>
                <td>
                    <label>enter interest_course:</label>
                </td>
                <td>
                    <input class="field" type="text" name="interest_course">
                </td>
            </tr>
            <tr>
                <td>
                    <label>enter work_experience:</label>
                </td>
                <td>
                    <input class="field" type="text" name="work_experience">
                </td>
            </tr> --}}
            {{-- <tr>
                <td>
                    <label>entervisa_rejection:</label>
                </td>
                <td>
                    <input class="field" type="text" name="visa_rejection">
                </td>
            </tr>
            <tr>
                <td>
                    <label>Call status:</label>
                </td>
                <td>
                   <select name="callstatus" class="callfield" style="">
                    <option value="called">Called</option>
                    <option value="not_called" default>Not Called </option>
                   </select>
                </td>
            </tr> --}}
            {{-- <tr>
                <td>
                    <label>status:</label>
                </td>
                <td>
                    <input class="field" type="text" name="status">
                </td>
            </tr>
            <tr>
                <td>
                    <label>remark:</label>
                </td>
                <td>
                    <input class="field" type="text" name="remark">
                </td>
            </tr>
            <tr> --}}
                <td>
                    <label></label>
                </td>
                <td>
                    <input class="field" type="submit">
                </td>
            </tr>
        </table>
    </div>
    </form>
</div>
<script type="text/javascript">

function checktest(){
    var examtest = document.getElementById('examtest').value;
}
function checkacademic(e){
    e.preventdefault();
 var academic = document.getElementById("academic").value;

    if(academic===slc){
        document.getElementById("demo").innerHTML = "You selected: ";
    }else if (academic===plus2) {
        document.getElementById("plus2grade").style.display="block";
        document.getElementById("plus2passoutyear").style.display="block";
    }else if(academic===bachelor){
        document.getElementById("bachelorgrade").style.display="block";
        document.getElementById("bachelorpassoutyear").style.display="block";
    }else {
        document.getElementById("mastergrade").style.display="block";
        document.getElementById("masterpassoutyear").style.display="block";
    }

}
    </script>
  <script type="text/javascript" src="./public/new.js"></script>
    </body>
</html>
