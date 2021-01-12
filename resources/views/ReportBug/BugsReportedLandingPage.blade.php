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
                                        <a class="dropdown-item" href="/allReportedBugs" >
                                          {{"My Reported Bugs."}}
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

    {{-- The php code below is used to initialise  a variable. --}}

    @php
        $number = 0;
    @endphp

    <div class="container">
        
        <div class="card">
            <div class="card-header border-0">
              <div class="d-flex justify-content-between">
                {{-- <h2 class="card-title"> <b>Bugs Reported</b></h2> --}}
              </div>
            </div>
            <div class="card-body">
                <h3> <b>Bugs Reported</b> </h3>

                

              {{-- <div class="d-flex"> --}}
                
                <div class="row"> 
                  @php
                      $counter = 0;
                  @endphp                     
                    @foreach ($bugs as $bug)

                    @php
                    $status;
                        if($counter == 0){
                          $value = 2;
                        }
                        else{
                          $value = (($counter*3)+2);
                        }
                    @endphp
                    <div class="col-lg-6">            
                      <div class="card card-primary card-outline">
                        <div class="card-header">
                          <h5 class="m-0">Application: <b style="color:blue;"></b>{{$bugsArray[$value-2]->software}}</h5>
                        </div>
                        <div class="card-body">
                          <h6 class="card-title"> Status : 

                            {{-- This section o the code is used to get the status of the application. --}}

                            @if ($bugsArray[$value-1] == 0)
                                <b style="color:orangered;">Pending</b>
                                @php
                                    $status = 'Pending';
                                @endphp
                            @elseif($bugsArray[$value-1] == 1)

                              @if ($bugsArray[$value] == 0)
                              <b style="color:orange;">Under Review</b>
                              @php
                              $status = 'Under Review';
                          @endphp
                              @else
                              <b style="color:orange;">Fixing Process.</b>
                              @php
                              $status = 'Fixing Process.';
                          @endphp
                              @endif                            
                            @endif

                          </h6>
                          @php                                                
                            $dateToFormat = date_create($bugsArray[$value-2]->created_at);
                            $date = date_format($dateToFormat, "D-d-F-Y");  
                          @endphp
                          <p class="card-text">Date Reported: {{$date}} </p>
                          <a  class="btn btn-success" data-target="{{"#modal".$bug->id}}" data-toggle="modal" >See More Details.</a>
                        </div>
                      </div>
                    </div>
                    @php
                        $counter++;
                    @endphp

                <div role="dialog" tabindex="-1" class="modal fade" id="{{"modal".$bug->id}}">
                  <div class="modal-dialog modal-lg" role="document">
                      <div class="modal-content">
                          <div class="modal-header" style="background-color:rgb(249,64,64);">
                              <h4 class="text-center modal-title">untrackedBug Reported.</h4>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button></div>
                          <div class="modal-body">
                              <div class="card">
                                  <div class="card-body">
                                      {{-- <h4 class="card-title">Status : {{$status}}</h4> --}}

                                      <div class="row">
                                        <div class="col-md-4">
                                            <h5>Status:</h5>
                                        </div>
                                        <div class="col-md-8">
                                            <p>Pending</p>
                                        </div>
                                    </div>

                                      {{-- <br> --}}
                                      <div class="row">
                                          <div class="col-md-4">
                                              <h5>Date Reported:</h5>
                                          </div>
                                          <div class="col-md-8">
                                              <p>{{$date}}</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <h5>Application :</h5>
                                          </div>
                                          <div class="col-md-8">
                                              <p>{{$bug->software}}</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <h5>Date Noticed :</h5>
                                          </div>
                                          <div class="col-md-8">
                                            @php                                                
                                            $dateToFormat = date_create($bug->dateNoticed);
                                            $date2 = date_format($dateToFormat, "D-d-F-Y");  
                                          @endphp

                                              <p>{{$date2 }}</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <h5>Reporter Full Names:</h5>
                                          </div>
                                          <div class="col-md-8">
                                              <p>{{Auth::user()->name}}</p>
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <h5>untrackedBug Description:</h5>
                                          </div>
                                          <div class="col-md-8">
                                              {!! $bug->decription!!}
                                          </div>
                                      </div>
                                      <div class="row">
                                          <div class="col-md-4">
                                              <h5>Expected Behaviour:</h5>
                                          </div>
                                          <div class="col-md-8">
                                            {!! $bug->expectation!!}
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="modal-footer" style="background-color:rgb(249,64,64);">
                            <button class="btn btn-success btn-sm" type="button">APPROVE BUG</button></div>
                            <button class="btn btn-danger active btn-sm" type="button" data-dismiss="modal">Close</button></div>
                      </div>
                  </div>
                </div>                  

                    @endforeach                    
                </div>
               
              {{-- </div> --}}
              <!-- /.d-flex -->                           
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
@include('sweetalert::alert')
</body>

</html>
