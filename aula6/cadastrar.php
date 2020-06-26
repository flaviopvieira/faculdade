<!DOCTYPE html>
<html>
<head>
	<title>Pesquisa de Produtos...</title>
</head>
<body>
	  <?php
		
        $user   = 'root';
		$pass   = '';
		$server = 'localhost';
		$db     = 'bancoads';
		
		$mysqli = mysqli_connect($server, $user, $pass, $db);
		

		if($mysqli->connect_error){
			die('Connect Error');			
		}

  	?>

  	<?php 

  		$codigo = $_POST['codigo'];
        $produtos = $mysqli->query("SELECT p.*, c.DESCRICAO as CATEGORIA,
                                         m.DESCRICAO as MARCA
                                    FROM produtos p
                              INNER JOIN categoria c
                                      ON c.IDCATEGORIA = p.IDCATEGORIA
                              INNER JOIN marca m
                                      ON m.IDMARCA = p.IDMARCA
                                   WHERE p.IDPROD = '$codigo'  
                                   ORDER BY IDPROD");
      echo '<ul>';


      $total = mysqli_num_rows($produtos);

      if($total == 0){

        echo "<center><h1>Produto não encontrado! </h1> </center>";

      }else{

        while($prod = mysqli_fetch_object($produtos)){

        echo '<li>
              <h2>'.$prod->NOME.'</h2><p>'.$prod->DESCRICAO.'</p>
              <p><b>Categoria: </b>'.$prod->CATEGORIA.'</p>
              <p><b>Estoque..: </b>'.$prod->ESTOQUE.'</p>
              <p><b>Valor....: </b>'.$prod->PRECO.'</p>



              </li>';

      }

      }

      

    echo '</ul>';
  	
  		

  	?>

</body>
</html>