@extends('extending.mainExtending')

@section('main')
    <div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            {{-- <h1 class="m-0 text-dark">Starter Page</h1> --}}
          </div><!-- /.col -->
          <div class="col-sm-6">           
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        <div class="jumbotron jumbotron-fluid jumbotron-main">
          <div id="particles-js"><canvas class="particles-js-canvas-el" width="1409" height="319" style="  width:100%;height:100%;"></canvas></div>
          <div class="container center-vertically-holder" style="margin-top:-20px;">
              <div class="row center-vertically">
                  <div class="col-md-8 offset-sm-0 offset-md-2 text-center" style="margin-top:100px;margin-bottom:100px;">
                      <h1 id="custom_jumbotron_heading_styles">Enterprise Appliaction Bug Reporter.<br /><br /></h1>
                      <hr style="border-top:1px;color:rgba(255,255,255,0.9);width:60%;margin:0px;margin-top:-50px;margin-bottom:10px;margin-left:20%;" />
                      <p>Report any types of bugs that you may exprience in the course of using our various applications relased to the public or any comments that you ay have on mproving our softwares..</p>
                      <p><a class="btn btn-primary btn-lg" role="button" href="#">Report Bug/ Leave Comment.</a></p>
                  </div>
              </div>
          </div>
      </div>

      </div><!-- /.container-fluid -->
    </div>

    <div class="content custom_css_content_styles ">
      <div class="container-fluid " >
    <div class="projects-horizontal " style="background-color:rgb(197, 197, 197);border-radius:2%;">
      <div class="container ">
          <div class="intro">
              <h2 class="text-center">What Counts As A Bug??<br /></h2>
              <p class="text-center" style="color:rgb(0,0,0);">A<strong>software bug</strong>is an error, flaw or fault in a computer System or System that causes it to produce an incorrect or unexpected result, or to behave in unintended ways<br /></p>
          </div>
          <div class="row projects">
              <div class="col-sm-6 item">
                  <div class="row">
                      <div class="col-md-12 col-lg-5"><a href="#"><img src="studioTemplates/assets/img/index.png" class="img-fluid" /></a></div>
                      <div class="col">
                          <h3 class="name">Error handling Bugs<br /></h3>
                          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 item">
                  <div class="row">
                      <div class="col-md-12 col-lg-5"><a href="#"><img src="studioTemplates/assets/img/index.png" class="img-fluid" /></a></div>
                      <div class="col">
                          <h3 class="name">Syntactic errors<br /></h3>
                          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 item">
                  <div class="row">
                      <div class="col-md-12 col-lg-5"><a href="#"><img src="studioTemplates/assets/img/pexels-photo-1329295.jpeg" class="img-fluid" /></a></div>
                      <div class="col">
                          <h3 class="name">Boundary related errors<br /></h3>
                          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                      </div>
                  </div>
              </div>
              <div class="col-sm-6 item">
                  <div class="row">
                      <div class="col-md-12 col-lg-5"><a href="#"><img src="studioTemplates/assets/img/pexels-photo-1329295.jpeg" class="img-fluid" /></a></div>
                      <div class="col">
                          <h3 class="name">Incorrect calculations<br /></h3>
                          <p class="description">Aenean tortor est, vulputate quis leo in, vehicula rhoncus lacus. Praesent aliquam in tellus eu gravida.</p>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
      </div>
    </div>

    <div class="content custom_css_content_styles"  >
      <div class="container-fluid">
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
@endsection