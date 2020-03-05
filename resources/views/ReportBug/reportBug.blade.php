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

        <link rel="stylesheet" href="AdminLTE-master/plugins/summernote/summernote-bs4.css">


    </head>

<body style="background-color:#C5C5C5">
  {{-- {{"This is the sample."}} --}}
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

              <div class="card card-info">
                <div class="card-header text-center">
                  <h3 class="card-title" style="text-align:center;" > <b>Kindly Add the Description of the Bug.</b></h3>                  
                </div>
                <div class="card-body"> 

                  <ol style="color:blue;">
                    <small><i class="fa fa-sticky-note"></i> N.B.</small>
                    <li>
                      <small><b>Adding Images in the descrition of the bug and also in the Expected behaviour of the appliaction are highly appreciated.</b></small>
                    </li>
                    <li>
                      <small><b> Fields with <i style="color:red;" class="fa fa-asterisk"></i> are required.</b></small>
                    </li>
                  </ol>
                    
                  <form action="/postingBug" method="POST">
                    @csrf               
                  <div class="form-group" data-select2-id="29">
                    <label>Application Bug Was Noticed In: <i style="color:red;" class="fa fa-asterisk"></i></label>
                    <select required name="application" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">                      
                      <option data-select2-id="37" value="app_one">Application One</option>
                      <option data-select2-id="38" value="app_two">Application Two</option>
                      <option data-select2-id="39" value="app_three">Application Three</option>
                      <option data-select2-id="40" value="app_four">Application Four</option>                     
                    </select>
                    {{-- <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zjlh-container"><span class="select2-selection__rendered" id="select2-zjlh-container" role="textbox" aria-readonly="true" title="California">California</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                  </div>

                   {{-- This is the date input field. --}}
                   <div class="form-group">
                    <label>Date Bug Was Noticed: <i style="color:red;" class="fa fa-asterisk"></i></label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input required type="date" name="date" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" im-insert="false">
                    </div>
                    <!-- /.input group -->
                  </div>

                  <div class="form-group" data-select2-id="29">
                    <label>The Bug Description. <i style="color:red;" class="fa fa-asterisk"></i> <small style="color:blue;"> <b>Images Can Be Added To The Description</b></small></label>
                    <textarea required class="textarea" placeholder="Place some text here" name="bug" rows="60"
                    style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    {{-- <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zjlh-container"><span class="select2-selection__rendered" id="select2-zjlh-container" role="textbox" aria-readonly="true" title="California">California</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                  </div> 
                  
                  {{-- This is the description of how the applicatio is supposed to work without the bug. --}}

                  <div class="form-group" data-select2-id="29">
                    <label>Expected Behaviour of the application. <i style="color:red;" class="fa fa-asterisk"></i> <small style="color:blue;"> <b>Images Can Be Added To The Description</b></small></label>
                    <textarea required class="textarea" name="expectedBehaviour" placeholder="Place some text here" name="post" rows="60"
                    style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    {{-- <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zjlh-container"><span class="select2-selection__rendered" id="select2-zjlh-container" role="textbox" aria-readonly="true" title="California">California</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span> --}}
                  </div>  

                  <div class="row">
                    <div class="col-md-8 offset-md-2" style="text-align:center;">
                        <div role="group" class="btn-group">
                          <button class="btn btn-warning btn-lg" type="reset"><i class="fa fa-refresh"></i><strong>CLEAR FIELDS.</strong><br /></button>
                          <button class="btn btn-success btn-lg" type="submit"><i class="fa fa-gavel"></i><strong>REPORT BUG FOR FIXING.</strong><br /></button>
                        </div>
                    </div>
                </div>


                  </form>                                     
                </div>
                <!-- /.card-body -->
              </div>

      
              

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
    
    <script src="AdminLTE-master/plugins/summernote/summernote-bs4.min.js"></script>
<script>
  $(function () {
    // Summernote
    $('.textarea').summernote({
                                height: 350})
    $('.textarea').attr('placeholder','This is the placeholder.');
    
  })
</script>

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