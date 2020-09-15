@extends('communito.layouts.home')

@section('friends')
<div class="row">
	<div class="col-sm-6">
		<h1>My Friends</h1>
	</div>
	
</div>

@if( session()->has('msg'))
   	<p class="alert alert-success">{{ session()->get('msg') }}</p>
@endif


<div class="row" style="border-bottom:1px solid #ccc; margin-bottom:15px">
@foreach($friends as $user)
    <div class="col-md-2 pull-left">
        @if(0)
		   	<img src="{{asset('storage').'/'.$user->profile_pic}}" width="80px" height="80px" class="rounded-circle">
		@else
		 	<img src="{{ URL::asset('assets/imges/a1.jpg')}}" width="80px" height="80px" class="rounded-circle">
		@endif

    </div>
    <div class="col-md-7 pull-left" style="margin-top: 10px"	>
        <h3 style="margin:0px;"><a href="{{url('/friendprofile')}}/{{$user->id}}">{{ $user->fname}} {{ $user->sname }}</a></h3>
            <p><b>Department : </b> {{ $user->dept}} </p>
    </div>
    <div class="col-md-3 pull-right" style="margin-top: 25px">
        <p>
            <a href="{{url('/unfriend')}}/{{$user->id}}"  class="btn btn-info btn-sm">Unfriend</a>
        </p>
    </div>
@endforeach

</div>

@endsection