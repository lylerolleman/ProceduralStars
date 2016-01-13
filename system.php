<html>
	<head>
		<link rel="stylesheet" type="text/css" href="mainstyle.css">
		<script type="text/javascript" src="Assets/Astros.js"></script>
		<script type="text/javascript">
			<?php
				session_start();
				srand($_SESSION["seed"]);
				$numplans = rand(1, 5);
				$dist = 600;
				$hyp = 100;
				$stars = scandir("Assets/Images/Stars");
				$starpath = "Assets/Images/Stars/" . $stars[rand(2, count($stars)-1)];
				echo "var cent = new Astro(500, 700, 75, 75, 0, 0, 0, 'star', '$starpath')\n";
				echo "var Astros = new Array\n";
				$rotmult = 2.0;
				$plans = scandir("Assets/Images/Planets");
				
				for ($j = 0; $j<$numplans; $j++) {
					$rot = ($rotmult*3.14)/180;
					$size = rand(40, 60);
					$x = 500;
					$y = $dist;
					$ang = rand(0, 4);
					$id = $j;
					$imgpath = "Assets/Images/Planets/" . $plans[rand(2, count($plans)-1)];
					echo "Astros[Astros.length] = new Astro($x, $y, $size, $size, $hyp, $rot, $ang, '$id', '$imgpath')\n";
					$dist = $dist - 100;
					$hyp = $hyp + 100;
					$rotmult = $rotmult - 0.4;
				}
			?>
		</script>
		<script type="text/javascript" src="Assets/init.js"></script>
		<script type="text/javascript" src="Assets/animate.js"></script>
		<script type="text/javascript">
			window.onload = initanim
		</script>
	</head>
	<body>
		<?php
			echo "<img id='star'>";
			for ($i = 0; $i<$numplans; $i++) {
				echo "<img id='$i'>";
			}
		?>
	</body>
</html>