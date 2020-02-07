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
    .main{
        margin-top: 30px;

    }
   .back_img{
       
        background-image: url("assets/imges/back_img.jpg");
         background-repeat: no-repeat;
         background-size: cover;

    }
    .btnlogin{
        float: left;
        border-radius:0px;
    }
    .btnsignup{
        float: left;
        border-radius:0px;
    }
    #logo_moto{
        font-weight: bold;
        font-size: 25px;
    }
    .row_btn{
        margin-left: 60px;
        margin-top: 50px;
    }
    .row_logo{
        margin-left:15px; 
    }
    .col_commu{
        margin-top: 15px;
        padding-left:0px;
        margin-left: 0px; 
    }
   
    .col_img img{
       padding-left: 40px; 
 
    }
   
    
</style>



  </head>
<body class="back_img">
<div class="container">


       <div class="container main">
        <div class="row row_logo">
            <div class="col-sm-2 col_img">
                <img src="/imges/logo.png" height="120px">
            </div>
            <div class="col-sm-6 col_commu">
                <h1><b>Communito</b></h1>
                <p id="logo_moto"><i>A Place to know your collagemates</i></p>
            </div>
            <div class="col-sm-4">
                <div class="row row_btn">
                    <div class="col-sm-6 btnlogin">
                        <form class="form" action="{{ url('user/login') }}">
                            <input type="submit" name="login" value="Login" class="form-control btn btn-primary">                  
                        </form>                       
                    </div>

                    <div class="col-sm-6 btnsignup">
                        <form class="form" action="{{ url('user/signup') }}"">
                            <input type="submit" name="signup" value="Signup" class="form-control btn btn-primary">
                        </form>
                    </div>
                </div>  
            </div>
        </div>
    </div>

</div>
</body>
</html>