<!doctype html>
<html lang="en">

<head>
    @include('partials._head')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">

        <a class="navbar-brand" href="/"><span class="p-c">E-Assessment</span> System</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Populate Repository
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href=  '{{ url("/teachers/subjects/set-subject/{$id}")}}'>Class Subject</a>
                        <a class="dropdown-item" href=  '{{ url("/teachers.categories/index-categories/{$id}")}}'>Maintain Categories</a>
                        {{-- <div class="dropdown-divider"></div> --}}
                        <a class="dropdown-item" href="#">Maintain Questions</a>
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto navbar-right">
                @yield('right-links')
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a>
                </li>
                <li class="nav-item">
                    Hello <span class="p-c">Username</span>
                </li>
                <li class="nav-item">
                    {{-- <img class="person-logo" src="images/Person-Logo.png" alt="Person-Logo.png"> --}}
                    <i class="fa fa-user-o" aria-hidden="true"></i>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="hero-section">

        @yield('hero-section')
        
    </div>

    <div class="container">

        @include('partials._messages')

        @yield('content')

    </div>


    {{-- <footer>
        <hr>
        <p class="text-center">Copyright E-Assessment System - All rights reserved.</p>
    </footer> --}}


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    @yield('scripts')

</body>

</html>