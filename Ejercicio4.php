<form method="post">
    	Ingrese Numero:<br>
    	<input type="text" name="txtNro"> <br>
    	<input type="submit" value="Enviar">
    	<input type="reset" value="Limpiar Formulario">
</form>
<?php
	// leer un número
	$nro = $_REQUEST["txtNro"];

	// determinar si $nro es par o impar
  	if(isset($nro))  // isset, determina si la variable $nro esta asignada
  	{
		if ($nro % 2 == 0)
          			echo "<br>$nro"." Es un número par.";
      		else{
          			echo "<br>$nro"." Es un número impar.";
                echo "NO VA FUNCIONAR !!!!!";
              }
  	}
?>
