<!DOCTYPE html>
<html lang="en">

<head>
    <title> </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>


@if($errors->any())
 <div class="alert alert-danger">
 <ul>
    @foreach ($errors->all() as $error )
        <li> {{$error}} </li>
    @endforeach
 </ul>
 </div>
    @endif


    
    <div class="container">
        <h2>Edit User form</h2>
        <form action="{{url('modelUser/'.$data->id)}}" method="post" enctype="multipart/form-data">
            @csrf

            <input type="hidden" value="put" name="_method">

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" value="{{$data->name}}"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="text" name="email" value="{{$data->email}}"  class="form-control" id="exampleInputEmail" aria-describedby="" placeholder="Enter Email">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>

