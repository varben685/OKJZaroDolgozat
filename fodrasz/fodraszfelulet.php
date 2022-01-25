<?php 
session_start();
if (isset($_SESSION['loggedinf'])  == true) {
    ?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Gangster's Barber Shop</title>
    <meta name="" content="">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/admin.css">

<title> Gangster's Barber Shop </title>
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">
        <div class="container"><a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="fodraszfelulet.php"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#foglalasok">Időpontok</a></li>
					<li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Kilépés</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
    
<div id="foglalasok" style="background-color: rgb(255,255,255);">

<?php
include_once'includes/dbh_connect.php';
?>






            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Fodrász Név</th>
      <th scope="col">Vendég Név</th>
      <th scope="col">Telefonszám</th>
      <th scope="col">Email</th>
      <th scope="col">Szolgáltatás</th>
      <th scope="col">Nap</th>
      <th scope="col">Idő</th>
    </tr>
  </thead>

  <tbody>
    



<?php
session_start();


    $Fnev = $_SESSION["felhasznalo"];

    $sql3 = "SELECT `Nev` FROM `fodrasz` WHERE `Felhasznalonev` = '$Fnev'";
$result = mysqli_query($connection, $sql3);
$row = mysqli_fetch_array($result);
$Nev = $row['Nev'];



      $sql = "SELECT `FodraszNeve`,`Nev`,`Telefonszam`,`Email`,`Szolgaltatas`,`Nap`,`Ido`  FROM `foglalas` WHERE `FodraszNeve` = '$Nev' ORDER BY nap DESC";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
      

      while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['FodraszNeve'] . "</td>";
                echo "<td>" . $row['Nev'] . "</td>";
                echo "<td>" . $row['Telefonszam'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Szolgaltatas'] . "</td>";
                echo "<td>" . $row['Nap'] . "</td>";
                echo "<td>" . $row['Ido'] . "</td>";
            echo "</tr>";
        }
        ?>
    
  </tbody>
</table>
        
               <?php
        
        mysqli_free_result($result);
    } 

    }
else
{
    echo "Nem elérhető az adatbázis" . mysqli_error($connection);
}
 

mysqli_close($connection);
?>

        </div>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <script src="assets/js/agency.js"></script>
</body>

</html>
<?php
}  
else { 
    echo "Kérjük elötte jelentkezzen be!";
}
 ?>
