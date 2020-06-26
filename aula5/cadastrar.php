<!DOCTYPE html>
<html>
<head>
	<title>Gravou...</title>
</head>
<body>
	  <?php
		
        $user   = "root";
        $pass   = " ";
        $server = "localhost";
        $db     = "bancoads";
        
		//método de conexão
		$mysqli = mysqli_connect($server, $user, $pass, $db);
		

		if($mysqli->connect_error){
			die('Connect Error');			
		}

  	?>

  	<?php 

          $codigo = $_POST['id'];
          $nome   = $_POST['nome'];

        $sql = $mysqli->query("INSERT INTO ALUNO (ID, NOME) VALUES('$CODIGO')"); 
                                     
  	?>

</body>           
</html>