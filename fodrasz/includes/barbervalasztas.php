<meta charset="utf-8">
<?php  
  include_once 'dbh_connect.php';
  session_start();

 if($connection === false){
    die("Nem lehet csatlakozni az adatbázishoz " . mysqli_connect_error());
}

$Id = $_SESSION["Id"];

$Fodrasz = mysqli_real_escape_string($connection, $_REQUEST['Fodrasz']);
$Szolgaltatas = mysqli_real_escape_string($connection, $_REQUEST['Szolgaltatas']);
$_SESSION["FodraszNev"] = $Fodrasz;



				
						
						
						$sql = "UPDATE `foglalas` SET `FodraszNeve`='$Fodrasz',`Szolgaltatas` = '$Szolgaltatas' WHERE `Id` = '$Id' ";

						if(mysqli_query($connection, $sql))
							{
    							
							} 
							else
							{
							    echo "Nem sikerult " . mysqli_error($connection);
							}
								header("Location: http://localhost/fodrasz/idovalasztas.php");

							


				 
     			
			


mysqli_close($connection);

?>

