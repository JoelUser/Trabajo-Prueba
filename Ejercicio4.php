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
			echo "NO VA FUNCIONAR 1!!!!!";
			echo "NO VA FUNCIONAR 2!!!!!";
			echo "NO VA FUNCIONAR 3!!!!!";
			echo "NO VA FUNCIONAR 4!!!!!";
			echo "NO VA FUNCIONAR 5!!!!!";
			echo "NO VA FUNCIONAR 6!!!!!";
      echo "NO VA FUNCIONAR 7!!!!!";
      echo "NO VA FUNCIONAR 8!!!!!";

      echo "NO VA FUNCIONAR 7!!!!!";
      
      echo "Los pollitos dicen pio pio cuando tienen sed , cuando tienen calor";
      echo "el papa gallo busca la cebada y el trigo y les da unas botellas para que ya no digan pio pio";


		      echo "*******************************";
		      
		      echo "*******************************";


              }
  	}
?>
