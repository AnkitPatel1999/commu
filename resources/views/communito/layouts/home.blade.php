<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <title>communito.com</title>
    <style type="text/css">
      #img{
        margin-left:  70%;
      }
      .storytop{
        padding-top:28px;

      }
     
      .menutop{

        padding-top: 28px;
        font-size: 20px;
      }
      .logoimg{
        margin-left: 250px;
      }
      .postrow
      {
        margin-top: 10px;
      }
      .menubtn{
        height: 60px;
        font-size: 16px;
        border-radius: 5px;
        border: 3px solid #ffffff;
        background-color: #479761;
        color: #ffffff;

      }
      .panel-heading{
        background-color: #479761;
      }
      i{
        color: #5b4545;
      }
    </style>
   
</head>
<body style="background-image: url({{URL::asset('assets/imges/a1.jpg')}}); font-size: 20px;">
<div class="container" style="color: #ffffff">
 

<div class="row">
  <div class="col-sm-2">
    <div class="row">
      <div class="col-sm-12">
        <h2>Menu</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12 menutop">
        <input type="text" name="search" class="form-control menubtn" placeholder="Search" style="padding: 10px 10px 10px 20px; border: 3px solid; border-radius: 30px; ">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="{!!url('communito/post')!!}" ><button class="form-control menubtn">Home</button></a>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="{!!url('communito/request')!!}" ><button class="form-control menubtn">Request</button></a> 
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="{!!url('communito/chat')!!}" ><button class="form-control menubtn">Chat</button></a> 
      </div>
    </div>
      <div class="row">
      <div class="col-sm-12">
        <a href="{!!url('communito/myaccount')!!}" ><button class="form-control menubtn">My Account</button></a> 
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <a href="{!!url('communito/setting')!!}" ><button class="form-control menubtn">Setting</button></a> 
      </div>
    </div>
  </div> <!-- menu column -->
  <div class="col-sm-8">
    <div class="row">

    @yield('post')
    @yield('request')
    @yield('chat')
    @yield('myaccount')
    @yield('setting')




</div> <!-- row -->
</div><!--  column8 -->

<div class="col-sm-2" >
  @yield('story')
  @yield('optionsetting')
</div>

</div>
</div>
</body>
</html>