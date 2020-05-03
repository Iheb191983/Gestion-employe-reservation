<?php
session_start();
?>

<html>

  <head>
    <title> Home | Omek Houria </title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

  <body>

  <!--Back to top button..................................................................................-->
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  <!--Javacript for back to top button....................................................................-->
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Omek Houria</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active" >
              <a href="index.php">Accueil</a></li>
               <li><a href="menu.php">Menu</a></li>
            <li><a href="aboutus.php">A propos de nous </a></li>
            <li><a href="contactus.php">Nous contacter</a></li>
    <li>
                        <a href="reservation.html">Réserver une table</a>
                    </li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Bienvenue <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart
              (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
             </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Déconnexion </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> Inscription Client  </a></li>
              <li> <a href="managersignup.php"> Inscription Manager </a></li>
              
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> S'identifier Client</a></li>
              <li> <a href="managerlogin.php"> S'identifier Manager </a></li>
             
            </ul>
            </li>
          </ul>

<?php
}
?>


        </div>

      </div>
    </nav>

    <div class="wide">
      	<div class="col-xs-5 line"><hr></div>
        <div class="col-xs-2 logo"><img src="images/logo.jpg"></div>     
        <br>
        <br>
        </div> 
        <div class="col-xs-5 line"><hr></div>
        <br>
        <br>
        <br>
        <div class="tagline">La gastronomie traditionnelle tunisienne</div>
    </div>
    <br>
    <!--<center><img src="images/orderimg.png" alt="image" height="50%"></center>-->
    <div class="orderblock">
    <h2>Feeling Hungry?</h2>
    <center><a class="btn btn-success btn-lg" href="customerlogin.php" role="button" > Order Now </a></center>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="wide2">
        <div class="col-xs-4 box">
          <img src="images/minimumx.png" height="200px">
        </div>
        <div class="col-xs-4 box">
          <img src="images/locationx.png">
        </div>
        <div class="col-xs-4 box">
          <img src="images/deliveryx.png">
        </div>

        <div class="col-xs-4 box">
          <h2><strong>NO MINIMUM<br> ORDER <br> </strong><hr> </h2>
          <h4>Order any amount<br> you want - no<br> restrictions</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>SUIVI DES<br> COMMANDES EN DIRECT <br> </strong><hr> </h2>
          <h4>Sachez où se trouve<br> votre
commande à tout</h4>
        </div>
        <div class="col-xs-4 box">
          <h2><strong>LIVRAISON<br> RAPIDE <br> </strong><hr> </h2>
          <h4>Des plats chauds livrés à<br>votre porte</h4>
        </div>
    </div>
<br>
<br>
<br>
<br>
     <div class="col-xs-12 line"><hr></div>

     <div class="paragraph1">
     <h1>Bienvenue chez Omek حورية</h1>
    <p><br> 
      <h4>La nourriture est notre terrain commun, une expérience universelle ." James Beard
Dans le cadre de la " لَمّه التونسِيٌه " , Omek حورية vous invite dans une ambiance cosy et colorée pour un déjeuner 100% tounsi !!
Pas besoin de rentrer à la maison pour manger, venez chez
nous et faites comme chez vous !
Des plats quotidiens pour tous les goûts vous sont proposés avec des prix corrects, n'hésitez pas à partager avec nous vos envies et vos avis.
See you soon !
    </p>
    </h4>
    </div>

    <div class="col-xs-12 line"><hr></div>

    <div class="paragraph1">
          <h1>COMMENT COMMANDER?</h1>
          <p>
            <h4>
              All it takes is 3 easy steps:
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>Créer un compte </u>
            </h3>
          </p>
          <p>
           
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> CHOISISSEZ VOS PLATS / MENUS
            </h3>
          </p>
          <p>
            <h4>
              Une liste des plats et des meunus s'affiche.<br>
              Vous choisissez selon votre choix dans la liste. Cliquez sur les plats que vous attendiez et ils s'ajoutent automatiquement au panier.
            </h4>
          </p>
          <br>
          <p>
            <h3>
              <span class="glyphicon glyphicon-ok tickicon"></span> <u>PAYEZ EN LIGNE / HORS LIGNE</u>
            </h3>
          </p>
          <p>
            <h4>
             C'est tout une fois que tout est en ordre à la caisse et que vous payez en ligne ou en espèces à la livraison, choisissez la façon dont vous souhaitez que nous acceptions toutes les principales cartes de crédit ou payons en espèces à la livraison.
            </h4>
          </p>
          
          <br>
       
      </div>

        <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  
</body>

  <footer class="container-fluid bg-4 text-center">
  <br>
  <p> Omek Houria 2020 | &copy All Rights Reserved </p>
  <br>
  </footer>
</html>