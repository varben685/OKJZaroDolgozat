<!DOCTYPE html>
<?php 
session_start();
 ?>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Kaushan+Script">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" type="text/css" href="assets/css/vege.css">
</head>
<body>

	<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">

        <div class="container"><a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="index.php"></a><p style="color: rgb(255,255,255);font-size: 19px;padding: 24px;height: 63px; text-align: center;">Üdvözöljük a Gangsters Barber Shop időpontfoglalás felületén</p>
            
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>

<form action="email.php">


        

            <h2 class="text-center"><strong>A következő adatokkal foglalt időpontot</strong></h2>
            <h3 class="text-center">Amennyiben minden adat helyes akkor menjen a véglegesítés gombra <br>Ha rossz adatokat adott meg akkor értesítsen minket az elérhetőségeinken</h3>
            
            <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Fodrász Neve</th>
      <th scope="col">Saját Név</th>
      <th scope="col">Telefonszám</th>
      <th scope="col">Email cím</th>
      <th scope="col">Szolgáltatás</th>
      <th scope="col">Nap</th>
      <th scope="col">Időpont</th>
      
    </tr>
  </thead>

  <tbody>

				<?php  
				include_once 'includes/dbh_connect.php';
                
                $Id = $_SESSION["Id"];
		
				
                
				
   
    $sql = "SELECT `FodraszNeve`, `Nev`, `Telefonszam`, `Email`, `Szolgaltatas`, `Nap`, `Ido` FROM `foglalas` WHERE `Id` = '$Id'; ";

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

            $_SESSION["FodraszNeve"] = $row['FodraszNeve'];
            $_SESSION["Nev"] =$row['Nev'];
            $_SESSION["Telefonszam"]=$row['Telefonszam'];
            $_SESSION["Email"] =$row['Email'];
            $_SESSION["Szolgaltatas"] =$row['Szolgaltatas'];
            $_SESSION["Nap"] =$row['Nap'];
            $_SESSION["Ido"] =$row['Ido'];
        }}}
        ?>
    
  </tbody>
</table>
        

        

            
            

            <div class="form-group"><button class="btn btn-primary btn-block" >Foglalás véglegesítése</button></div>
            </form>
    </div>
</div>











</body>
</html>