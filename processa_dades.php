<!DOCTYPE html>
<html>
<head>
	<title>Fun with forms</title>
</head>
<body>
	<?
		foreach($_REQUEST as $key => $value){
			echo $key.": ";
			if(gettype($value) == "array"){
				foreach($value as $valor){
					echo $valor."<br>";
				}
			}else{
				if(empty($value)){
					echo "No ha introducido datos.</br>";
				}else{
					echo $value."</br>";
				}
			}
		}
	?>
</body>
</html>