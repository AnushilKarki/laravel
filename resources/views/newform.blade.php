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
        .sidetext {
            position: absolute;
            padding: 20px;
         /* transform: rotate(-90deg); */
         /* top:0;
         left:0; */
         margin-left: -30px;
         /* margin-bottom: 4px; */
         /* word-wrap: keep-all; */
         letter-spacing: 2px;
         background-color: red;
         max-height: 124px;
        }
        h1 {
            /* background-color: orange; */
            /* writing-mode: vertical-lr;
  text-orientation: upright; */
            color:black;
            transform: rotate(-90deg);
             /* white-space: nowrap; */
             margin: 10px;
              font-size: 20px;
            
             word-spacing: 15px;
             letter-spacing: 2px;
             /* margin-right: 10px; */
            /* width: 100%; */
            /* height: 120px; */
            /* transform-origin: 0 0; */
            position: absolute;
            left:-45px;
            /* bottom:120px; */
            /* top: 80px; */
          /* text-align: center; */
          /* padding: 20px;
          margin: 40px; */
          /* width: 100%; */
          /* line-height: 24px; */
            /* width:300px; */
            /* transform: rotate(-90deg); */
            /* width: 100px; */
            /* position: relative;
            top:0;
            left:0; */
         /* top:0;
         left:0; */
         /* margin-left: -15px; */
         /* width: 140px; */
            /* position:relative;
            
         transform: rotate(-90deg);
         margin-bottom: -34px;
         word-wrap: keep-all;
         letter-spacing: 2px;
         line-height: 24px; */
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
    </div>
</body>
</html>