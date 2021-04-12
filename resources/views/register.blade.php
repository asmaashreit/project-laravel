<!DOCTYPE html>
<html lang="en">

<head>
    <title> {{$registTitle}} </title>
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
        <h2>Register form</h2>
        <form action="{{url('profile')}}" method="post" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name"  value="{{old('name')}}"  class="form-control" id="exampleInputName" aria-describedby="" placeholder="Enter Name">
            </div>

            <div class="form-group">
                <label for="exampleInputage">Age</label>
                <input type="text" name="age"  value="{{old('age')}}"  class="form-control" id="exampleInputage" aria-describedby="" placeholder="Enter Age">
            </div>

            <div class="form-group">
                <label for="exampleInputPhone">Phone</label>
                <input type="text" name="phone"  value="{{old('phone')}}"  class="form-control" id="exampleInputPhone" aria-describedby="" placeholder="Enter Phone">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="exampleInputNational">National Id</label>
                <input type="text" name="national_id"  value="{{old('national_id')}}"  class="form-control" id="exampleInputNational" aria-describedby="" placeholder="Enter National Id">
            </div>

            <div class="form-group">
                <label for="exampleInputAddress">Address</label>
                <input type="text" name="address"  value="{{old('address')}}"  class="form-control" id="exampleInputAddress" aria-describedby="" placeholder="Enter Address">
            </div>

            <div class="form-group">
                <label class="small mb-1" for="exampleInputAboutMe">About Me</label>
                <textarea name="aboutme" class="form-control py-1" id="exampleInputAboutMe" rows="6" placeholder="Enter your message .." autocomplete="off">{{ old('aboutme') }}</textarea>
            </div>            

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>

