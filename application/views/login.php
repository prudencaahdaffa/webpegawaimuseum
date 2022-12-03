<!DOCTYPE html>
<html>
<title>Vredeburg | Dashboard</title>
<link rel="shortcut icon" href="assets/img/logokemdikbud.png">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,100&display=swap" rel="stylesheet">

<head>
    <style type="text/css">
    {
        font-family: 'Open Sans';
        font-size: 100%;
        margin: 0;
        padding: 0;
    }

    body {
        background-image: url(assets/img/benteng.jpg);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        margin: 0;
        height: 100vh;
        width: 100vw;
        font-family: 'Poppins', sans-serif;
    }


    input:focus {
        outline: none;
    }

    form {
        background: white;
        border-radius: 15px;
        padding: 25px;
        padding-top: 18px;
        width: 300px;
        margin: auto;
        margin-top: 30px;
        box-shadow: 0px 15px 30px #40403d;
    }

    h2 {
        text-align: center;
        font-size: 1.0em;
        font-weight: 700;
        color: black;
        margin-bottom: 24px;
    }

    h2:hover {
        font-size: 1.3em;
    }

    input {
        width: 250px;
        background: #c7ccd0;
        border: 0;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 15px;
    }

    ::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: white;
        font-style: italic;
    }

    ::-moz-placeholder {
        /* Firefox 19+ */
        color: white;
        font-style: italic;
    }

    :-ms-input-placeholder {
        /* IE 10+ */
        color: white;
        font-style: italic;
    }

    :-moz-placeholder {
        /* Firefox 18- */
        color: white;
        font-style: italic;
    }

    .btn {
        width: 290px;
        padding: 20px;
        border-radius: 10px;
        border: 0;
        background: #326799;
        font-size: 1.2em;
        color: #fff;
        box-shadow: 0px 3px 0px #0b4072;
        cursor: pointer;
    }

    .btn:active {
        top: 3px;
        box-shadow: none;
        outline: none;
    }
    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <center><img src="assets/img/logokemdikbud.png" style="width: 150px; height: 150px; margin-top: 72px;">
            </center>
            <h1 style="font-size: 18px; text-align: center; color:#fff; margin-top: 14px;">Selamat Datang
                <br>
                Museum Benteng Vredeburg.
            </h1>
        </div>

        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">

            </p>

            <form action="<?php echo base_url('Auth/login'); ?>" method="post">
                <div class="form-group has-feedback">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <!-- <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div> -->
                    <div class="col-xs-offset-8 col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Login</button>
                    </div>
                </div>
            </form>

            <!-- <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
            Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
            Google+</a>
        </div> -->
            <!-- /.social-auth-links -->

            <!-- <a href="#">I forgot my password</a><br>
        <a href="register.html" class="text-center">Register a new membership</a> -->

        </div>
        <!-- /.login-box-body -->
        <div class="error" style="text-align: center;"><?php
                                                        echo show_err_msg($this->session->flashdata('error_msg'));
                                                        ?></div>

    </div>


    <!-- /.login-box -->

    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- Bootstrap 3.3.6 -->
    <script src="<?php echo base_url(); ?>assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <!-- <script src="<?php echo base_url(); ?>assets/plugins/iCheck/icheck.min.js"></script> -->
    <!-- <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
  
  </script> -->
</body>

</html>