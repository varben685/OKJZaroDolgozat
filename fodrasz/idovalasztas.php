<?php 
session_start();
 ?>
<!DOCTYPE html>
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
    <link rel="stylesheet" type="text/css" href="assets/css/register.css">
     
</head>
<body>
    <div class="row" style="margin-bottom: 40px;">
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
        
        <div class="image-holder" ></div>
    


            <form method="POST" action="idovalasztas.php">
                <h2 class="text-center"><strong>Kérjük válasszon napot</strong></h2>

            <input type="date" name="Nap" class="form-control" id="nap" min="<?php echo date('Y-m-d');?>"> 
            
            
                                <?php
                                
                                include_once 'includes/dbh_connect.php';
                          if (isset($_POST['show'])) {
                            $Nap = $_POST['Nap'];
                            $Nap1 = $Nap;
                            echo "<br>";
                            echo "<h5>A kiválasztott nap: ".$Nap1."</h5>";
                
                             $Fodrasznev = $_SESSION["FodraszNev"];

                           $query2 = "SELECT Idopont from nap inner JOIN idopontok on nap.Id = idopontok.NapId WHERE nap.Nap = '$Nap1' AND `$Fodrasznev` =0";
                             $result2 = mysqli_query($connection,$query2);
                            
                            if (mysqli_num_rows($result2) == '0'){
                            echo "Ezen a napon nincsen szabad időpontunk vagy nem vagyunk nyitva. Kérjük válasszon másik napot";
                 }
                            
                            
                          } 

                         
                

            ?>

            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="show">Szabad időpontok megnézése</button></div>

        </form> 
       
           
        
    
<form method="POST" action="includes/idopont.php" accept-charset="utf-8"  >
    
<h2 class="text-center"><strong>Kérjük válasszon időpontot</strong></h2>
            <select name="Ido" id="" class="form-control" >
                <?php
                include_once 'includes/dbh_connect.php';


                $Nap1 = $Nap;
                $_SESSION["$Nap3"] = $Nap1;
                $Fodrasznev = $_SESSION["FodraszNev"];

      $query2 = "SELECT Idopont from nap inner JOIN idopontok on nap.Id = idopontok.NapId WHERE nap.Nap = '$Nap1' AND `$Fodrasznev` =0";
                $result2 = mysqli_query($connection,$query2);
                 
                ?>
                <?php while($row2 = mysqli_fetch_array($result2)):;?>
                       <option value="<?php echo $row2[0];?>"><?php echo $row2[0];?> </option>

                    <?php endwhile;?>

                      </select> 
            
            <div class="form-group" ><button class="btn btn-primary btn-block" type="submit">Következő</button></div>
   


</form>

 </div>
</div>


</body>
</html>