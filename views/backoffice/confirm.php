



<?php
session_start();



?>
<!DOCTYPE html>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Dashtreme Admin </title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet">
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- simplebar CSS-->
  <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet">
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css">
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
  <!-- Sidebar CSS-->
  <link href="assets/css/sidebar-menu.css" rel="stylesheet">
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet">
  
</head>

<body class="bg-theme bg-theme1  pace-done"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" 

  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

<!-- start loader -->
   <div id="pageloader-overlay" class="visible incoming"><div class="loader-wrapper-outer"><div class="loader-wrapper-inner"><div class="loader"></div></div></div></div>
   <!-- end loader -->

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="init" data-simplebar-auto-hide="true" class="active"><div class="simplebar-track vertical" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-track horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar"></div></div><div class="simplebar-scroll-content" style="padding-right: 15px; margin-bottom: -30px;"><div class="simplebar-content" style="padding-bottom: 15px; margin-right: -15px;">
     <div class="brand-logo">
      <a href="index.html">
       <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
       <h5 class="logo-text">Dashtreme Admin</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol in">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="index.html">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>

      <li>
        <a href="icons.html">
          <i class="zmdi zmdi-invert-colors"></i> <span>UI Icons</span>
        </a>
      </li>

      <li>
        <a href="forms.php">
          <i class="zmdi zmdi-format-list-bulleted"></i> <span>Forms</span>
        </a>
      </li>

 <li class="active has-sub">
                                                  <a class="js-arrow" href="#">
                                                      <i class="fas fa-tachometer-alt"></i>Menu</a>
                                                        <ul class="list-unstyled navbar__sub-list js-sub-list">
                                                            <li>
                                                                <a href="view_menu_items.php">        Liste des Menus</a>
                                                            </li>
                                                            <li>
                                                                <a href="view_food_items.php">       Liste des Plats</a>
                                                            </li>
                                                            <li>
                                                                    <a href="statistique.php">    Statistique des Plats</a>
                                                                </li>
                                                          
                                                          <li>
                                                                    <a href="tables2.php"> Réservations & employes</a>
                                                                </li>
                                                          </ul>
                                                </li>
      <li class="active">
        <a href="tables2.php" class="active">
          <i class="zmdi zmdi-grid"></i> <span>Tables</span>
        </a>
      </li>

      <li>
        <a href="calendar.html">
          <i class="zmdi zmdi-calendar-check"></i> <span>Calendar</span>
          <small class="badge float-right badge-light">New</small>
        </a>
      </li>

      <li>
        <a href="profile.html">
          <i class="zmdi zmdi-face"></i> <span>Profile</span>
        </a>
      </li>

      <li>
        <a href="login.html" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Login</span>
        </a>
      </li>

       <li>
        <a href="register.html" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Registration</span>
        </a>
      </li>
    

      <li class="sidebar-header">LABELS</li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-coffee text-danger"></i> <span>Important</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-chart-donut text-success"></i> <span>Warning</span></a></li>
      <li><a href="javaScript:void();"><i class="zmdi zmdi-share text-info"></i> <span>Information</span></a></li>

    </ul>
   
   </div></div></div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li class="nav-item">
      <form class="search-bar">
        <input type="text" class="form-control" placeholder="Enter keywords">
         <a href="javascript:void();"><i class="icon-magnifier"></i></a>
      </form>
    </li>
  </ul>
     
  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-envelope-open-o"></i></a>
    </li>
    <li class="nav-item dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();">
      <i class="fa fa-bell-o"></i></a>
    </li>
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title">Maha Segni </h6>
            <p class="user-subtitle">maha.segni@omekhouria.com</p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-envelope mr-2"></i> Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-wallet mr-2"></i> Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="icon-settings mr-2"></i> Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"> <a href="Login.html" target="_blank"><i class="icon-power mr-2"></i> Logout</li></a>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
    
    

          <?PHP
include "../core/employeC.php";

?>
<div class="clearfix"></div>
	
  <div class="content-wrapper">
    <div class="container-fluid">
     
      <div class="row mt-3">
        <div class="col-lg-6">
          <div class="card">
            
          </div>
        </div>
        
      </div><!--End Row-->


 <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <form action="ajoutEmploye.html">
              <h5 class="card-title">gestion employe
              
  <input type="submit" name="Ajout" value="ajouter" class="bouton" style="background-color: #47abd5;"></form>
      <form method="POST" action="recherche.php" >
         Rechercher un mot : <input type="text" name="recherche">
     <input type="SUBMIT" value="Search!"style="background-color: #47abd5;"> 
       </h5></form>
        <div> <!-- class="table-responsive" -->
          <div class="table-responsive">
<?PHP

$employe1C=new EmployeC();
$listeEmployes=$employe1C->afficherEmployes();


//var_dump($listeEmployes->fetchAll());
?>
<?PHP

//$employe2C=new EmployeC();
//$listeEmployes1=$employe2C->rechercherEmployesParNomPrenom($_POST['recherche']);


//var_dump($listeEmployes->fetchAll());
?><form method="POST">
               <table class="table table-striped">
                  <thead>
                    <tr>
                      <td>Cin</td>
<td scope="col">Nom</td>
<td>Prenom</td>
<td>Salaire</td>
<td>adresse mail </td>
<td>numero </td>
<td>categorie</td>
<td>supprimer</td>
<td>modifier</td>
                    </tr>
                    
                  </thead>
                  <tbody>
                 <?PHP
foreach($listeEmployes as $row){
  ?>
  <center>
  <tr class="donn">
  <td><?PHP echo $row['cin']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['tarifHoraire']; ?></td>
  <td><?PHP echo $row['adresse_m']; ?></td>
  <td><?PHP echo $row['numero']; ?></td>
  <td><?PHP echo $row['categorie']; ?></td>
  <td><form method="POST" action="supprimerEmploye.php">
  <input type="submit" name="supprimer" value="supprimer" class="bouton"  onclick="return confirm('Etes vous sûre de vouloir supprimer l employe suivant ?');"style="background-color: #47abd5;" >
  <input type="hidden" value="<?PHP echo $row['cin']; ?>" name="cin">
  </form>
  </td>
  <td><a href="modifierEmploye.php?cin=<?PHP echo $row['cin']; ?>">
  Modifier</a></td>
  </tr></center>
  <?PHP
}

?>
          
                </table></form>
            </div>
          
          </div>
            </div>
          </div>
        </div>
     <br>
<br>
<br>
<br>          

<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
             <form action="accueil.html">
              <h5 class="card-title">gestion reservation
              
  <input type="submit" name="Ajout" value="ajouter" class="bouton"style="background-color: #47abd5;"></form>
      <form method="POST" action="recherche1.php">
    Rechercher un mot : <input type="text" name="recherche1">
     <input type="SUBMIT" name="ok"value="Search!"style="background-color: #47abd5;">  
       </h5></form>  
         <div class="table-responsive">
<?PHP
 $reservation2C=new reservationC();
$listereservation1=$reservation2C->afficherreservation();
$confi=$reservation2C->confirmation();
//var_dump($listeEmployes->fetchAll());
?><form method="POST">
               <table class="table table-striped">
                  <thead>
         <tr>
<td>id</td>
<td>Nom</td>
<td>Prenom</td>
<td>date  </td>
<td>Heure</td>
<td>numero table </td>
<td>nombre </td>
<td>supprimer</td>
<td>modifier</td>
<td>confirmation</td>
</tr>
                  </thead>
                  <tbody>
                    
<?PHP
 

foreach($listereservation1 as $row){
  ?>
  <center>
  <tr class="donn">
  <td><?PHP echo $row['id']; ?></td>
  <td><?PHP echo $row['nom']; ?></td>
  <td><?PHP echo $row['prenom']; ?></td>
  <td><?PHP echo $row['date_']; ?></td>
  <td><?PHP echo $row['heure']; ?></td>
  <td><?PHP echo $row['ntable']; ?></td>
  <td><?PHP echo $row['nbr']; ?></td>
  

  <td><form method="POST" action="supprimerReservation.php">
  <input type="submit" name="supprimer" value="supprimer" class="bouton"  onclick="return confirm('Etes vous sûre de vouloir supprimer la reservation suivante ?');" style="background-color: #47abd5;">
<input type="hidden" value="<?PHP echo $row['id']; ?>" name="id">
  </form>
  </td>
  
   <td><a href="modifierReservation.php?id=<?PHP echo $row['id']; ?>">
  Modifier</a></td>
 
  <td><a href="confirm.php?id=<?PHP echo $row['id']; ?>">
  confirmation</a></td>
  </tr></center>
  <?PHP
}
?>


                  </tbody>
                </table></form>
            </div>
            </div>
          </div>
        </div>


<br>
<br>
<br>
<br> 



    

<br>
<br>

      
        <div class="col-lg-6">
          <div class="card">
            
          </div>
        </div>
      </div><!--End Row-->

      <!--End Row-->
    
    <!--start overlay-->
      <div class="overlay toggle-menu"></div>
    <!--end overlay-->

    </div>
    <!-- End container-fluid-->
    
    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->
  
  <!--Start footer-->
  <footer class="footer">
      <div class="container">
        <div class="text-center">
          Copyright © 2020 Omek Houria Admin
        </div>
      </div>
    </footer>
  <!--End footer-->
  
  <!--start color switcher-->
   <div class="right-sidebar">
    <div class="switcher-icon">
      <i class="zmdi zmdi-settings zmdi-hc-spin"></i>
    </div>
    <div class="right-sidebar-content">

      <p class="mb-0">Gaussion Texture</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme1"></li>
        <li id="theme2"></li>
        <li id="theme3"></li>
        <li id="theme4"></li>
        <li id="theme5"></li>
        <li id="theme6"></li>
      </ul>

      <p class="mb-0">Gradient Background</p>
      <hr>
      
      <ul class="switcher">
        <li id="theme7"></li>
        <li id="theme8"></li>
        <li id="theme9"></li>
        <li id="theme10"></li>
        <li id="theme11"></li>
        <li id="theme12"></li>
    <li id="theme13"></li>
        <li id="theme14"></li>
        <li id="theme15"></li>
      </ul>
      
     </div>
   </div>
  <!--end color switcher-->
   
  </div><!--End wrapper-->


  <!-- Bootstrap core JavaScript-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  
  <!-- simplebar js -->
  <script src="assets/plugins/simplebar/js/simplebar.js"></script>
  <!-- sidebar-menu js -->
  <script src="assets/js/sidebar-menu.js"></script>
  
  <!-- Custom scripts -->
  <script src="assets/js/app-script.js"></script>
  
</div>

</body></html>