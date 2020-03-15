@extends('extending.firstLineExtending') 

@section('charts')


@endsection

@section('firstLineHeader')
<h3 style="text-align:center;font-family:'Times New Roman', Times, serif">First Line Support DashBoard.</h3>
@endsection

@section('firstLineSection') 

@php
    // dd($untrackedBugs);
@endphp
{{-- This is the new section of the appliaction landing for the frst line support. --}}
{{-- {!!$usersChart->container()!!} --}}
<h4 style="font-family:'Times New Roman', Times, serif;text-align:center;text-decoration:underline;" > GRAPHICAL REPRESENTATION OF THE untrackedBugS REPORTED.</h4>
<br>
<div class="row">    
  <div class="col-lg-6">
    <div class="card card-warning card-outline">
        <div class="card-header">
          <h5 class="m-0" style="font-family:'Times New Roman', Times, serif"> PROGRESS CHART. </h5>
        </div>
        <div class="card-body">
          {{-- <h6 class="card-title">Special title treatment</h6> --}}
          <h6 class="card-title">This Dounut Chart is used to show the bugs not verified per program.</h6>
          
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-warning">Show Chart</a>
          
          
        </div>
      </div>
  </div>

  <div class="col-lg-6">
    <div class="card card-success card-outline">
        <div class="card-header">
          <h5 class="m-0" style="font-family:'Times New Roman', Times, serif"> UNPROCESSED BUGS PER PROGRAM. </h5>
        </div>
        <div class="card-body">
          <h6 class="card-title">This Dounut Chart is used to show the bugs not verified per program.</h6>
  
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-danger">Show Chart</a>
        </div>
      </div>
  </div>
</div>

<div>
    <h4 style="font-family:'Times New Roman', Times, serif;text-align:center;text-decoration:underline;" > Bugs </h4>
    <br>
</div>


<div class="row">
    <div class="col-lg-12">

        <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title">Bugs Reported and No vErifiedor Fixing.</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            
              <div class="table-responsive">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th>S <sub>no</sub></th>
                            <th> Tracking Number</th>
                            <th>  Software</th>
                            <th>  Date Reported </th>
                            <th> More Details</th>
                        </tr>
                    </thead>
                    <tbody>
                      @php
                      $increment = 1;
                  @endphp
                  @foreach ($untrackedBugs as $untrackedBug)
                      <tr>
                        <td>
                          {{$increment++}}
                        </td>
                        <td>
                          {{'N/A'}}
                        </td>
                        <td>
                          {{$untrackedBug->software}}
                        </td>
                        <td>
                          @php                                                
                            $dateToFormat = date_create($untrackedBug->created_at);
                            $date = date_format($dateToFormat, "D-d-F-Y H:i:s");  
                          @endphp
                        {{$date}}
                        </td>
                        <td>
                          <a href="#" data-target="{{"#modal".$untrackedBug->id}}" data-toggle="modal"> Click To View Details.</a>
                        </td>
                      </tr>                      
                  @endforeach
                    </tbody>
                </table>
            </div>

            </div>
          </div>
             
            <!-- /.card-body -->
            @foreach ($untrackedBugs as $untrackedBug)
            <div role="dialog" tabindex="-1" class="modal fade" id="{{"modal".$untrackedBug->id}}">
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
                                          <p>{{$untrackedBug->software}}</p>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-4">
                                          <h5>Date Noticed :</h5>
                                      </div>
                                      <div class="col-md-8">
                                        @php                                                
                                        $dateToFormat = date_create($untrackedBug->dateNoticed);
                                        $date2 = date_format($dateToFormat, "D-d-F-Y H:i:s");  
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
                                          {!! $untrackedBug->decription!!}
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-4">
                                          <h5>Expected Behaviour:</h5>
                                      </div>
                                      <div class="col-md-8">
                                        {!! $untrackedBug->expectation!!}
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer" style="background-color:rgb(249,64,64);">
                        <button class="btn btn-danger active btn-sm" type="button" data-dismiss="modal">Close</button></div>
                  </div>
              </div>
          </div>                  
            @endforeach          
  
    <div class="col-lg-6">
      <div class="card card-success card-outline">
          <div class="card-header">
            <h5 class="m-0" style="font-family:'Times New Roman', Times, serif"> untrackedBugs With Close Closing TimeLines. </h5>
          </div>
          <div class="card-body">
            <h6 class="card-title">Special title treatment</h6>
    
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
            <a href="#" class="btn btn-primary">Show Chart</a>
          </div>
        </div>
    </div>
  </div>
</div>
{{-- THIS SECTION OF THE CODE IS USED TO GET THE MESSAGING ECTION OF THE APPLIACION. --}}

<div class="row">
    <div class="col-lg-8 offset-lg-2 ">
        <div class="card direct-chat direct-chat-primary">
            <div class="card-header ui-sortable-handle" style="cursor: move;">
              <h3 class="card-title">Direct Chat</h3>
        
              <div class="card-tools">
                <span data-toggle="tooltip" title="3 New Messages" class="badge badge-primary">3</span>
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle">
                  <i class="fas fa-comments"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <!-- Conversations are loaded here -->
              <div class="direct-chat-messages">
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Is this template really for free? That's unbelievable!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
        
                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    You better believe it!
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
        
                <!-- Message. Default to the left -->
                <div class="direct-chat-msg">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-left">Alexander Pierce</span>
                    <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user1-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    Working with AdminLTE on a great new app! Wanna join?
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
        
                <!-- Message to the right -->
                <div class="direct-chat-msg right">
                  <div class="direct-chat-infos clearfix">
                    <span class="direct-chat-name float-right">Sarah Bullock</span>
                    <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                  </div>
                  <!-- /.direct-chat-infos -->
                  <img class="direct-chat-img" src="dist/img/user3-128x128.jpg" alt="message user image">
                  <!-- /.direct-chat-img -->
                  <div class="direct-chat-text">
                    I would love to.
                  </div>
                  <!-- /.direct-chat-text -->
                </div>
                <!-- /.direct-chat-msg -->
        
              </div>
              <!--/.direct-chat-messages-->
        
              <!-- Contacts are loaded here -->
              <div class="direct-chat-contacts">
                <ul class="contacts-list">
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user1-128x128.jpg">
        
                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Count Dracula
                          <small class="contacts-list-date float-right">2/28/2015</small>
                        </span>
                        <span class="contacts-list-msg">How have you been? I was...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user7-128x128.jpg">
        
                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Sarah Doe
                          <small class="contacts-list-date float-right">2/23/2015</small>
                        </span>
                        <span class="contacts-list-msg">I will be waiting for...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user3-128x128.jpg">
        
                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Nadia Jolie
                          <small class="contacts-list-date float-right">2/20/2015</small>
                        </span>
                        <span class="contacts-list-msg">I'll call you back at...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user5-128x128.jpg">
        
                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Nora S. Vans
                          <small class="contacts-list-date float-right">2/10/2015</small>
                        </span>
                        <span class="contacts-list-msg">Where is your new...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user6-128x128.jpg">
        
                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          John K.
                          <small class="contacts-list-date float-right">1/27/2015</small>
                        </span>
                        <span class="contacts-list-msg">Can I take a look at...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                  <li>
                    <a href="#">
                      <img class="contacts-list-img" src="dist/img/user8-128x128.jpg">
        
                      <div class="contacts-list-info">
                        <span class="contacts-list-name">
                          Kenneth M.
                          <small class="contacts-list-date float-right">1/4/2015</small>
                        </span>
                        <span class="contacts-list-msg">Never mind I found...</span>
                      </div>
                      <!-- /.contacts-list-info -->
                    </a>
                  </li>
                  <!-- End Contact Item -->
                </ul>
                <!-- /.contacts-list -->
              </div>
              <!-- /.direct-chat-pane -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <form action="#" method="post">
                <div class="input-group">
                  <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                  <span class="input-group-append">
                    <button type="button" class="btn btn-primary">Send</button>
                  </span>
                </div>
              </form>
            </div>
            <!-- /.card-footer-->
          </div>
    </div>
</div>    


@endsection