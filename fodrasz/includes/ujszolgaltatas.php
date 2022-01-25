<meta charset="utf-8">
<?php  
  include_once 'dbh_connect.php';
  session_start();

 if($connection === false){
    die("Nem lehet csatlakozni az adatbázishoz " . mysqli_connect_error());
}



$Szolgaltatas = mysqli_real_escape_string($connection, $_REQUEST['Szolgaltatas']);
$Ido = mysqli_real_escape_string($connection, $_REQUEST['Ido']);



				
						
						
						$sql = "INSERT INTO `Szolgaltatasok`(`Nev`, `Idotartam`) VALUES ('$Szolgaltatas','$Ido')";
						
											
						

						if(mysqli_query($connection, $sql))
							{
    							
							} 
							else
							{
							    echo "Nem sikerult " . mysqli_error($connection);
							}
								header("Location: http://localhost/fodrasz/adminfelulet.php");

							


				 
     			
			


mysqli_close($connection);

?>

