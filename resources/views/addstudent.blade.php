<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Add student</title>

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
                width:500px;;
                height:400px;
                background-color:#F2A60C;
                border:1px solid black;
                justify-content:center;
                margin:10px;
                float:left;
            }
            .formdescription {
                background-color:snow;
                color:black;
                width:500px;;
                height:400px;
                float:right;
                
            }
            .formfull {
                width:100px;
                height:400px;
                display:flex;
                flex-direction:column;
                flex-wrap:wrap;
                justify-content: center;
               
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
            .field:hover {
                color:#F2A60C;
            }
            h1{
                text-align:center;
                color:#08851b;
                text-decoration-line: underline;
                text-decoration-style: solid;
            }
            h2{
                text-align:center;
                text-decoration-line: underline;
                text-decoration-style: solid;
            }
            h2:hover {
                color:#08851b;
            }
            h3 {
                color:red;
                text-align:center;
            }
            label {
                color:black;
                font-size:20px;
            }
            .logout {
                width : 150px;
                height: 70px;
                color: red;
                background-color:white;
                text-align:center;
                margin:20px;
                justify-content:center;
                border: 1px solid red;
            }
            .logout:hover {
                font-size:20px;
            }
             .but {
               
            }
            .content {
                display:flex;
                flex-wrap:wrap;
                justify-content:space-around;
            }
            .logoutform {
              
               display:flex;
               justify-content:center;
            } 
            pre {
                font-size:15px;
                text-align:left;
            }
        </style>
    </head>
    <body class="antialiased">
    <h1>Add Email and App password for your student Email information </h1>
    @auth()
    <div class="logoutform">
    <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="but">

    <button class="logout" type="submit">Logout</button>
</div>
        </form>
        </div>
        @endauth
    @if(isset($msg))
        <h3>{{$msg}} </h3>
    @endif
    <h2><a href="/emailform">View Inbox</a> </h2>
    <div class="content">
    <div class="formhead">
    <form action="{{ route('addstudent') }}" method="POST" enctype="multipart/form-data">
    @csrf
	<div class="formfull">
    <div class="">
<label>Enter your email address:</label>
<input class="field" type="text" name="email">
</div>

<div class="">
<label>Enter your App password:</label>
<input class="field" type="password" name="password">
</div>
<div class="">
<label>submit your request:</label>
    <button class="field" type="submit">Submit</button>
</div>
</div>
</form>
        </div>
        <div class="formdescription">
            <h1>Guide to add email and app password</h1>
            <pre>
                1) use your email address 
                2) Enable & Goto 2factor Authentication Setting
                3) select App Mail and device to generate App password
                3) Add your Email and App password in form
                4) click submit to store email and credentials  
        </pre>
        </div>
        </div>
    </body>
</html>