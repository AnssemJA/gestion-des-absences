<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Connexion</div>
      <div class="card-body">
      <?php 
          if(@$_GET['Empty']==true)
          {
      ?>
          <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
      <?php
          }
      ?>


      <?php 
          if(@$_GET['Invalid']==true)
           {
      ?>
          <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
      <?php
          }
      ?>

        <form action="process.php" method="post">
          <div class="form-group">
            <div class="form-label-group">
            <div class="card-header">Adresse Email</div>
              <input type="email" name="UName" placeholder="Email address" class="form-control"  required="">
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
            <div class="card-header">Mot de passe</div>
              <input type="password" name="Password" placeholder="Password"  class="form-control" required="">
            </div>
          </div>
          
          <button class="btn btn-primary btn-block" name="Login">Connexion</button>
        </form>
        <div class="text-center">
          <a class="d-block small mt-3" href="register.html">Enregistrer un compte</a>
          <a class="d-block small" href="forgot-password.html">Mot de passe oublié?</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
