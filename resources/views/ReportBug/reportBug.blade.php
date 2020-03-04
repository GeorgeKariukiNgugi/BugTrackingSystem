
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
        <link rel="stylesheet" href="studioTemplates/assets/css/TD-BS4-Simple-Contact-Form.css">
        <link rel="stylesheet" href="studioTemplates/assets/css/TD-BS4-Simple-Contact-Form1.css">
        <link href="{{ asset('css/customCSS.css') }}" rel="stylesheet">

          <!-- Font Awesome -->
        <link rel="stylesheet" href="AdminLTE-master/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- daterange picker -->
        <link rel="stylesheet" href="AdminLTE-master/plugins/daterangepicker/daterangepicker.css">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="AdminLTE-master/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href=AdminLTE-master./plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="AdminLTE-master/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- Select2 -->
        <link rel="stylesheet" href="AdminLTE-master/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="AdminLTE-master/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
        <!-- Bootstrap4 Duallistbox -->
        <link rel="stylesheet" href="AdminLTE-master/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="AdminLTE-master/dist/css/adminlte.min.css">


    </head>

<body style="background-color:#C5C5C5">
    <div style="margin-bottom:1.2%;margin-top:0%;background-color:#4D04C5;">
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


    {{-- THIS SECTION OF HE CODE IS USED TO ADD THE DATA THAT IS GOUNG TO E DISPLAYED ON THE FORM. --}}

    <div class="container">
        <div class=" row">
            <div class="col-md-12 offset-md-0 ">
                        
                        <section class="td-form">
                          <div class="row td-form-wrapper" style="background-color:#4D04C5;">
                              <div class="col td-glass">
                                  <form method="POST" action="{{"/postingBug"}}" lass="td-form-wrapper" style="background-color:rgba(71,90,104,0.47);">
                                    @csrf  
                                    <h1 class="text-center">Bug Report Form.</h1>
                                      <div class="form-group">
                                          <div class="col-md-12"><label for="name" style="font-size:17px;"><strong>Application Bug Was Noticed: &nbsp;</strong></label>
                                              <div class="d-flex">                                                                                                 
                                                  <select class="form-control " required>
                                                    <option data-select2-id="3">Application 1</option>
                                                    <option data-select2-id="37">Application 2</option>
                                                    <option data-select2-id="38">Application 3</option>
                                                    <option data-select2-id="39">Application 4</option>
                                                  </select>                                                                 
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12"><label for="email" style="font-size:17px;"><strong>Date Bug Was Noticed:&nbsp;</strong></label>
                                              <div class="d-flex">                                                 
                                                <input class="form-control" type="date" requ>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12"><label for="message" style="font-size:17px;"><strong>Bug Descrition:&nbsp;</strong></label>
                                              <div class="d-flex td-input-container"><i class="icon ion-android-create align-self-center"></i><textarea class="form-control" rows="6" cols="50" name="message" placeholder="Add meaningful message here"></textarea></div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12"><label for="message" style="font-size:17px;"><strong>Expected Behaviour:</strong></label>
                                              <div class="d-flex td-input-container"><i class="icon ion-android-create align-self-center"></i><textarea class="form-control" rows="6" cols="50" name="message" placeholder="Add meaningful message here"></textarea></div>
                                          </div>
                                      </div>
                                      <div class="form-group">
                                          <div class="col-md-12"><button class="btn btn-dark float-right" type="submit"><strong>Send Bug For Fixing</strong></button></div>
                                      </div>
                                  </form>
                              </div>
                          </div>
                      </section>

                    </div>
                    <!-- /.card-body -->
                  </div>
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

    {{-- <script src="studioTemplates/assets/js/jquery.min.js"></script> --}}
    <script src="AdminLTE-master/plugins/jquery/jquery.min.js"></script>
    <script src="studioTemplates/assets/bootstrap/js/bootstrap.min.js"></script>
    
    <script src="studioTemplates/assets/js/Bold-BS4-Jumbotron-with-Particles-js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>
    <script src="AdminLTE-master/plugins/select2/js/select2.full.min.js"></script>
    
   <script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    })
</script>
</body>

</html>