<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Editer le absenceN°<?= $_GET['id_absence'] ?></title>
    <!-- Custom fonts for this template-->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Page level plugin CSS-->
<link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="css/sb-admin.css" rel="stylesheet">
</head>

<body id="page-top">
<?php
        include './classes/gestion_absence.class.php';
        $gestion_absence = new Gestion_absence;
        if (!empty($_POST)) {
            $gestion_absence->updateEtatAbsence($_POST['id'],$_POST['etat_absence']);
            header('Location:charts.php?notif=update');
            exit();
        } else {
            $showGestion_absences = $gestion_absence->showOneGestion_absences($_GET['id']);
            $data = $showGestion_absences->fetch();
        }
    ?>
<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <a class="navbar-brand mr-1" href="index.php"><img src="image/Logo entier DA&S - orange sur fond blanc.png" width="200"></a>

  <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <!-- Navbar Search -->
  <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    <div class="input-group">
      <input type="text" class="form-control" placeholder="La recherche de..." aria-label="Search" aria-describedby="basic-addon2">
      <div class="input-group-append">
        <button class="btn btn-primary" type="button">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>
   <!-- Navbar -->
   <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <span class="badge badge-danger">9+</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Un autre action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-envelope fa-fw"></i>
          <span class="badge badge-danger">7</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="messagesDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Un autre action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Quelque chose d'autre ici</a>
        </div>
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">se déconnecter</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Login :</h6>
          <a class="dropdown-item" href="login.php">Déconnexion</a>
          <a class="dropdown-item" href="register.html">Crier un compte</a>
          <a class="dropdown-item" href="forgot-password.html">Mot de passe obliée</a>
          <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">autres Pages:</h6>
          <a class="dropdown-item" href="table.html">table</a>
          <a class="dropdown-item" href="form.html">formulaire</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="archiver.php">
        <i class='fa fa-save'></i>
          <span>Archive</span></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="imprimer.php">
        <i class='fa fa-search'></i>
          <span>rechercher</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="create.php">
        <i class='far fa-edit' ></i>
          <span>Formulaire</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">modified</li>
      </ol>


      <center><h2> Editer l'absence N°<?= $_GET['id'] ?></h2></center>
    <div class="container py-3 p-3 my-3 border">
        
        <fieldset>
            <form action="" method="post">
                <input type="hidden" value="<?= $data['id'] ?>" name="id">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="etat"><b>etat:</b></label>
                            <input type="number" value="<?= $data['etat_absence'] ?>" required name="etat_absence" class="form-control">
                        </div>
                    </div>
                </div>
                   
                <div class="row">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Enregistrer</button>
                    </div>
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-danger">Annuler</button>
                    </div>
                </div>
            </form>
        </fieldset>
    </div>
 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

   <!-- Logout Modal-->
   <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Déconnection</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Choisir "se déconnecter" si tu veux sortir!!</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
          <a class="btn btn-primary" href="login.php">se déconnecter</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <!--<script src="js/sb-admin.min.js"></script>-->

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>
</html>