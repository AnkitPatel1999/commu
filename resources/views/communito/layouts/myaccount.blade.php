@extends('communito.layouts.home')
@section('myaccount')


<div class="row">
	<div class="col-sm-6">
		<h1>My Account</h1>
	</div>
	<div class="col-sm-6">
	    <img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="img-circle logoimg">
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-6">
	    		<img src="{{URL::asset('assets/imges/logo.png')}}" height="150px" class="img-circle">
			</div>
			<div class="col-sm-6">
				<p>Ankit patel</p>
				<p>Computer</p>
				<p>Semester: 5th</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<center>
					<p>250</p>
					<p>Communitors</p>
				</center>
			</div>
		</div>
	</div>

	<div class="col-sm-6">
		<h3>Bio</h3>
			<p>Hi! My name is John.I’m a creative
			geek from San Francisco, CA.
			I enjoy creating eye candy
			solutions for web and mobile apps.
			Contact me at john@mail.com</p>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<center><h2>My Posts</h2></center>
	</div>
</div>

<div class="row">
	<div class="col-sm-4">
		<div class="panel">
			<div class="panel-body">
				<center>
	  				<img src="{{URL::asset('assets/imges/logo.png')}}" height="150px" class="">
				</center>
			</div>
			<div class="panel-footer">
				<div class="row">
		            <div class="col-sm-4">
		                <center>
		            	    <i class="fa fa-heart fa-1x">120</i>
		                </center>           
		            </div>
		            <div class="col-sm-4">
		                <center>
		                  <i class="fa fa-comment-alt fa-1x">5</i>          
		                </center>
		            </div>
		            <div class="col-sm-4">
		                <center>
		                  <i class="fa fa-share fa-1x">2</i>
		                </center>
		            </div>
            	</div>
			</div>
		</div>
	</div>



		<div class="col-sm-4">
		<div class="panel">
			<div class="panel-body">
				<center>
	  				<img src="{{URL::asset('assets/imges/logo.png')}}" height="150px" class="">
				</center>
			</div>
			<div class="panel-footer">
				<div class="row">
		            <div class="col-sm-4">
		                <center>
		            	    <i class="fa fa-heart fa-1x">120</i>
		                </center>           
		            </div>
		            <div class="col-sm-4">
		                <center>
		                  <i class="fa fa-comment-alt fa-1x">5</i>          
		                </center>
		            </div>
		            <div class="col-sm-4">
		                <center>
		                  <i class="fa fa-share fa-1x">2</i>
		                </center>
		            </div>
            	</div>
			</div>
		</div>
	</div>


		<div class="col-sm-4">
		<div class="panel">
			<div class="panel-body">
				<center>
	  				<img src="{{URL::asset('assets/imges/logo.png')}}" height="150px" class="">
				</center>
			</div>
			<div class="panel-footer">
				<div class="row">
		            <div class="col-sm-4">
		                <center>
		            	    <i class="fa fa-heart fa-1x">120</i>
		                </center>           
		            </div>
		            <div class="col-sm-4">
		                <center>
		                  <i class="fa fa-comment-alt fa-1x">5</i>          
		                </center>
		            </div>
		            <div class="col-sm-4">
		                <center>
		                  <i class="fa fa-share fa-1x">2</i>
		                </center>
		            </div>
            	</div>
			</div>
		</div>
	</div>
</div>


@endsection>