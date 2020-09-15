<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <!------ Include the above in your HEAD tag ---------->
<script
  src="https://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

        
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
    <title>communito.com</title>
    <style type="text/css">
      
      .form-inline{
        margin:0% 0% 0% 40%;
      }

      body {
            background-color: #eeeeee;
        }

        .h7 {
            font-size: 0.8rem;
        }

        .gedf-wrapper {
            margin-top: 0.97rem;
        }

        @media (min-width: 992px) {
            .gedf-main {
               /* padding-left: 4rem;
                padding-right: 4rem;*/
            }
            .gedf-card {
                margin-bottom: 2.77rem;
            }
        }

        /**Reset Bootstrap*/
        .dropdown-toggle::after {
            content: none;
            display: none;
        }
        .profile:hover{
          text-decoration: none;
          background-color: #f7f7a9;

        }

        .posts{
          margin-bottom: 10px;
        }


  </style>
   
</head>
<body >
  <nav class="navbar navbar-light bg-white">
        <a href="#" class="navbar-brand"><h3>Communito.in</h3></a>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
         <div class="d-flex justify-content-between align-items-center">
          <a href="<?php echo url('user/profile'); ?>">
            <button class="btn btn-sm align-middle btn-outline-secondary">
              <?php if($profile['profile_pic']): ?>
              <img src="<?php echo e(asset('storage').'/'.$profile['profile_pic']); ?>" width="40px" height="40px" class="rounded-circle">
              <?php else: ?>
               <img src="<?php echo e(URL::asset('assets/imges/a1.jpg')); ?>" width="40px" height="40px" class="rounded-circle">
              <?php endif; ?>
                <b style="font-size: 15px"><?php echo e(Auth::user()->fname); ?> <?php echo e(Auth::user()->sname); ?></b>

            </button>
          </a>
            <a href="<?php echo url('user/setting'); ?>" class="nav-link text-dark font-italic">
                <i class="fa fa-gear mr-3 text-primary fa-fw"></i>
            </a>
          </div>
    </nav>


    <div class="container-fluid gedf-wrapper">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                      <ul class="nav flex-column bg-white mb-0">
                        <li class="nav-item">
                          <a href="<?php echo url('/user/post'); ?>" class="nav-link text-dark font-italic bg-light">
                                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                                    Home
                                </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo url('user/profile'); ?>" class="nav-link text-dark font-italic">
                                    <i class="fa fa-user mr-3 text-primary fa-fw"></i>
                                    Profile
                                </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo url('user/findfriends'); ?>" class="nav-link text-dark font-italic">
                                    <i class="fa fa-users mr-3 text-primary fa-fw"></i>
                                    Find Friends
                                </a>
                        </li>
                        <li class="nav-item">
                          <a href="<?php echo url('request'); ?>" class="nav-link text-dark font-italic">
                                    <i class="fa fa-users mr-3 text-primary fa-fw"></i>
                                    Friend Request(
                                    <?php echo e(App\friendship::where('status',0)->where('user_requested',Auth::user()->id)->count()); ?>

                                    )
                                </a>
                        </li>

                        <li class="nav-item">
                          <a href="<?php echo url('friends'); ?>" class="nav-link text-dark font-italic">
                                    <i class="fa fa-users mr-3 text-primary fa-fw"></i>
                                    Friends
                                </a>
                        </li>

                        <li class="nav-item">
                          <a href="<?php echo url('user/chat'); ?>" class="nav-link text-dark font-italic">
                                    <i class="far fa-comments mr-3 text-primary fa-fw"></i>
                                    Chat
                                </a>
                        </li>
                       
                        <li class="nav-item">
                          <form method="post" action="<?php echo url('/user/logout'); ?>" id="logout-form" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                          </form>
                          <a href="<?php echo url('/user/logout'); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-dark font-italic">
                            <i class="fa fa-sign-out mr-3 text-primary fa-fw"></i>
                            Logout
                          </a>
                          
                        </li>
                      </ul>

                    </div>
                   
                </div>
            </div>

            <div class="col-md-9 gedf-main">
              <div id="posts"></div>
              <div class="col-md-9 gedf-main">
                <?php echo $__env->yieldContent('myaccount'); ?>
                <?php echo $__env->yieldContent('post'); ?>
                <?php echo $__env->yieldContent('request'); ?>
                <?php echo $__env->yieldContent('requestanswer'); ?>
                <?php echo $__env->yieldContent('friends'); ?>
                <?php echo $__env->yieldContent('setting'); ?>
              </div>
                <?php echo $__env->yieldContent('chat'); ?>

            </div>
         
        </div>
  </div>
</body>
</html><?php /**PATH F:\commu\resources\views/communito/layouts/home.blade.php ENDPATH**/ ?>