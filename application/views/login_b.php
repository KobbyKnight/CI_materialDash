<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url ('assets/img/apple-icon.png')?>">
  <link rel="icon" type="image/png" href="<?php echo base_url ('assets/img/favicon.png')?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="ecs_base_template">
<meta name="author" content="ecs">
  <title><?= 'Login'?></title>

    <!-- Bootstrap core CSS -->
    <script src="<?php echo base_url ('assets/js/core/jquery.min.js')?>"></script>
    <link href="<?php echo base_url ('assets/bootstrap/bootstrap.min.css')?>" rel="stylesheet" />
    <!-- <link href="<?php //echo base_url ('assets/bootstrap/bootstrap.bundle.min.css')?>" rel="stylesheet" /> -->
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url ('assets/css/signin.css')?>" rel="stylesheet" />
  </head>

  <body class="text-center" >
  <div class="box" >
    <?php echo form_open('auth/login',array('class'=>'form-signin'))?>
      <img class="mb-4" src="<?php echo base_url ('assets/img/favicon.png')?>" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="E-mail"  class="sr-only">Email address</label>      
      <input type="email" name = "email" id="Email" class="form-control" placeholder="Email address" required autofocus>
      <hr class="mb-4">
      <label for="Password" class="sr-only">Password</label>
      <input type="password" id="Password" name="password" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" name="remember_me" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" id = "submit" type="submit">Sign in</button>
      <br>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    <?php echo form_close()?>
    </div>
  </body>
  <script>
      $(document).ready(function(){
          var submit = $('#submit');
          var box = $('.box');
          submit.click(function () {
              // box.slideUp("slow");
          });            
          
      });
  </script>
</html>
