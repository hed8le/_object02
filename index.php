<!DOCTYPE html>
<html>

<head>
	<title>_object02</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- Hier kann PHP geübt werden -->
	<?php  
		class Auto {
			// Eigenschaft
			public $a = 'Touran';
			// Methode
			function displayAuto() {
				echo $this->a;
			}
		}

		$obj = new Auto;
		$obj->displayAuto();

		$a = 5;
		$b = 7;
		if ($b > $a) {
			echo "<br>";
			echo "$b ist größer als $a <br>";
		}

		$zahlen = array(10, 20, 30, 40);
		foreach ($zahlen as $value) {
			echo "Wert: $value <br>";
		}
	?>
	
	<p>************************************************</p>
	<p><strong>Interessante Quellen zu PHP:</strong></p>
	<ul>
		<li><a href="http://www.php.net/manual/de/langref.php"></a></li>
		<li><a href="http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/" target="_blank">http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/</a>
		<li><a href="http://us2.php.net/tut.php" target="_blank">http://us2.php.net/tut.php</a>
		<li><a href="http://www.w3schools.com/PHP/Default.asp" target="_blank">http://www.w3schools.com/PHP/Default.asp/</a>
	</ul>
	<script>

	</script>
</body>

</html>