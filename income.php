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
<body class="bg-light" style="padding: 90px;">
<div class="container">
	<div class="row">
		<div class="col-md-12 p-3">
			<div class="card">
				<div class="card-body">
					<h3 class="card-title">Income</h3>
					<p class="card-text">Enter an income</p>
					<a href="income_add.php" class="btn w-100 btn-lg btn-outline-dark"> + Add Income</a>
				</div>
			</div>
		</div>
		<div class="col-md-12 p-3">
		<div class="card">
			<div class="card-body">
				<h3 class="card-title">Expense</h3>
				<p class="card-text">Enter an expense</p>
				<a href="expense_add.php" class="btn w-100 btn-lg btn-outline-dark"> - Add Expense</a>
			</div>
		</div>
	</div>
	</div>
</div>
<?php require_once 'footer.php'; ?>
</body>
</html>