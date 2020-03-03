<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BugTracker</title>
    <link rel="stylesheet" href="studioTemplates/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="studioTemplates/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Bold-BS4-Jumbotron-with-Particles-js.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Bold-BS4-Jumbotron-with-Particles-js1.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Navigation-with-Search.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/Social-Icons.css">
    <link rel="stylesheet" href="studioTemplates/assets/css/styles.css">
</head>

<body>
    <div style="margin-bottom:1%;margin-top:0%;background-color:#4d04c5;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:#6367E3;color:rgb(255,255,255);">
            <div class="container"><a class="navbar-brand" href="#">{{ config('app.name', 'Laravel') }}</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"
                    id="navcol-1">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color:rgb(255,255,255);"><strong>Home</strong></a></li>
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
    <div class="jumbotron jumbotron-fluid jumbotron-main" style="background-color:#4d04c5;"><script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
<script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <div id="particles-js">
	<canvas class="particles-js-canvas-el" width="1409" height="319" style="width: 100%; height: 100%;"></canvas>
	</div>
        <div class="container center-vertically-holder" style="margin-top:-20px;">
            <div class="row center-vertically">
                <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top:100px;margin-bottom:100px;">
                    <h1 id="custom_jumbotron_heading_styles">Enterprise Appliaction Bug Reporter.<br><br></h1>
                    <hr style="border-top:1px;color:rgba(255,255,255,0.9);width:60%;margin:0px;margin-top:-50px;margin-bottom:10px;margin-left:20%;">
                    <p>Report any types of bugs that you may exprience in the course of using our various applications relased to the public or any comments that you ay have on mproving our softwares..</p>
                    <p><a class="btn btn-primary btn-lg" role="button" href="#"><i class="fa fa-star"></i>Report Bug/ Leave Comment.&nbsp;</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-horizontal" style="background-color:rgb(197,197,197);">
        <div class="container">
            <div class="intro">
                <h2 class="text-center">What Counts As A Bug??&nbsp;<br></h2>
                <p class="text-center" style="color:rgb(0,0,0);">A <strong>software bug</strong> is an error, flaw or fault in a computer System&nbsp;or System that causes it to produce an incorrect or unexpected result, or to behave in unintended ways<br></p>
            </div>
            <div class="row projects">
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="studioTemplates/assets/img/index.png"></a></div>
                        <div class="col">
                            <h3 class="name">Error handling Bugs<br></h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="studioTemplates/assets/img/index.png"></a></div>
                        <div class="col">
                            <h3 class="name">Syntactic errors<br></h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="studioTemplates/assets/img/pexels-photo-1329295.jpeg"></a></div>
                        <div class="col">
                            <h3 class="name">Boundary related errors<br></h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 item">
                    <div class="row">
                        <div class="col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="studioTemplates/assets/img/pexels-photo-1329295.jpeg"></a></div>
                        <div class="col">
                            <h3 class="name">Incorrect calculations<br></h3>
                            <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
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
    <div class="modal fade" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:rgb(249,64,64);">
                    <h4 class="text-center modal-title">First Video .</h4><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                <div class="modal-body"><video width="100%" height="100%" controls=""></video></div>
                <div class="modal-footer"><button class="btn btn-danger active btn-sm" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    <script src="studioTemplates/assets/js/jquery.min.js"></script>
    <script src="studioTemplates/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="studioTemplates/assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>
</body>

</html>