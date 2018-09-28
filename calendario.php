<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<?
		$row = 7;
		$col = 7;
		$day = array('Lunes','Martes','Miercoles','Jueves','Viernes','Sabado','Domingo');
		$month = array('January' => '31', 'February' => '28', 'March' => '31', 'April' => '30', 'May' => '31', 'June' => '30', 'July' => '31', 'August' => '31', 'September' => '30', 'October' => '31', 'November' => '30', 'December' => '31');
		$date = getdate();
		$actualMonth = $month[$date[month]];
		$count = 1;
		$start = 5; //0 = Lunes, 6 = domingo
		//echo "<h1>".$date[month]."</h1>";
		?>
		<h1><?=$date[month]?></h1>
		<table><?
			for($i=0;$i<$row;$i++){
				if($count > $actualMonth){
					continue;
				}else{
					?><tr><?
					for($j=0;$j<$col;$j++){
						if($i==0){
							?><td><?=$day[$j]?></td><?
						}else{
							if($start == 0){
								if($count <=$actualMonth){
									?><td><?=$count?></td><?
									$count++;
								}else{
									?><td></td><?
								}
							}else{
								?><td></td><?
								$start--;
							}
						}
					}
					?></tr><?
				}
			}
	?>
</body>
</html>