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
            border: 3px solid rosybrown;
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
            border: 3px solid rosybrown;
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
            border-color: blue black orange black; /* red top, green right, blue bottom and yellow left */
        }
        .personaldetail {
            border: 3px solid rosybrown;
            display: flex;
            flex-wrap: wrap;
        }
        .sidedesign {
            /* position: relative; */
            height:200px;
            background-color: blue;
          
        }
        .sidetext {
            position: absolute;
          
    bottom: 0;
    left: 0;
    margin-left: -30px;
    
    transform-origin: 0 0;
  transform: rotate(90deg);
        }
        .first {

        }
        .second {

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
                <div class="sidetext">
                 <h3>  Personal details </h3>
                </div>
            </div>
            <div class="first">

            </div>
            <div class="second">

            </div>
        </div>
    </div>
</body>
</html>