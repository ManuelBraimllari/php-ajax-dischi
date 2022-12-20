<?php
include __DIR__ . '/settings.php';
include __DIR__ . '/data.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" href="style.css">
</head>
<body>

	<main>
		<div class="container">
			<div id="discs-container"><?php
				foreach ($arr_discs as $disc) { ?>

					<div class="disc">
						<img src="<?= $disc['immagine'] ?>" alt="<?= $disc['title'] ?>">
						<strong><?= $disc['titolo'] ?></strong>
						<small><?= $disc['autore'] ?></small>
						<small><?= $disc['anno'] ?></small>
					</div><?php

				} ?>
			</div>
		</div>
	</main>
</body>
</html>