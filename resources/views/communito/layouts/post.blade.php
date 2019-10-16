@extends('communito.layouts.home')
@section('post')
    
      <div class="col-sm-6"><!--  colsm6 start -->
        <div class="row">
          <div class="col-sm-12">
            <img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="img-circle">
          </div>
        </div>
        
         <div class="row postrow"> <!-- post row start -->
          <div class="col-sm-12">
            <div class="panel">
              <div class="panel-heading">
                <img src="{{URL::asset('assets/imges/logo.png')}}" class="img-circle" style="height: 60px;">
                Ankit Patel
              </div>
              <div class="panel-body">
                <center>
                  <img src="{{URL::asset('assets/imges/logo.png')}}" class="thumbnail" style="height: 200px;width: 200px">
                </center>
              </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-sm-4">
                <center>
                  <i class="fa fa-heart fa-2x"></i>
                </center>           
              </div>
              <div class="col-sm-4">
                <center>
                  <i class="fa fa-comment-alt fa-2x"></i>          
                </center>
              </div>
              <div class="col-sm-4">
                <center>
                  <i class="fa fa-share fa-2x"></i>
                </center>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div> <!-- post row end -->
       

</div> <!-- col-sm-6 end-->



<div class="col-sm-6"><!--  colsm6 start -->
        <div class="row">
          <div class="col-sm-12">
            <img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="img-circle logoimg" >
          </div>
        </div>
        
         <div class="row postrow"> <!-- post row start -->
          <div class="col-sm-12">
            <div class="panel">
              <div class="panel-heading">
                <img src="{{URL::asset('assets/imges/logo.png')}}" class="img-circle" style="height: 60px;">
                Ankit Patel
              </div>
              <div class="panel-body">
                <center>
                  <img src="{{URL::asset('assets/imges/logo.png')}}" class="thumbnail" style="height: 200px;width: 200px">
                </center>
              </div>
          <div class="panel-footer">
            <div class="row">
              <div class="col-sm-4">
                <center>
                  <i class="fa fa-heart fa-2x" ></i>
                </center>           
              </div>
              <div class="col-sm-4">
                <center>
                  <i class="fa fa-comment-alt fa-2x"></i>          
                </center>
              </div>
              <div class="col-sm-4">
                <center>
                  <i class="fa fa-share fa-2x"></i>
                </center>
              </div>
            </div>
          </div>
          </div>
          </div>
        </div> <!-- post row end -->
       

</div> <!-- col-sm-6 end-->


@endsection

@section('story')



    <div class="row">
      <div class="col-sm-12">
        <h2>Story</h2>
      </div>
    </div>
    <div class="row">

      <div class="col-sm-12 storytop">
        <img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="img-circle ">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 storytop">
        <img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="img-circle ">
      </div>
    </div>
    <div class="row">
    <div class="col-sm-12 storytop">
      <img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="img-circle ">
      </div>
    </div>
  

@endsection