<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>ATI | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/adminPanel/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/adminPanel/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/adminPanel/plugins/iCheck/square/blue.css">

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
    <a href="/admin">Above the Ish</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
      <?php echo $this->Session->flash(); ?>
    <p class="login-box-msg">Sign in to your account</p>
<div style="max-width: 300px; margin: 0 auto; height: 52px;">
	<?php if (isset($failedLogin)): ?><div class="alert alert-danger"><strong>Invalid email/password combination.</strong></div><?php endif; ?>
</div>
    <form action="/admin/users/login" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="data[User][username]" class="form-control" placeholder="Username" autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="data[User][password]" class="form-control" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
     <div class="row">
  <!--       <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" value="remember-me"> Remember Me
            </label>
          </div>
        </div>
	
         -->
        <div class="col-xs-8">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
        </div>
         
      </div>
    </form>
	

<!--    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>-->
    <!-- /.social-auth-links -->
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
    <!--<a href="/users/forgotPassword">I forgot my password</a><br>-->
<!--    <a href="register.html" class="text-center">Register a new membership</a>-->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
  <!--<div class="login-logo">
  <style> b, strong {color:#dd4b39;} </style>
    <a href="/pages/contactus">If you do not already have an account please <b>contact us</b> to get one!</a>
	<br>
	Phone: 410-525-3400

  </div>-->

<!-- jQuery 2.2.0 -->
<script src="/adminMenu/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/adminMenu/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="/adminMenu/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>