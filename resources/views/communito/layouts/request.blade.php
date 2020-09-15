@extends('communito.layouts.home')

@section('request')
<div class="row">
	<div class="col-sm-12">
		<h1>Find Your Collage mate</h1>
	</div>
	
</div>


<div class="row" style="padding-top: 15px;">
@if($alluser->count())
@foreach($alluser as $user)
	<div class="col-sm-3" style="margin-left: 5px;border:2px solid white;border-radius: 5px;">
		<div class="thumbnail"><center>
			<div>
				@if($user->profile_pic)
		        	<img src="{{asset('storage').'/'.$user->profile_pic}}" width="80px" height="80px" class="rounded-circle"/>
		        @else
		        	<img src="{{URL::asset('assets/imges/logo.png')}}" width="80px" height="80px" class="rounded-circle"/>
		        @endif
		    	
		    </div>
		    <p style="color: black; font-size: 16px;">{{ $user->fname}} {{ $user->sname }}</p>
		    <p style="color: black; font-size: 16px;">Dept.: Computer</p>
		    <?php
		    	$check  = DB::table('friendships')
		    	->where('user_requested','=',$user->id)
		    	->where('requester','=',Auth::user()->id)
		    	->first();
		    

		    if($check==''){
		   	?>
		    <p ><a href="{{ url('/') }}/addFriend/{{ $user->id }}" style="color: white" class="btn btn-success">Add to Friend</a></p>
		    <?php }
		    	else{?>
		    	<p>Request already sent</p>
		    <?php	} ?>
		    </center>
		</div>
	</div>
@endforeach
@endif
</div> <!-- row end -->


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