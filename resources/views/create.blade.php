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
             <div class="bg-success text-white text-center p-4"><h3>Create New Student Form</h3></div>
             <div>
                 <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                     @csrf

                     <label for="" class="text-primary">Enter student name</label>
                     <input type="text" name="studentname" placeholder="enter student name" class="form-control">
                     @error('studentname')
                     <span style="color:red;">{{$message}}</span>
                     @enderror

                     <label for=""class="text-primary">Enter student age</label>
                     <input type="text" name="age" placeholder="enter student age" class="form-control">
                     @error('age')
                     <span style="color:red;">{{$message}}</span>
                     @enderror

                     <label for=""class="text-primary">Enter student class</label>
                     <input type="text" name="class" placeholder="enter student class" class="form-control">
                     @error('class')
                     <span style="color:red;">{{$message}}</span>
                     @enderror

                     <label for=""class="text-primary">Enter student rollno</label>
                     <input type="text" name="rollno" placeholder="enter student rollno" class="form-control">
                     @error('rollno')
                     <span style="color:red;">{{$message}}</span>
                     @enderror

                     <label for=""class="text-primary">Enter student emailid</label>
                     <input type="text" name="emailid" placeholder="enter student emailid" class="form-control">
                     @error('emailid')
                     <span style="color:red;">{{$message}}</span>
                     @enderror

                     <label for=""class="text-primary">upload student image</label>
                     <input type="file" name="studentimage"  class="form-control">
                     @error('studentimage')
                     <span style="color:red;">{{$message}}</span>
                     @enderror

                     <label for=""class="text-primary">Enter student city</label>
                     <input type="text" name="studentcity" placeholder="enter student city" class="form-control">
                     @error('studentcity')
                     <span style="color:red;">{{$message}}</span>
                     @enderror

                     <input type="submit" value="create" class="btn btn-success mt-2 w-100">



                 </form>
             </div>
         </div>
     </div>
 </div>


</body>
</html>





