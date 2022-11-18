<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
		<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php
	require_once 'header.php';
	require_once 'connectdb.php';
	?>
<body class="bg-light">
	<div class="container-fluid w-50">
		<div id="carousel" class="carousel slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<?php 
					$sql=$db->prepare("SELECT * FROM slider_tbl");
					$sql->execute();
					while ($sqlquery=$sql->fetch(PDO::FETCH_ASSOC)) {?>
						<div class="carousel-item <?= ($sqlquery['slider_img_order']==1) ? 'active' : ' ' ?>">
					<img class="d-block w-100" alt="" src="<?php echo $sqlquery['slider_img']; ?>">
				</div>
					<?php } ?>
				?>
				
				<div class="carousel-item">
					<img class="d-block w-100" alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT_5hXjUTNEZ9rR-dodpHw4327WpFtik6XHtBM-ZXm7uA&s">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" alt="" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTcxchGo0JZFDXC6sZkOhomsG48gHXThGuSjRPPoCn12g&s">
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
				<span class="carousel-control-prev-icon"></span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
				<span class="carousel-control-next-icon"></span>
			</button>
		</div>
	</div>
</body>
<?php
	require_once 'footer.php'
	?>
</html>
