<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit remainder</title>
    <style>
        .main {
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
        }
        .field {
            height:40px;
            width:250px;
        }
        .box {
            margin:10px;
            padding:10px;
            display: flex;
            justify-content: center;
        }
        label {
            margin:10px;
            
        }
        .editform {
            margin: 50px;
            padding:50px;
        }
    </style>
</head>
<body>
    <div class="main">
        <div class="editform">
            <h2 style="text-align:center;">Edit Remainder Form </h2>
            <form action="{{route('editremainder',$remainder->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="box">
                    <label>Followup date </label>
                    <input class="field" type="date" name="followup_date" value="{{$remainder->followup_date}}">
                </div>
                <div class="box">
                    <label>Followup detail </label>
                    <input class="field" type="text" name="followup_detail" value="{{$remainder->followup_detail}}">
                </div>
                <div class="box">
                    <label>Followup Status </label>
                    <select name="status" class="field">
                        <option value="1">Active</option>
                        <option value="0">Inactive</option>
                    </select>
                    {{-- <input class="field" type="text" name="followup_detail" value="{{$remainder->followup_detail}}"> --}}
                </div>
                <div class="box">
                    <input  type="submit" class="field"/>
                </div>
            </form>
        </div>
    </div>
</body>
</html>