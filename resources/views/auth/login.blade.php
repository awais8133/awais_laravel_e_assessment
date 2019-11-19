<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> --}}


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/login-signup.css') }}">

    <title>E-Assessment | Login</title>

</head>

<body>
        <a href="#" class="signup">Signup</a>


    <div class="wrapper">
        <div class="left">
            <img src="{{asset('images/login.jpg')}}" alt="signup">
        </div>
        <div class="right">

            <div class="form-container">

                <h1 class="center title">E-Assessment System</h1>
                <form method="post" action="#">
                    <h1 class="center title">Login</h1>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off" />
                    </div>

                    <div class="center">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </form>


            </div>

        </div>
    </div>

</body>

</html>