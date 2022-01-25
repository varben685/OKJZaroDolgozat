<meta charset="utf-8">
<?php  
  include_once 'dbh_connect.php';
  session_start();
  

 if($connection === false){
    die("Nem lehet csatlakozni az adatbázishoz " . mysqli_connect_error());
}

$Nap = $_SESSION["$Nap3"];
$Ora = mysqli_real_escape_string($connection, $_REQUEST['Ido']);
$Id = $_SESSION["Id"];
$Fodrasznev = $_SESSION["FodraszNev"];

	
if (empty($Ora))
			{
				?>
				 <script>
             		alert('Kérjük hogy minden mezőt töltsőn ki'); 
             		history.go(-1);
             
     			</script>;
     			<?php  

			}
			else
			{
				 $query3 = "SELECT Id from nap WHERE Nap = $Nap";
                $result3 = mysqli_query($connection,$query3);
						
						
						$sql = "UPDATE `foglalas` SET `Nap`='$Nap',`Ido` = '$Ora' WHERE `Id` = '$Id' ";
						$sql2 = "UPDATE `idopontok` SET `$Fodrasznev` ='1' WHERE `NapNev` = '$Nap' AND `Idopont` = '$Ora'";

						if(mysqli_query($connection, $sql) && mysqli_query($connection,$sql2))
							{
    							
							} 
							else
							{
							    echo "Nem sikerult " . mysqli_error($connection);
							}
							

							
								

								header("Location: http://localhost/fodrasz/osszegzes.php");
									
									
							?>


				 
     			<?php  
			}




mysqli_close($connection);

?>

