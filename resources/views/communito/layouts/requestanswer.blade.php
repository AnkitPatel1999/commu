@extends('communito.layouts.home')

@section('requestanswer')
<div class="row">
	<div class="col-sm-6">
		<h1>Requests</h1>
	</div>
	
</div>

@if( session()->has('msg'))
   	<p class="alert alert-success">{{ session()->get('msg') }}</p>
@endif



{{-- <div class="row" style="padding-top: 15px;">
@if($FriendRequest->count())
@foreach($FriendRequest as $user)
	<div class="col-sm-3" style="margin-left: 5px;border:2px solid white;border-radius: 5px;">
		<div class="thumbnail"><center>
			<div>
		    	<img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="rounded-circle">
		    </div>
		    <p style="color: black; font-size: 16px;">{{ $user->fname}} {{ $user->sname }}</p>
		    <p style="color: black; font-size: 16px;">Dept.: Computer</p>

		  

		    <p ><a href="{{ url('/') }}/accept/{{ $user->fname }}/{{ $user->id }}" style="color: white" class="btn btn-success">Conform</a></p>		                
		    <p><a href="{{url('/requestRemove')}}/{{$user->id}}"  class="btn btn-success">Remove</a></p>

		  
		    </center>
		</div>
	</div>
@endforeach
@endif
</div> <!-- row end --> --}}

<div class="row" style="border-bottom:1px solid #ccc; margin-bottom:15px">

@if($alluser->count())
@foreach($alluser as $user)

    <div class="col-md-2 pull-left">
    	@if($user->profile_pic)
        	<img src="{{asset('storage').'/'.$user->profile_pic}}" width="80px" height="80px" class="rounded-circle"/>
        @else
        	<img src="{{URL::asset('assets/imges/logo.png')}}" width="80px" height="80px" class="rounded-circle"/>
        @endif
    </div>
    <div class="col-md-7 pull-left" style="margin-top: 10px"	>
        <h3 style="margin:0px;"><a href="">{{ $user->fname}} {{ $user->sname }}</a></h3>
            <p><b>Department : </b> {{ $user->dept}} </p>
	</div>
    <div class="col-md-3 pull-right" style="margin-top: 25px">
        <p>
            <a href="{{ url('/') }}/accept/{{ $user->fname }}/{{ $user->id }}"  class="btn btn-info btn-sm">Confirm</a>
            <a href="{{url('/requestRemove')}}/{{$user->id}}"  class="btn btn-default btn-sm">Remove</a>
        </p>
    </div>
@endforeach
@endif
</div>



{{-- <div class="row" style="padding-top: 15px;">
	<div class="col-sm-3">
		<div class="thumbnail"><center>
			<div>
		    	<img src="{{URL::asset('assets/imges/logo.png')}}" height="80px" class="img-circle">
		    </div>
		    <p style="color: black; font-size: 16px;">Ankit Patel</p>
		    <p style="color: black; font-size: 16px;">Dept.: Computer</p>
		    <p style="color: black; font-size: 16px;">Sem.: 5th</p>
		    <form>
		    	<input type="submit" name="accept" value="Accept" class="form-control">
		    	<input type="submit" name="delete" value="Delete" class="form-control">
		    </form>
		    </center>
		</div>
	</div>
</div> <!-- row end -->
 
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4">
		<form>
			<input type="submit" name="acceptall" value="Accept all" class="form-control btn btn-primary">
			<input type="submit" name=deleteall" value="Delete all" class="form-control btn btn-primary">

		</form>
	</div>
	<div class="col-sm-4"></div>
</div>
--}}
@endsection