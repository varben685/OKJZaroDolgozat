<?php 

session_start();
?>
<?php


	require 'dbh_connect.php';

	$felhasznalo = mysqli_real_escape_string($connection, $_POST['felhasznalo']);
	$jelszo = mysqli_real_escape_string($connection, $_POST['jelszo']);

	if (empty($felhasznalo) || empty($jelszo)) 
	{
		?>
				 <script>
             		alert('Minden mező kitöltése kötelező'); 
             		history.go(-1);
             
     			</script>;
     			<?php  
	}
	else
	{
		$sql = "SELECT Felhasznalonev,Jelszo FROM felhasznalok WHERE Felhasznalonev = ?";

		$statement = mysqli_stmt_init($connection);

		if (!mysqli_stmt_prepare($statement, $sql)) {
			?>
				 <script>
             		alert('Nem lehet csatlakozni az adatbázishoz'); 
             		history.go(-1);
             
     			</script>;
     			<?php  
		}
		else
		{
			mysqli_stmt_bind_param($statement, 's', $felhasznalo);
			mysqli_stmt_execute($statement);

			$eredmeny = mysqli_stmt_get_result($statement);

			if ($row = mysqli_fetch_assoc($eredmeny)) 
			{
				$jelszoCheck = $row["Jelszo"];
				if(!password_verify($jelszo, $jelszoCheck)){
				if ($jelszoCheck != $jelszo) 
				{
					?>
				 <script>
             		alert('Hibás a jelszó'); 
             		history.go(-1);
             
     			</script>;
     			<?php  
				}
				}
				else
				{$_SESSION["felhasznalo"] = $row["Felhasznalonev"];
					$_SESSION["jelszo"] = $row["Jelszo"];
					
					 $_SESSION['loggedin'] = true;
					?>
				 <script>
             		alert('Sikeres bejelentkezés'); 
             		
             		
             
     			</script>

     			<?php  
     			header("Location: http://localhost/fodrasz/adminfelulet.php");
				}
			}
			else
			{
				?>
				 <script>
             		alert('Nincsen ilyen felhasználonév'); 
             		history.go(-1);
             
     			</script>;
     			<?php  
			}
		}
	}



 ?>