<!DOCTYPE HTML>
<html>

<head>
    <title>{{$title}}</title>
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

    <!-- custom css -->
    <style>
        .m-r-1em {
            margin-right: 1em;
        }
        
        .m-b-1em {
            margin-bottom: 1em;
        }
        
        .m-l-1em {
            margin-left: 1em;
        }
        
        .mt0 {
            margin-top: 0;
        }
    </style>

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
    {{ session()->get('Message') }};        
    <!-- container -->
    <div class="container">
        
        <div class="page-header">
            <h1>Login</h1>
        </div>
        <div class="card-body">
            <form action = "{{ url('DoLogin') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail">Email</label>
                    <input type="text" name="email"  value="{{old('email')}}"  class="form-control" id="exampleInputEmail" aria-describedby="" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" value="{{old('password')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                        <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                    </div>
                </div>
                <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                    <a class="small" href="password.html">Forgot Password?</a>
                    <input type="submit" class="btn btn-primary" value="Login">
                </div>
            </form>
        </div>
            {{-- <div class="card-footer text-center">
                <div class="small"><a href="register.html">Need an account? Sign up!</a></div>
            </div>       --}}
    </div>
</body>
</html>