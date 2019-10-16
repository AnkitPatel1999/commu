<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <title>communito.com</title>
    <style type="text/css">
       .top{
        height: 500px;
        width: 400px;
        border:3px solid;
        border-radius: 20px;
        padding:40px;
        margin-top:80px; 
       }
       .loginbtn{
        margin-top: 30px;
       }
       .lbl{
        margin-top: 25px;
       }
    </style>
</head>
<body background="{{URL::asset('assets/imges/back.jpg')}}" style=" background-repeat: no-repeat;background-size: cover; ">
<div class="container">
    <div class="row">
        <div class="col-sm-7">
            
        </div>
        <div class="col-sm-4 top">
            <form>
                <center><h1>Login</h1></center>
                <label class="lbl">Username</label>
                <input type="text" name="uname" class="form-control">
                <label>Password</label>
                <input type="text" name="password" class="form-control">
                <center><input type="submit" name="login" value="Login" class="form-control btn btn-primary loginbtn" ></center>

            </form>
        </div>
    </div>
</div>

</body>
</html>