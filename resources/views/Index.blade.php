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
    <a href="{{route('create')}}" class="btn btn-primary m-2">Add new student</a>
    <div class="row">
        <div class="col-sm-8">
            <div>
                <table class="table table-bordered table-striped  table-dark p-3  table-active">
                    <thead>
                    <tr >
                        <td>Name</td>
                        <td>Age</td>
                        <td>Class</td>
                        <td>rollno</td>
                        <td>emailid</td>
                        <td>studentimage</td>
                        <td>studentcity</td>
                        <td colspan="3" >action</td>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($student as $item)
                        <tr>
                            <td>{{$item->studentname}}</td>
                            <td>{{$item->age}}</td>
                            <td>{{$item->class}}</td>
                            <td>{{$item->rollno}}</td>
                            <td>{{$item->emailid}}</td>
                            <td><img src="{{asset('storage/'.$item->studentimage)}}" alt="" width="100px"></td>
                            <td>{{$item->studentcity}}</td>
                            <td><a href="{{route('edit',['id'=>$item])}}" class="btn btn-warning">edit</a></td>
                            <td><a href="{{route('delete',['id'=>$item])}}" class="btn btn-danger">delete</a></td>
                            <td><a href="{{route('duplicate',['id'=>$item])}}" class="btn btn-danger">duplicate</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>

</body>
</html>





