<html>
	<Head><meta charset=”utf-8”></Head>
	<body>
	<form  method="GET">
	Перевод из полярных координат в декартовые:
	<p><img src="photo.jpg" width="241" height="239" alt="" /> </p>
	Длина вектора = <input type="text" name="vector" value="<?php
		if (isset($_GET['vector'])){
			echo htmlspecialchars ($_GET['vector']);
		}
	    ?>">
	Угол(радиан) =<input type="text" name="angle" value="<?php
		if (isset($_GET['angle'])){
			echo htmlspecialchars ($_GET['angle']);
		}
	   ?>">
Декортовые координаты=<input type="submit" name="compute" value="Вычислить">
</form>

<?php
		function dot_x($vector,$angle) {
			return((intval($vector))*(cos(intval($angle))));
		}
		function dot_y($vector,$angle) {
			return((intval($vector))*(sin(intval($angle))));
		}

		if (isset($_GET['vector']) && isset($_GET['angle'])) {
			if ((!(is_numeric($_GET['vector'])))||(!(is_numeric($_GET['angle'])))) {
				echo 'Значение координат может быть только числом!';
			} else {
				echo number_format((dot_x($_GET['vector'],$_GET['angle'])),2,',','')."</br>";
				echo number_format((dot_y($_GET['vector'],$_GET['angle'])),2,',','');
		
				}
		}
?>
</body>	
</html>	
