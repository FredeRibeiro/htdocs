<form>

	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" name="OK">

</form> 

<?php 

if (isset($_GET)){

	foreach ($_GET as $key => $value) {
		

		echo "Nome do Campo: " . $key."<br>";
		
		echo "Valor do Campo: " . $value;

		echo "<hr>";


	}
} 
 ?>