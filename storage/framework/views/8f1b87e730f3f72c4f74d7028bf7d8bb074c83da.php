<?php $__env->startSection('myaccount'); ?>



<div class="row">
	<div class="col-sm-6">
		<div class="row">
			<div class="col-sm-6">
				<?php if($profile['profile_pic']): ?>
		   		<img src="<?php echo e(asset('storage').'/'.$profile['profile_pic']); ?>" width="120px" height="120px" class="rounded-circle">
		   		<?php else: ?>
		   		<img src="<?php echo e(URL::asset('assets/imges/a1.jpg')); ?>" width="120px" height="120px" class="rounded-circle">
		   		<?php endif; ?>


			</div>
			<div class="col-sm-6" style="margin-top: 20px; margin-left: 0px; padding-left: 0px">
				<b><?php echo e($users->fname); ?> <?php echo e($users->sname); ?></b>
				<p style="margin: 0px">Dept : <b><?php echo e($users->dept); ?></b></p>
				<p>Semester : <b><?php echo e($users->sem); ?></b></p>
			</div>
		</div>
		<div class="row" style="margin-top: 20px;margin-bottom: 20px;">
			<div class="col-sm-6" >
				<center>
					<b>
						<?php echo e($postsCount); ?>

					</b>
					<p><a href="#">Posts</a></p>
				</center>
			</div>

			<div class="col-sm-6" >
				<center>
					<b><?php echo e($friends); ?></b>
					<p><a href="<?php echo url('friends'); ?>"> Friends </a></p>
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
<?php if($posts->count()): ?>
<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<div class="col-sm-4" style="padding: 10px;">
		<div class="panel">
			<div class="panel-body posts">
				<center>
	  				<img src="<?php echo e(asset('storage').'/'.$post->postpic); ?>" class="img-thumbnail">
				</center>
			</div>
		</div>
	</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
    
</div>

 <!-- edit modal -->
                        <div class="modal fade" tabindex="-1" role="dialog" id="profile_modal">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Profile</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             </div>
                          	<form method="post" action="/user/profileUpdate/<?php echo e($users->id); ?>" enctype="multipart/form-data">
                              <div class="modal-body">
                              		<?php echo e(csrf_field()); ?>

                              		
                                    <div class="form-group">
                                        <label >Change profile pic</label>
                                       	<input type="file" name="profile_pic" value="<?php echo e($profile['profile_pic']); ?>" class="form-control profile" >
                                    </div>
                                    
                                     <div class="form-group">
                                        <label >Bio</label>
                                       	<input type="text" name="bio" value="<?php echo e($profile['bio']); ?>"class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Name</label>
                                       	<input type="text" name="fname" value="<?php echo e($users->fname); ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Department</label>
                                       	<input type="text" name="dept"value="<?php echo e($users->dept); ?>" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Semester</label>
                                       	<input type="text" name="sem" value="<?php echo e($users->sem); ?>" class="form-control">
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('communito.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\commu\resources\views/communito/layouts/myaccount.blade.php ENDPATH**/ ?>