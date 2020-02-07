@extends('communito.layouts.home')

@section('request')
<div class="row">
	<div class="col-sm-6">
		<h1>Requests</h1>
	</div>
	
</div>
<div class="row" style="padding-top: 15px;">
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


<div class="row"> <!-- row start -->
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

@endsection