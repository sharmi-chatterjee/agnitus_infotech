<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    $path = base_url('assets/');
  ?>


  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo $path;?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path;?>dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>Login</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>



      <?php 
          $csrf = array(
                  'name' => $this->security->get_csrf_token_name(),
                  'hash' => $this->security->get_csrf_hash()
          );
      ?>


      <form action="<?php echo base_url('login'); ?>" method="POST" id="admin_login_form">
        <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
        <input type="hidden" name="action" value="login">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="data[username]" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="data[password]" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <!-- <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div> -->
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      

    
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo $path;?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo $path;?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $path;?>dist/js/adminlte.min.js"></script>


 <!--sweetalert2-->
    <script src="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.js'); ?>"></script>
    <link  href="<?php echo base_url('assets/plugins/sweetalert2/sweetalert2.min.css'); ?>" rel="stylesheet">
    <?php /*<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script> */?>
    <?php $this->load->view('include/sweetalert2_msg'); ?>


    <script>
        $( document ).ready(function() {
            call_message();
        });
    </script>   


</body>
</html>




<script>
$().ready(function(){
 
$("#admin_login_form").validate({
  // in 'rules' user have to specify all the constraints for respective fields
rules : {
password : {
required : true,
},
email : {
required : true,
email : true
},

},
    // in 'messages' user have to specify message as per rules
messages : {
password : {
required : "Please enter a password",
},
email : {
required : "Please enter a email",
email : "Please enter valid email"
},
agree : "Please accept our policy"
}
});
});
 
</script>