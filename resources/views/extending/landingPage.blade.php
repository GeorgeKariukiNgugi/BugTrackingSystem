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
    {{-- <link rel="stylesheet" href="{{asset('AdminLTE-master/plugins/fontawesome-free/css/all.min.css')}}"> --}}
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('AdminLTE-master/dist/css/adminlte.min.css')}}">

  <link href="{{ asset('css/customCSS.css') }}" rel="stylesheet">
</head>

<body>
    <div style="margin-bottom:1.2%;margin-top:0.5%;background-color:#4D04C5;">
        <nav class="navbar navbar-light navbar-expand-md navigation-clean" style="background-color:#6367E3;color:rgb(255,255,255);">
            <div class="container"><a class="navbar-brand" href="/">{{ config('app.name', 'Laravel') }}</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse"id="navcol-1">
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
                            <li class="nav-item">
                            <a class="btn btn-info" role="button" href="/reportBug" id="custom-round-button"><i class="fa fa-bug"></i> <strong>  Report Bug</strong></a>
                            </li>
                            {{-- This section of the code is used to get the notification section of the navigation 
                                bar that includes the messages and laso the normal notifications. --}}

                                <li class="nav-item dropdown">
                                    <a class="nav-link" data-toggle="dropdown" href="#" style="color:white;">
                                        <i class="fa fa-comments"></i>
                                      <span class="badge badge-danger navbar-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                      <a href="#" class="dropdown-item">
                                        <!-- Message Start -->
                                        <div class="media">
                                          <img src="AdminLTE-master/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                          <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                              Brad Diesel
                                              <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                                            </h3>
                                            <p class="text-sm">Call me whenever you can...</p>
                                            <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                          </div>
                                        </div>
                                        <!-- Message End -->
                                      </a>
                                      <div class="dropdown-divider"></div>
                                      <a href="#" class="dropdown-item">
                                        <!-- Message Start -->
                                        <div class="media">
                                          <img src="AdminLTE-master/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                          <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                              John Pierce
                                              <span class="float-right text-sm text-muted"><i class="fa fa-star"></i></span>
                                            </h3>
                                            <p class="text-sm">I got your message bro</p>
                                            <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                          </div>
                                        </div>
                                        <!-- Message End -->
                                      </a>
                                      <div class="dropdown-divider"></div>
                                      <a href="#" class="dropdown-item">
                                        <!-- Message Start -->
                                        <div class="media">
                                          <img src="AdminLTE-master/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                                          <div class="media-body">
                                            <h3 class="dropdown-item-title">
                                              Nora Silvester
                                              <span class="float-right text-sm text-warning"><i class="fa fa-star"></i></span>
                                            </h3>
                                            <p class="text-sm">The subject goes here</p>
                                            <p class="text-sm text-muted"><i class="fa fa-clock mr-1"></i> 4 Hours Ago</p>
                                          </div>
                                        </div>
                                        <!-- Message End -->
                                      </a>
                                      <div class="dropdown-divider"></div>
                                      <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                                    </div>
                                  </li>


                                  <li class="nav-item dropdown">
                                    <a class="nav-link" style="color:white;" data-toggle="dropdown" href="#">
                                      <i class="fa fa-bell"></i>
                                      <span class="badge badge-warning navbar-badge">15</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                                      <span class="dropdown-header">15 Notifications</span>
                                      <div class="dropdown-divider"></div>
                                      <a href="#" class="dropdown-item">
                                        <i class="fa fa-envelope mr-2"></i> 4 new messages
                                        <span class="float-right text-muted text-sm">3 mins</span>
                                      </a>
                                      <div class="dropdown-divider"></div>
                                      <a href="#" class="dropdown-item">
                                        <i class="fa fa-users mr-2"></i> 8 friend requests
                                        <span class="float-right text-muted text-sm">12 hours</span>
                                      </a>
                                      <div class="dropdown-divider"></div>
                                      <a href="#" class="dropdown-item">
                                        <i class="fa fa-file mr-2"></i> 3 new reports
                                        <span class="float-right text-muted text-sm">2 days</span>
                                      </a>
                                      <div class="dropdown-divider"></div>
                                      <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                                    </div>
                                  </li>

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

                                        <a class="dropdown-item" href="/allReportedBugs" >
                                          {{"This Is Sample."}}
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
    <div class="jumbotron jumbotron-fluid jumbotron-main" style="background-color:#4d04c5;">
      <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> 
      <script src="https://threejs.org/examples/js/libs/stats.min.js"></script>
    <div id="particles-js">
	<canvas class="particles-js-canvas-el" width="1409" height="419" style="width: 100%; height: 100%;"></canvas>
	</div>
        <div class="container center-vertically-holder" style="margin-top:-20px;">
            <div class="row center-vertically">
                <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top:100px;margin-bottom:100px;">
                    <h1 id="custom_jumbotron_heading_styles">Enterprise Appliaction Bug Reporter.<br><br></h1>
                    <hr style="border-top:1px;color:rgba(255,255,255,0.9);width:60%;margin:0px;margin-top:-50px;margin-bottom:10px;margin-left:20%;">
                    <p>Report any types of bugs that you may exprience in the course of using our various applications relased to the public or any comments that you ay have on mproving our softwares..</p>
                    <p><a class="btn btn-primary btn-lg" role="button" href="/reportBug"><i class="fa fa-bug"></i>    Report Bug/ Leave Comment.&nbsp;</a></p>
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

    <div class="content "  style="background-color:rgb(197,197,197);">
        <div class="container ">
      <div class="row">
        <div class="col-lg-6">
          <div class="card card-outline card-danger">
            <div class="card-header">
              <h5 class="m-0 text-center">How To Report A bug.</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title">Steps to reporting a bug successfilly.</h6>
              <ol type="i" class="card-text">
                <li>Step 1</li>
                <li>Step 2</li>
                <li>Step 3</li>
                <li>Step 4</li>
            </ol>
  
              <a class="btn btn-danger custom-button-center" data-target = "#sampleModal" data-toggle="modal" href="#"> <i class = "fa fa-video-camera"></i> Watch Video.</a>
            </div>
          </div>
  
        </div><!-- /.col-md-6 -->
        
        <div class="col-lg-6">
          <div class="card card-outline card-warning">
            <div class="card-header">
              <h5 class="m-0 text-center">How To Track Reported Bug End To End.</h5>
            </div>
            <div class="card-body">
              <h6 class="card-title"> Steps to tracking a reported bug.</h6>
              <ol type="i" class="card-text">
                <li>Step 1</li>
                <li>Step 2</li>
                <li>Step 3</li>
                <li>Step 4</li>
            </ol>
              <a class="btn btn-warning custom-button-center" data-target = "#sampleModal2" data-toggle="modal" href="#"> <i class = "fa fa-video-camera"> </i> Watch Video.</a>
            </div>
          </div>
  
        </div><!-- /.col-md-6 -->
      </div>
    </div><!-- /.container-fluid -->
  </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  </div>
  <!-- ./wrapper -->
        {{-- This section of the code is used to add the modals to the landing page.  --}} 

    <div role="dialog" tabindex="-1" class="modal fade" id="sampleModal">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:rgb(252,188,70)">
                    <h4 class="modal-title" style="text-align:center;">How To Report A bug.</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" style="background-color:rgb(244,196,108)"><video controls width="100%" height="100%" src="{{asset('videos/Record1.mp4')}}"></video></div>
                <div class="modal-footer" style="background-color:rgb(252,188,70)"><button class="btn btn-danger active btn-sm" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
    </div>
    
    
    <div role="dialog" tabindex="-1" class="modal fade" id="sampleModal2">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:rgb(249,64,64)">
                    <h4 class="modal-title" style="text-align:center;">How To Report A bug.</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                </div>
                <div class="modal-body" style="background-color:rgb(244,108,108)"><video controls width="100%" height="100%" src="{{asset('videos/Record1.mp4')}}"></video></div>
                <div class="modal-footer" style="background-color:rgb(249,64,64)"><button class="btn btn-danger active btn-sm" type="button" data-dismiss="modal">Close</button></div>
            </div>
        </div>
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