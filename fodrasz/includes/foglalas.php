<meta charset="utf-8">
<?php  
  include_once 'dbh_connect.php';
  session_start();
  

 if($connection === false){
    die("Nem lehet csatlakozni az adatbázishoz " . mysqli_connect_error());
}

$Nev = mysqli_real_escape_string($connection, $_REQUEST['Nev']);
$Telefon = mysqli_real_escape_string($connection, $_REQUEST['Telefonszam']);
$Email = mysqli_real_escape_string($connection, $_REQUEST['Email']);



if(!preg_match("/^[3]{1}[6]{1}[0-9]{9}$/", $Telefon)) {
  ?>
	<script>
             		alert('Kérjük valós és minta szerint adja meg a telefonszámát'); 
             		history.go(-1);
             
     			</script>;
     			<?php
}
else{

if (!isset($_POST['terms'])) 
{
	?>
	<script>
             		alert('Kérjük hogy fogadja el az adatvédelmi nyilatkozatot.'); 
             		history.go(-1);
             
     			</script>;
     			<?php
}

else{
	
if (empty($Nev)||empty($Telefon)||empty($Email))
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
				
						
						
						$sql = "INSERT INTO `foglalas`(`Nev`, `Telefonszam`, `Email`) VALUES ('$Nev','$Telefon','$Email')";

						if(mysqli_query($connection, $sql))
							{
    							$last_id = mysqli_insert_id($connection);

    							$_SESSION["Id"] = $last_id;
							} 
							else
							{
							    echo "Nem sikerult " . mysqli_error($connection);
							}

							
								

								header("Location: http://localhost/fodrasz/barber.php");
									
									
							?>


				 
     			<?php  
			}

}
}

mysqli_close($connection);

?>

