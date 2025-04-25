<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>BDE</title>
</head>
<body>
   
	<?php
            require_once('conn.php');
            
            $sql=mysqli_query($conn,"SELECT * FROM tbaluno");
            
        
            while($linha=mysqli_fetch_array($sql))
            {
            $ra=$linha['ra'];
            $nome=$linha['nomeAluno'];
            
            echo"<p>";
            
            echo "<table><tr><td>Código do aluno: </td><td>$ra</td><tr>";
            echo "<tr><td>Nome do aluno: </td><td>$nome</td><tr> <br><br>";

            
            
            }
            
            ?>

</body>
</html>