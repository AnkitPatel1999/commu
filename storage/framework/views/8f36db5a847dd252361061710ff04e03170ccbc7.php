<?php $__env->startSection('request'); ?>
<div class="row">
	<div class="col-sm-12">
		<h1>Find Your Collage mate</h1>
	</div>
	
</div>


<div class="row" style="padding-top: 15px;">
<?php if($alluser->count()): ?>
<?php $__currentLoopData = $alluser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-sm-3" style="margin-left: 5px;border:2px solid white;border-radius: 5px;">
		<div class="thumbnail"><center>
			<div>
				<?php if($user->profile_pic): ?>
		        	<img src="<?php echo e(asset('storage').'/'.$user->profile_pic); ?>" width="80px" height="80px" class="rounded-circle"/>
		        <?php else: ?>
		        	<img src="<?php echo e(URL::asset('assets/imges/logo.png')); ?>" width="80px" height="80px" class="rounded-circle"/>
		        <?php endif; ?>
		    	
		    </div>
		    <p style="color: black; font-size: 16px;"><?php echo e($user->fname); ?> <?php echo e($user->sname); ?></p>
		    <p style="color: black; font-size: 16px;">Dept.: Computer</p>
		    <?php
		    	$check  = DB::table('friendships')
		    	->where('user_requested','=',$user->id)
		    	->where('requester','=',Auth::user()->id)
		    	->first();
		    

		    if($check==''){
		   	?>
		    <p ><a href="<?php echo e(url('/')); ?>/addFriend/<?php echo e($user->id); ?>" style="color: white" class="btn btn-success">Add to Friend</a></p>
		    <?php }
		    	else{?>
		    	<p>Request already sent</p>
		    <?php	} ?>
		    </center>
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div> <!-- row end -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('communito.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\commu\resources\views/communito/layouts/request.blade.php ENDPATH**/ ?>