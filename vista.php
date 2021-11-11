<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="estilos.css">
	<title>Lista de mobiliarios</title>
</head>
<body>
	<div class="contenedor">

		<?php
	foreach ($contents as $content) {
		$title = $content['title'];
		$title_image_thumb = $content['title_image_thumb'];
		?>
	<div class="mobiliario">
		<img class="poster" src="<?=$title_image_thumb?>">
		<h3 class="titulo"><?=$title?></h3>
	</div>
	<?php	
	}
	?>
	</div>
	
	<div class="paginacion">
		<button id="btnAnterior">Anterior</button>
		<button id="btnSiguiente">Siguiente</button>
	</div>

	<script></script>
	<script src="app.js"></script>
</body>
</html>