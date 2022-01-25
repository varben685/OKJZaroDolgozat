<!DOCTYPE html>
<html >
<head>
	
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
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
</head>
<body>
<div class="row" style="margin-bottom: 60px;">
	<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" id="mainNav">

        <div class="container"><a class="navbar-brand js-scroll-trigger" data-bs-hover-animate="pulse" href="index.php"></a><p style="color: rgb(255,255,255);font-size: 19px;padding: 24px;height: 63px; text-align: center;">Üdvözöljük a Gangsters Barber Shop időpontfoglalás felületén</p>
            
        </div>
        </div>
    </nav>
    <br>
    <br>
    <br>
    <div class="register-photo">
    <div class="form-container">
        <div class="image-holder"></div>




        <form method="GET" action="includes/barbervalasztas.php" >

            <h2 class="text-center"><strong>Kérjük válasszon fodrászt és szolgáltatást</strong></h2>
            
            <select class="form-control" name="Fodrasz">

				<?php  
                
				include_once 'includes/dbh_connect.php';

		
				$query = "SELECT `Nev` FROM `fodrasz`";
				$result1 = mysqli_query($connection, $query);
				?>
            <?php while($row1 = mysqli_fetch_array($result1)):;?>

            <option value="<?php echo $row1[0];?>"><?php echo $row1[0];?></option>

            <?php endwhile;?>

        </select>
        

            <select name="Szolgaltatas" id="" class="form-control" >
                <?php
                include_once 'includes/dbh_connect.php';

                $query2 = "SELECT `Nev` FROM `szolgaltatasok`";
                $result2 = mysqli_query($connection,$query2);
                ?>
                <?php while($row2 = mysqli_fetch_array($result2)):;?>
                        <option value="<?php echo $row2[0];?>"><?php echo $row2[0];?>

                    <?php endwhile;?>
                      </select>
            
            
            

            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Következő</button></div>
    </div>
</div>


</form>








</body>
</html>