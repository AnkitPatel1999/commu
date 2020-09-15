@extends('communito.layouts.home')

@section('myaccount')

{{-- <div class="row">
	<div class="col-sm-6">
		<h1>My Account</h1>
	</div>
	
</div> --}}

<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-6">
				@if($profile['profile_pic'])
		   		<img src="{{asset('storage').'/'.$profile['profile_pic']}}" width="120px" height="120px" class="rounded-circle">
		   		@else
		   		<img src="{{ URL::asset('assets/imges/a1.jpg')}}" width="120px" height="120px" class="rounded-circle">
		   		@endif


			</div>
			<div class="col-sm-6" style="margin-top: 20px; margin-left: 0px; padding-left: 0px">
				<b>{{$users->fname }} {{ $users->sname}}</b>
				<p style="margin: 0px">Dept : <b>{{$users->dept}}</b></p>
				<p>Semester : <b>{{$users->sem}}</b></p>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
			<div class="col-sm-6" >
				<center>
					<b>
						{{ $postsCount }}
					</b>
					<p><a href="#">Posts</a></p>
				</center>
			</div>

			<div class="col-sm-6" >
				<center>
					<b>{{ $friends}}</b>
					<p><a href="{!!url('friends')!!}"> Friends </a></p>
				</center>
			</div>
		</div>
	</div>

	<div class="col-sm-6">
		<h5>Bio</h5>
			<p>Hi! My name is John.I’m a creative
			geek from San Francisco, CA.
			I enjoy creating eye candy
			solutions for web and mobile apps.
			Contact me at john@mail.com</p>
	</div>
</div>

<div class="row">
	<div class="col-sm-12">
		<button type="button" class="form-control btn btn-dark profile_edit" style="background-color: white; color:black">Edit</button>
	</div>
</div>




<div class="row">
	<div class="col-sm-12">
		<center><h2>My Posts</h2></center>
	</div>
</div>

<div class="row" >
@if($posts->count())
@foreach($posts as $post)
	<div class="col-sm-4" style="padding: 10px;">
		<div class="panel">
			<div class="panel-body posts">
				<center>
	  				<img src="{{asset('storage').'/'.$post->postpic}}" class="img-thumbnail">
				</center>
			</div>
		</div>
	</div>
@endforeach
@endif
    
</div>

 <!-- edit modal -->
                        <div class="modal fade" tabindex="-1" role="dialog" id="profile_modal">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Profile</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             </div>
                          	<form method="post" action="/user/profileUpdate/{{ $users->id }}" enctype="multipart/form-data">
                              <div class="modal-body">
                              		{{ csrf_field() }}
                              		
                                    <div class="form-group">
                                        <label >Change profile pic</label>
                                       	<input type="file" name="profile_pic" value="{{ $profile['profile_pic']}}" class="form-control profile" >
                                    </div>
                                    
                                     <div class="form-group">
                                        <label >Bio</label>
                                       	<input type="text" name="bio" value="{{ $profile['bio']}}"class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Name</label>
                                       	<input type="text" name="fname" value="{{ $users->fname }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Department</label>
                                       	<input type="text" name="dept"value="{{ $users->dept }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Semester</label>
                                       	<input type="text" name="sem" value="{{ $users->sem }}" class="form-control">
                                    </div>
                               
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                               <input type="submit" name="submit" value="Save Changes" class="form-control">
                              </div>
                               </form>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
<script type="text/javascript">
    $('.profile_edit').on('click',function(event){
        event.preventDefault();
        $('#profile_modal').modal();
    });

    $(".profile").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
    });
</script>
@endsection
