<?php 
session_start();
if (isset($_SESSION['loggedin'])  == true) {
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
        <div class="container"><a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="adminfelulet.php"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#fodrasz">Fodrászok kezelése</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#szolgaltatas">Szolgáltatások kezelése</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="#foglalasok">Időpontok</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link js-scroll-trigger" href="index.php">Kilépés</a></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="js-scroll-trigger"></section>
    <div id="fodrasz" class="register-photo" style="background-color: rgb(255,255,255);">
        <div class="form-container">
            

            <form method="post" action="includes/ujfodrasz.php">
                <h2 class="text-center">Fodrász hozzáadása</h2>

                <div class="form-group"><input class="form-control" type="text" name="Nev" placeholder="Keresztnév"></div>
                <div class="form-group"><input class="form-control" type="text" name="Telefon" placeholder="Telefonszám"></div>
                


                <h2 class="text-center">Belépési adatok megadása</h2>

                <div class="form-group"><input class="form-control" type="text" name="Fnev" placeholder="Felhasználónév"></div>
                <div class="form-group"><input class="form-control" type="text" name="Fjelszo" placeholder="Jelszó"></div>
                
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="add">Felvétel</button></div>
            </form>
        
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Fodrász Id</th>
      <th scope="col">Fodrász Név</th>
      <th scope="col">Telefonszám</th>
      
    </tr>
  </thead>

  <tbody>
    <?php
include_once'includes/dbh_connect.php';

      $sql = "SELECT * FROM `fodrasz`";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
      

      while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['Nev'] . "</td>";
                echo "<td>" . $row['Telefonszam'] . "</td>";
               
            echo "</tr>";
        }
        ?>
    
  </tbody>
</table>


                <form action="includes/torlesfodrasz.php">
                <h2 class="text-center">Fodrász törlése</h2>
                <div class="form-group"><input class="form-control" type="text" name="Id" placeholder="Fodrász ID-je"></div>
                
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="delete" id="delete">Törlés</button></div>
            </form>
        </div>


    </div>
    <div id="szolgaltatas" class="register-photo" style="background-color: rgb(255,255,255);">
        <div class="form-container">
            
            <form method="post" action="includes/ujszolgaltatas.php">
                <h2 class="text-center">Szolgáltatás hozzáadása</h2>
                <div class="form-group"><input class="form-control" type="text" name="Szolgaltatas" placeholder="Szolgáltatás"></div>
                <div class="form-group"><input class="form-control" type="text" name="Ido" placeholder="Időtartam"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Felvétel</button></div>
            </form>

            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Szolgáltatás Id</th>
      <th scope="col">Szolgáltatás Név</th>
      <th scope="col">Idotartam</th>
      
    </tr>
  </thead>

  <tbody>
    <?php
include_once'includes/dbh_connect.php';

      $sql = "SELECT * FROM `szolgaltatasok`";

if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
      

      while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Id'] . "</td>";
                echo "<td>" . $row['Nev'] . "</td>";
                echo "<td>" . $row['Idotartam'] . "</td>";
               
            echo "</tr>";
        }}}
        ?>
    
  </tbody>
</table>
        <form method="post" action="includes/torlesszolgaltatas.php">
                <h2 class="text-center">Szolgáltatás törlése</h2>
                <div class="form-group"><input class="form-control" type="text" name="Id" placeholder="Szolgáltatás Id-je"></div>
                
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Törlés</button></div>
            </form>

        </div>
    </div>
<div id="foglalasok" style="background-color: rgb(255,255,255);">

<?php
include_once'includes/dbh_connect.php';
?>

<h2 class="text-center">Válassza ki melyik fodrász foglalásait szeretné látni</h2>

<form action="adminfelulet.php" method="POST">
    <select class="form-control" name="Fodrasz">

                <?php  
                
                include_once 'includes/dbh_connect.php';

        
                $query = "SELECT `Nev` FROM `fodrasz`";
                $result1 = mysqli_query($connection, $query);
                ?>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>
            
            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>
            
            <?php endwhile;?>

            <?php 


            ?>
        </select>
<div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="show" id="show">Mutat</button></div>

</form>



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

if(isset($_POST['show'])){

    $Nev = mysqli_real_escape_string($connection, $_REQUEST['Fodrasz']);
      $sql = "SELECT `FodraszNeve`,`Nev`,`Telefonszam`,`Email`,`Szolgaltatas`,`Nap`,`Ido`  FROM `foglalas` WHERE `FodraszNeve` = '$Nev'  ORDER BY nap DESC";

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
}
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
    echo "Szolgáltatás létrehozása elött kérjük hozzon létre legalább egy fodrászt";
}}}
 ?>
