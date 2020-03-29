<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BugTracker</title>
    <link rel="stylesheet" href="studioTemplates/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="studioTemplates/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="studioTemplates/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Bold-BS4-Jumbotron-with-Particles-js.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Bold-BS4-Jumbotron-with-Particles-js1.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Social-Icons.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/styles.css">
    <link href="{{ asset('css/customCSS.css') }}" rel="stylesheet">
</head>

<body>
    <div class="login-dark">
        <div style="margin-bottom:1%;margin-top:0%;background-color:#4D04C5;">
            <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:#6367E3;color:rgb(255,255,255);">
                <div class="container"><a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(255,255,255);"><strong>Home</strong></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color:rgb(255,255,255);"><strong>Contacts</strong></a></li>
                            <li class="nav-item" role="presentation">
                            @guest
                                    <li class="nav-item">
                                        <a class="nav-link" style="color:white;text-style:bold;" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" style="color:white;text-style:bold;" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" style="color:white;text-style:bold;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
    
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
    
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                              @endguest
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        
        <form method="POST" action="{{ route('login') }}" style="background-color:#4a51f2;">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline" style="color:rgb(255,255,255);">
            </i></div>
            <div class="form-group">
                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            </div>
            <div class="form-group">
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group"><button class="btn btn-dark btn-block" type="submit">Log In</button></div>
            <a href="#" class="forgot" style="color:rgb(255,255,255);">Forgot your email or password?</a>
        </form>
    </div>

    <div class="footer-dark" style="background-color:rgb(77,4,197);">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Services</h3>
                        <ul>
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Hosting</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>About</h3>
                        <ul>
                            <li><a href="#">Company</a></li>
                            <li><a href="#">Team</a></li>
                            <li><a href="#">Careers</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>Company Name</h3>
                        <p>Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-instagram"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
                </div>
                <p class="copyright">Company Name © 2017</p>
            </div>
        </footer>
    </div>

    <script src="studioTemplates/assets/js/jquery.min.js"></script>
    <script src="studioTemplates/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="studioTemplates/assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>
</body>

</html>