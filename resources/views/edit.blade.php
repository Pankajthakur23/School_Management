<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="bg-dark text-white text-center p-3">
                <h2>Student Edit form</h2>
            </div>
            <form action="{{route('update',['data'=>$data])}}"  method="post">
                @method('put')
                @csrf

                <label for=""class="text-warning">Enter student name</label>
                <input type="text" value="{{$data->studentname}}" name="studentname" placeholder="enter student name" class="form-control">
                @error('studentname')
                <span style="color:red;">{{$message}}</span>
                @enderror

                <label for=""class="text-warning">Enter student age</label>
                <input type="text" value="{{$data->age}}" name="age" placeholder="enter student age" class="form-control">
                @error('age')
                <span style="color:red;">{{$message}}</span>
                @enderror

                <label for=""class="text-warning">Enter student class</label>
                <input type="text" value="{{$data->class}}" name="class" placeholder="enter student class" class="form-control">
                @error('class')
                <span style="color:red;">{{$message}}</span>
                @enderror

                <label for=""class="text-warning">Enter student rollno</label>
                <input type="text" value="{{$data->rollno}}" name="rollno" placeholder="enter student rollno" class="form-control">
                @error('rollno')
                <span style="color:red;">{{$message}}</span>
                @enderror

                <label for=""class="text-warning">Enter student emailid</label>
                <input type="text"  value="{{$data->emailid}}" name="emailid" placeholder="enter student emailid" class="form-control">
                @error('emailid')
                <span style="color:red;">{{$message}}</span>
                @enderror

                <label for=""class="text-warning">upload student image</label>
                <input type="file" value="{{$data->studentimage}}" name="studentimage"  class="form-control">
                @error('studentimage')
                <span style="color:red;">{{$message}}</span>
                @enderror

                <label for=""class="text-warning">Enter student city</label>
                <input type="text" value="{{$data->studentcity}}" name="studentcity" placeholder="enter student city" class="form-control">
                @error('studentcity')
                <span style="color:red;">{{$message}}</span>
                @enderror

                <input  class="btn btn-warning mt-3 w-100" type="submit" value="Update">



            </form>
        </div>


    </div>
</div>
</body>
</html>





