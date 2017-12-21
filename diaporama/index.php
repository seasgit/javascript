<?php
	require 'database/connex.php';
	$datas = $dbh->query("SELECT * FROM diaporama")->fetchAll(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>diaporama JS</title>
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<div class="main">
		<div class="diapo">
			<div class="photos">
			<?php foreach($datas as $P): ?>
				<img src="assets/img/<?= $P->nom ?>">
				<p><?= $P->legende ?></p>
			<?php endforeach ?>
			</div>
			<div class="btn prec"></div>
			<div class="btn suiv"></div>
		</div>
	</div>
	<script src="assets/js/main.js"></script>
</body>
</html>