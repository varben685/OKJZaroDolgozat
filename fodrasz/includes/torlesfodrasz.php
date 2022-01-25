<meta charset="utf-8">
<?php  
  include_once 'dbh_connect.php';
  session_start();

 if($connection === false){
    die("Nem lehet csatlakozni az adatbázishoz " . mysqli_connect_error());
}


$Id = mysqli_real_escape_string($connection, $_REQUEST['Id']);

$sql3 = "SELECT `Nev` FROM `fodrasz` WHERE `Id` = '$Id'";
$result = mysqli_query($connection, $sql3);
$row = mysqli_fetch_array($result);
$Nev = $row['Nev'];




				
						
						
						$sql = "DELETE FROM `fodrasz` WHERE `Id` = '$Id'";
						$sql2 = "ALTER TABLE `idopontok` DROP $Nev;";
											
						

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

