<?php
function auth(){
include_once 'config/real-config.php';
include_once 'config/login/login-func.php';
include 'config/focus.php';
session_start(); // Our custom secure way of starting a PHP session.
  ?>
  <body class="hold-transition login-page">
<div class="login-box" >
  <div class="login-logo">
  <img src = "./dist/africell.png" width="150"><br>
    <a href="../../index2.html"><b>IT Inventory</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <form method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="p">
        <span class="glyphicon glyphicon-lock form-control-feedback" ></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type ="submit" class="btn btn-primary btn-block btn-flat" name="login">Sign In</buttona>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->

    <a href="#">I forgot my password</a><br>
  </div>
  <?php
  include_once 'config/sh-config.php';
  session_start(); // Our custom secure way of starting a PHP session.
  if (isset($_POST['username'], $_POST['p'])) {
      $username = $_POST['username'];
      $password = $_POST['p']; // The hashed password.
      if (login($username, $password, $mysqli) == true) {
          // Login success 
          header('Location: ./pages/dash.php?token=ZGFzaGJvYXJk');
      } else {
          // Login failed 
          $msg = msg_error('Login Failed','Wrong Password or Username. Please Try Again');
          echo  $msg;
      }
  }
?>
  </div>
  <?php
}
  function register(){
    ?>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>School</b>Monitor</a>
  </div>
  <?php
  include_once 'config/focus.php';
  if (isset($_POST['new_institute'])) {
    include 'config/real-config.php';
      $institute_name = $_POST['institution_name'];
      $username = $_POST['username'];
      $password = $_POST['p']; // The hashed password.
      $email = $_POST['email'];
      $phone_no = $_POST['phone'];
      $key = $_POST['key'];
      $password_hash = password_hash($password,PASSWORD_DEFAULT);
      $timestamp = date('H:m:s');
      $instNo = rand(1000,5000);
      $usraccNo = rand(6000,8000);
      if(check_inst($institute_name) == false){
          if(check_serial($key) == true){
              if(new_institution($institute_name,$instNo,$usraccNo,$username, $password_hash, $email, $phone_no,$key,$timestamp,$mysqli) == true){
                msg_success('Operation Successful', 'Please proceed to login');
              }else{
                msg_error('Operation Failed', 'An error occured');
              }
          }else{
               msg_error('Operation Failed', 'Invalid Serial Key');
          }
      }else{
             msg_error('Operation Failed', 'Institute Name Already Exists');
       }
    }
            
?>
  <div class="register-box-body">
    <p class="login-box-msg">Register Institution</p>
    <form method="post">
      <div class="form-group has-feedback">
        <label>Instituion Name</label>
        <input type="text" class="form-control" name ="institution_name" required>
        <span class="fa fa-users form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Username</label>     
        <input type="text" class="form-control" name ="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Password</label>
        <input type="password" class="form-control" name="p" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Re-type Password</label>
        <input type="password" class="form-control" name="rp">
        <span class="glyphicon glyphicon-lock form-control-feedback" required></span>
      </div>
      <div class="form-group has-feedback">
        <label>Email</label>
        <input type="email" class="form-control" name ="email" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Phone No</label>
        <input type="text" class="form-control" name = "phone" required>
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>License Key</label>
        <input type="text" class="form-control" name = "key" required>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" name="new_institute"></button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <a href="<?php echo '?this='.base64_encode('usethistologin')?>" class="text-center">I already have an account</a>
  </div>
  <!-- /.form-box -->
</div>
    <?php
}