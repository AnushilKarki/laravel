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
                /* background-image: none;  */
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
  font-size: 1.3rem;

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
  font-size: 1.3rem;

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
                {{-- <div class="sidetext"> --}}
                 <h1>  Personal details </h1>
                {{-- </div> --}}
            </div>
            <div class="first">
                <div class="inputfield">
                    <input class="field" type="text" name="name" placeholder="Name">
                </div>
                <div class="inputfield">
                    <input type="text" class="field" name="name" placeholder="Middlename">
                </div>
                <div class="inputfield">
                    <input type="text" class="field" name="surname" placeholder="Surname">
                </div>
                <div class="inputfield">
                    <input type="text" name="name" class="addressfield" placeholder="Address">
                </div>
                <div class="inputfield">
                    <input type="text" name="name" class="addressfield" placeholder="Gurdain name">
                </div>
                {{-- <div class="inputfielddob"> 
                    <input type="day" name="name" class="field" placeholder="day">
             
                </div>  --}}
                <div class="inputfield">
                  <span style="margin-right:20px;">  Date Of Birth </span>  <input type="date" style="width:250px;" name="name" class="field" placeholder="month">
                </div>
            
            </div>
            {{-- <div class="sidedesignsecond"> --}}
                {{-- <div class="sidetext"> --}}
                 {{-- <h1>  Personal details </h1> --}}
                {{-- </div> --}}
            {{-- </div> --}}
            <div class="second">
                <div class="inputfield">
                    <input type="email" name="address" class="addressfield" placeholder="Amail address">
                </div>
                <div class="inputfield">
                    <input type="text" name="name" class="addressfield" placeholder="Phone no">
                </div>
                <div class="inputfield">
                    <input type="text" name="name" class="addressfield" placeholder="Gurdain/Local gurdain number">
                </div>
                <div class="inputfield">
                    <span>Maritial status </span>
                    {{-- <input type="text" name="name" class="addressfield" placeholder="maritalstatus"> --}}
                    <input type="checkbox" id="single" class="marital" name="maritalstatus" value="single">
                    <label for="single"> Single </label>
                    <input type="checkbox" id="married" name="maritalstatus" value="married" class="marital">
                    <label for="married"> Married </label>
                    <input type="checkbox" id="divorced" name="maritalstatus" value="divorced" class="marital">
                    <label for="divorced"> Divorced </label>

                </div>
            </div>
        </div>
        {{-- Academic details --}}

        <div class="personaldetail">
            <div class="sidedesign">
                {{-- <div class="sidetext"> --}}
                 <h1>  Academic Qualification </h1>
                {{-- </div> --}}
            </div>
            <div class="slc">
              <div class="academic-header">
                <span class="slcheader">SLC</span>
              </div>
              <div class="label">
                <lavel>Board</label>
              </div>
              <div class="field">
               
              </div>
            
            </div>
            <div class="plus2">

            </div>
            <div class="bachelor">

            </div>
            <div class="master">

            </div>
        </div>
    </div>
</body>
</html>