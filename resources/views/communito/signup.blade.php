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
        height: 550px;      
        border:3px solid;
        border-radius: 20px;
        padding:15px 40px 40px 40px;
        margin-top:80px; 
       }
       .loginbtn{
        margin-top: 30px;
       }
       .row_fname{
        padding-top:8px; 
       }
    </style>
</head>
<body background="{{URL::asset('assets/imges/back.jpg')}}" style=" background-repeat: no-repeat;background-size: cover; ">
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            
        </div>
        <div class="col-sm-6 top">
            <form class="form" action="www.google.com" method="POST">
                <h1><center>Sign up</center></h1>
                <form class="form-group">
                  <div class="row row_fname">
                    <div class="col-sm-6">
                      <input type="text" name="fname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="col-sm-6">
                      <input type="text" name="sname" class="form-control" placeholder="Surname">
                    </div>
                  </div>
                </form>
              <form class="form-group">
                <label style="margin: 8px 0px 0px 0px; padding: 0px;">Birth Day</label>
                <input type="date" name="bday" class="form-control">
              </form>
              <form class="form-group">
                <select name="profession" class="form-control">
                  <option>Profession</option>
                  <option>HaCkeR</option>
                </select>
              </form>
              <form class="form-group">
                <div class="row">
                  <div class="col-sm-6">
                    <select name="dept" class="form-control">
                      <option>Department</option>
                      <option>Computer</option>
                    </select>
                  </div>
                  <div class="col-sm-6">
                    <select name="sem" class="form-control">
                      <option>Semester</option>
                      <option>5th</option>
                    </select>
                  </div>
                </div>
              </form>
              <form class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control">
              </form>

                <input type="text" name="password" class="form-control" placeholder="Password">
                <form class="form-group">
                <center><input type="submit"  value="Sign up" class="form-control btn btn-primary loginbtn"></center>
                </form>


            </form>
        </div>
    </div>
</div>

</body>
</html>