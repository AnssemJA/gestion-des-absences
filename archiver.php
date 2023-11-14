<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>imprimer</title>
  
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

</head>

<body id="page-top">

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
      <li class="nav-item active">
        <a class="nav-link" href="archiver.php">
        <i class='fa fa-save'></i>
          <span>Archive</span></a>
      </li>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="imprimer.php">
        <i class='fa fa-search'></i>
          <span>Rechercher</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Table</span></a>
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
          <li class="breadcrumb-item active">Archive</li>
        </ol>

        
        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            
            <i class="fas fa-table"></i>
            liste des absences archivée</div>
            
                        
            <?php if (isset($_GET['notif'])): ?>
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <?php
                    if ($_GET['notif'] == 'add') echo 'absence ajouté avec succés';
                    if ($_GET['notif'] == 'update') echo 'absence modifié avec succés';
                    if ($_GET['notif'] == 'delete') echo 'absence supprimé avec succés';
                ?>
            </div>
        <?php endif ?>
          <div class="card-body">
            <div class="table-responsive">
          <!--  <a href="javascript:window.print()" class="btn btn-success" type="button">Imprimer</a> -->
            
            <!--<button onClick="imprimer('sectionAimprimer')" class="glyphicon glyphicon-print">Imprimer</button>-->
           <!-- <a onClick="imprimer('sectionAimprimer')"  class="btn btn-success btn-lg">
      <span class="glyphicon glyphicon-print"></span> Print 
    </a>
    
            <br><br>
            <br>
            <div id='sectionAimprimer'>-->
              <table class="table table-bordered" id="divName" width="100%" cellspacing="0">
              
                <thead>
                  <tr>
                    <th>id_emp</th>
                    <th>date_absence</th>
                    <th>motif_absence</th>
                    <th>absence_justifie</th>
                    <th>absence_prevue</th>
                    <th>duree</th>
                    <th>id_absence</th>
                  </tr>
                </thead>
              
                <tbody id="myTable">
                  <?php
                    include 'classes/gestion_absence.class.php';
                    $gestion_absence = new Gestion_absence;
                    $listGestion_absences = $gestion_absence->archiver();
                    $data = $listGestion_absences->fetchAll(); 
                    foreach($data as $gestion_absenceData):
                    ?>
                        <tr>
                            <td><?= $gestion_absenceData['id_emp'] ?></td>   
                            <td><?= $gestion_absenceData['date'] ?></td>   
                            <td><?= $gestion_absenceData['motif_absence'] ?></td>   
                            <td><?= $gestion_absenceData['absence_justifie'] ?></td>   
                            <td><?= $gestion_absenceData['absence_prevue'] ?></td> 
                            <td><?= $gestion_absenceData['duree'] ?></td> 
                            <td><?= $gestion_absenceData['id'] ?></td> 
<td> <a href='delete.php?id=<?= $gestion_absenceData['id'] ?>'><i class='fa fa-trash' style='font-size:24px'></i></a></td> 
                            
                           
                        </tr>
                    <?php endforeach ?>
                </tbody>
              </table>
             
            </div>
            
            </div>
          </div>
          
        </div>

       
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

  <!-- Bootstrap core JavaScript
  <script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>-->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-bar-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

    

</body>

</html>
