<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?
		if($_SERVER['REQUEST_METHOD'] == 'POST') {
			$pizza = [];
			$preciobase = 5;
			$masa = 0;
			$oregano = 0;
			$precio = $preciobase;
			foreach($_REQUEST["pizza"] as $value){
				if($value == "masa"){
					$masa = 1;
				}else if($value == "oregano"){
					$oregano = 1;
				}
				$precio+=0.5;
				$pizza[] = $value;
			}
			if($masa == 1 && $oregano == 1){
				echo "El precio base es de ".$preciobase." euros.<br>";
				echo "Los ingredientes solicitados son: ";
				foreach($pizza as $key => $value){
					echo $value." ";
					if($key == count($pizza)-2){
						echo "y ";
					}
				}
				
				echo "<br>El precio de la pizza será de ".$precio." euros.";
			}else{
				if($masa == 0 && $oregano == 0){
					echo "No has seleccionado ni lasa masa ni el orégano, vuelve a intentarlo";
				}else if($masa == 0){
					echo "No has seleccionado la masa, vuelve a intentarlo.";
				}else if($oregano == 0){
					echo "No has seleccionado el orégano, vuelve a intentarlo.";
				}
			}
			
		}else{
		?>
			<div style="margin: 30px 10%;">
			<h3>Haz tu propia pizza</h3>
			<form action="<?=$_SERVER['PHP_SELF'];?>" method="post" id="myform" name="myform">
				<input type="checkbox" name="pizza[]" value="masa" checked> Masa
				<input type="checkbox" name="pizza[]" value="oregano" checked> Orégano
				<input type="checkbox" name="pizza[]" value="tomate"> Tomate
				<input type="checkbox" name="pizza[]" value="bacon"> Bacon
				<input type="checkbox" name="pizza[]" value="atun"> Atún
				<input type="checkbox" name="pizza[]" value="4quesos"> 4 quesos
				<input type="checkbox" name="pizza[]" value="mozzarella"> Mozzarella
				<input type="checkbox" name="pizza[]" value="champis"> Champiñones
				</br></br>
				<button id="mysubmit" type="submit">Submit</button><br><br>
			</form>
		<?
	}
	?>

</body>
</html>