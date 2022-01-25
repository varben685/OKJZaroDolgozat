<meta charset="utf-8">
<?php  
  include_once 'dbh_connect.php';
  session_start();

 if($connection === false){
    die("Nem lehet csatlakozni az adatbázishoz " . mysqli_connect_error());
}


$Nev = mysqli_real_escape_string($connection, $_REQUEST['Nev']);
$Telefonszam = mysqli_real_escape_string($connection, $_REQUEST['Telefon']);

$Fnev = mysqli_real_escape_string($connection, $_REQUEST['Fnev']);
$Fjelszo = mysqli_real_escape_string($connection, $_REQUEST['Fjelszo']);

$hashed_password = password_hash($Fjelszo, PASSWORD_DEFAULT);




				
						
						
						$sql = "INSERT INTO `fodrasz`(`Nev`, `Telefonszam`,`Felhasznalonev`,`Jelszo`) VALUES ('$Nev','$Telefonszam','$Fnev','$hashed_password')";
						$sql2 = "ALTER TABLE `idopontok` ADD $Nev bit NOT NULL default 0";
						
											
						

						if(mysqli_query($connection, $sql) && mysqli_query($connection,$sql2))
							{
    							
							} 
							else
							{
							    echo "Nem sikerult " . mysqli_error($connection);
							}
								header("Location: http://localhost/fodrasz/adminfelulet.php");

							


				 
     			
			


mysqli_close($connection);

?>

