<?php $__env->startSection('requestanswer'); ?>
<div class="row">
	<div class="col-sm-6">
		<h1>Requests</h1>
	</div>
	
</div>

<?php if( session()->has('msg')): ?>
   	<p class="alert alert-success"><?php echo e(session()->get('msg')); ?></p>
<?php endif; ?>





<div class="row" style="border-bottom:1px solid #ccc; margin-bottom:15px">

<?php if($alluser->count()): ?>
<?php $__currentLoopData = $alluser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <div class="col-md-2 pull-left">
    	<?php if($user->profile_pic): ?>
        	<img src="<?php echo e(asset('storage').'/'.$user->profile_pic); ?>" width="80px" height="80px" class="rounded-circle"/>
        <?php else: ?>
        	<img src="<?php echo e(URL::asset('assets/imges/logo.png')); ?>" width="80px" height="80px" class="rounded-circle"/>
        <?php endif; ?>
    </div>
    <div class="col-md-7 pull-left" style="margin-top: 10px"	>
        <h3 style="margin:0px;"><a href=""><?php echo e($user->fname); ?> <?php echo e($user->sname); ?></a></h3>
            <p><b>Department : </b> <?php echo e($user->dept); ?> </p>
	</div>
    <div class="col-md-3 pull-right" style="margin-top: 25px">
        <p>
            <a href="<?php echo e(url('/')); ?>/accept/<?php echo e($user->fname); ?>/<?php echo e($user->id); ?>"  class="btn btn-info btn-sm">Confirm</a>
            <a href="<?php echo e(url('/requestRemove')); ?>/<?php echo e($user->id); ?>"  class="btn btn-default btn-sm">Remove</a>
        </p>
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
</div>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('communito.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\commu\resources\views/communito/layouts/requestanswer.blade.php ENDPATH**/ ?>