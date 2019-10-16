@extends('communito.layouts.home')
@section('chat')

<div class="row">
	<div class="col-sm-6">
		<h1>Recent Chat</h1>
	</div>
	<div class="col-sm-6">
	    <img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="img-circle logoimg">
	</div>
</div>

<div class="row" style="padding-top: 15px;">
	<div class="col-sm-3">
	    <center><img src="{{URL::asset('assets/imges/logo.png')}}" height="110px" class="img-circle"></center>
	</div>

	<div class="col-sm-3">
	    <center><img src="{{URL::asset('assets/imges/logo.png')}}" height="110px" class="img-circle"></center>
	</div>

	<div class="col-sm-3">
	    <center><img src="{{URL::asset('assets/imges/logo.png')}}" height="110px" class="img-circle"></center>
	</div>

	<div class="col-sm-3">
	    <center><img src="{{URL::asset('assets/imges/logo.png')}}" height="110px" class="img-circle"></center>
	</div>
</div>

<div class="row" style="color: black; padding-top: 20px; margin: 10px;">
<div class="panel">
	<div class="panel-body">
	<div class="col-sm-3">
		<center><img src="{{URL::asset('assets/imges/logo.png')}}" height="110px" class="img-circle"></center>
	</div>
	<div class="col-sm-6">
		<p>Ankit Patel</p>
		<p>3 new messages</p>
	</div>
	<div class="col-sm-3">
		<p>3 hr</p>
	</div>
</div>
</div>
</div>



<div class="row" style="color: black; margin: 10px;">
<div class="panel">
	<div class="panel-body">
	<div class="col-sm-3">
		<center><img src="{{URL::asset('assets/imges/logo.png')}}" height="110px" class="img-circle"></center>
	</div>
	<div class="col-sm-6">
		<p>Tarang Dave</p>
		<p>50 new messages</p>
	</div>
	<div class="col-sm-3">
		<p>1 minite ago</p>
	</div>
</div>
</div>
</div>


@endsection