<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin Login </title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url();?>assets/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url();?>assets/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url();?>assets/backend/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url();?>assets/backend/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              
              
            <h4 style="color:red;">
                <?php
                $message=$this->session->userdata('message');
                if($message)
                {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
                ?>
            </h4>
              
              <!--<img src="" class="img-thumbnail" height="100px" width="100px">-->
              
              <form method="post" action="<?php echo base_url();?>user/user_login_check">
                  
              <h1>Admin User Login</h1>
              <div>
                <input type="text" name="user_email" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                  <a><button class="btn btn-default submit" type="submit">Sign in</button></a>
                
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1> smmarineservice.com</h1>
                  <p>Developed By - Muktodhara Technology Ltd.</p>
                </div>
              </div>
            </form>
           
              
          </section>
        </div>

        
      </div>
    </div>
  </body>
</html>
