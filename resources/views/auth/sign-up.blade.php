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

    <title>E-Assessment | Sign-Up</title>

</head>

<body>



    <div class="wrapper">
        <div class="left">
            <img src="{{asset('images/signup.jpg')}}" alt="signup">
        </div>
        <div class="right">

            <div class="form-container">

                <h1 class="center title">E-Assessment System</h1>
                <form method="post" action="#">
                    <h1 class="center title">Signup</h1>
                    <input name="_token" type="hidden" value="{{ csrf_token() }}" />
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" class="form-control" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" class="form-control" autocomplete="off" />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" class="form-control" autocomplete="off" />
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="0">
                                <label class="form-check-label" for="exampleRadios1">Student</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="1"
                                    checked>
                                <label class="form-check-label" for="exampleRadios2"> Teacher </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group mb-4">
                        <label for="exampleFormControlFile1">Choose Image</label>
                        <input type="file" class="form-control-file" accept="image/*">
                    </div>


                    <div class="center">
                        <button type="submit" class="btn btn-primary">Signup</button>
                    </div>
                </form>
            </div>

        </div>
    </div>


</body>

</html>