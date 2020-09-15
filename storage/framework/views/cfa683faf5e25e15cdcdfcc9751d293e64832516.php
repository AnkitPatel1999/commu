<?php $__env->startSection('post'); ?>

                <!--- \\\\\\\Post-->
                <div class="card gedf-card" style="margin-bottom: 5px;">
                    <div class="card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="true">Make a publication</a>
                            </li>
                           
                        </ul>
                    </div>
                  <form id="post" method="post" action="<?php echo e(route('user/post')); ?>" enctype="multipart/form-data">
                  <?php echo e(csrf_field()); ?>

                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                                <div class="form-group">
                                    <textarea class="form-control" name="postdes" id="postdes" rows="3" placeholder="What are you thinking?"></textarea>
                                </div>

                            
                            <div class="tab-pane" >
                                <div class="form-group">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text" id="inputGroupFileAddon01">
                                        <i class="fa fa-file-image-o" aria-hidden="true"> &nbsp</i>
                                        <b style="font-size: 15px">   Photo/Video</b>
                                      </span>
                                    </div>
                                    <div class="custom-file">
                                      <input type="file" name="postpic" id="postpic" class="custom-file-input">
                                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                  </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="btn-toolbar justify-content-between">
                            <div class="btn-group">
                                <button type="submit" class="btn btn-primary newpost">Post</button>
                            </div>
                            <div class="btn-group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="fa fa-globe"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="btnGroupDrop1">
                                    <a class="dropdown-item" href="#"><i class="fa fa-globe"></i> Public</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-users"></i> Friends</a>
                                    <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Just me</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                <!-- Post /////-->
            <?php echo $__env->make('communito.includes.message_block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--- \\\\\\\Post-->
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="posts">
                <div class="card gedf-card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <?php if(0): ?>
                                    <img src="<?php echo e(asset('storage').'/'.$posts->profile_pic); ?>" width="45" height="45" class="rounded-circle">
                                    <?php else: ?>
                                    <img src="<?php echo e(URL::asset('assets/imges/a1.jpg')); ?>" width="45" height="45" class="rounded-circle">
                                    <?php endif; ?>
                                    
                                </div>
                                <div class="ml-2">
                                     
                                      <div class="h5 m-0"><?php echo e($post->user->fname); ?> <?php echo e($post->user->sname); ?></div>
                                  <div class="h7 text-muted">Ahmedabad,India</div>
                                </div>
                            </div>
                            <div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right config" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                    <?php if(Auth::user()): ?>
                                        <a class="dropdown-item edit" href="#">Edit</a>
                                        <a class="dropdown-item" href="<?php echo e(route('delete',['post_id'=>$post->id])); ?>">Delete</a>
                                    <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"> </i> <?php echo e($post->created_at); ?></div>
                        <div class="pic">
                            <center>
                            <img src="<?php echo e(asset('storage').'/'.$post->postpic); ?>" style="width: 400px" height="400px"">
                            </center>
                        </div>

                        <p class="card-text">
                           <?php echo e($post->postdes); ?>

                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="<?php echo e(url('/like')); ?>/<?php echo e($post->id); ?>" class="card-link"><i class="fa fa-gittip"></i> Like</a>
                       
                        <a href="#" class="card-link"><i class="fa fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="fa fa-mail-forward"></i> Share</a>
                    </div>
                </div>
            </article>
                        <!-- edit modal -->
                        <div class="modal fade" tabindex="-1" role="dialog" id="edit_modal">
                          <div class="modal-dialog" role="document">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h4 class="modal-title">Edit Post</h4>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                             </div>
                              <div class="modal-body">
                                    <div class="form-group">
                                        <label >Edit the post</label>
                                        <textarea class="form-control" name="postdes" rows="4" ></textarea>
                                    </div>
                                </form>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" id="modal_save">Save changes</button>
                              </div>
                            </div><!-- /.modal-content -->
                          </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <script type="text/javascript">
                            var token = '<?php echo e(Session::token()); ?>';
                            var urlEdit = '<?php echo e(route('user/edit')); ?>';
                            var urlLike = '<?php echo e(route('user/like')); ?>';
                        </script>
                          
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->

 <script type="text/javascript">

 /*new post*/    
    
    /*$('.newpost').click(function(event) {
            event.preventDefault();

            var postdes = $('#postdes').val();
            //var postpic = $('#postpic').val();
            var postpic = $('#postpic').val();
            var postpic = postpic.replace(/^C:\\fakepath\\/, "");
            

       $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });     

        $.ajax({
            method: 'POST',
            url: "",
            data: {postdes:postdes,postpic:postpic},
        })
        .done(function(response) {
             alert(response.message);
             window.location = '';
        })
        .fail(function() {
            console.log("error");
        })
        .always(function() {
            console.log("complete");
        });
        });
        
        

    });


*/
 /*end new post*/





    var post_id=0;
    var postBodyElement = null;

    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });

    $('.posts').find('.config').find('.edit').on('click',function(event){
            event.preventDefault();
            postBodyElement = $(this).closest('.posts').find('p:eq(0)');
            var postdes = postBodyElement.text();
            post_id = $(this).closest('.posts').data('post_id');
            $('#post-body').val(postdes);
            $('#edit_modal').modal();
    });

  /*$('#modal_save').on('click', function () {
    $.ajax({
            method: 'POST',
            url: url,
            data: {body: $('#post-body').val(), post_id: post_id, _token: token}
        })
        .done(function (msg) {
            $(postBodyElement).text(msg['new_body']);
            $('#edit_modal').modal('hide');
        });
});
*/

    $('.like').on('click', function(event){
        event.preventDefault();
        post_id = $(this).closest('.posts').data('post_id');
        var isLike = event.target.previousElementSibling == null;
        
        $.ajax({
            url: urlLike,
            method:'POST',
            data: { isLike: isLike, post_id: post_id , _token:token},
            cache:false,
            success:function(data) {
                console.log(data);
            },
            error:function() {
                console.log("error");
            }
        });
      
        

    });

  </script>                                    





<?php $__env->stopSection(); ?>



<?php echo $__env->make('communito.layouts.home', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\commu\resources\views/communito/layouts/post.blade.php ENDPATH**/ ?>