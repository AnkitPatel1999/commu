<!-- @if(count($errors)>0)
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<ul>
				
			</ul>
		</div>
	</div>
@endif -->

@if(Session::has('message'))
	<div class="row" style="margin:0px;padding: 0px;">
		<div class="col-md-12 successMessage" style="margin:0px;padding: 0px;font-size: 20px;font-weight: bold; background-color:#f7f7a9">
			<center>{{Session::get('message')}}</center>
		</div>

	</div>
@endif

@if(Session::has('deleteMessage'))
	<div class="row" style="margin:0px;padding: 0px;">
		<div class="col-md-12 successMessage" style="margin:0px;padding: 0px;font-size: 20px;font-weight: bold; background-color:#f7f7a9;">
			<center>{{Session::get('deleteMessage')}}</center>
		</div>

	</div>
@endif

<script type="text/javascript">
	$(document).ready(function(){
		setTimeout(function(){
		$('.successMessage').remove();
		},6000);
	});
</script>
