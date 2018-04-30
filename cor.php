<?php

	switch ($_GET[cor]) {

		case "r": $background = "rgb (255, 0 , 0)"; break;

		case "g": $background = "rgb (0, 255, 0)"; break;

		case "b": $backgroud = "rgb (0, 0, 255)"; break;
}

?>

<html>

	<body style="background: <?php echo $background;?>;">

		<? echo "<h1>Olá " . $_GET["nome"] . "</h1>"; ?>
	</body>	

</html>