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
	session_start();
	require_once 'header.php';
?>
<body style="margin: 40px;">

	<div class="container-fluid">
		
		<div class="row p-3">
			<div class="card">
				<div class="card-body">
					<div class="col-md-12 d-flex justify-content-center"> 
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="income_add.php" aria-current="page">Income</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="expense_add.php" aria-current="page">Expense</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="card-title">
					<h3>Income</h3>
				</div>
				<div>
		    <?php 
				if($_SESSION['sql_insert_control']=="ok"){?>
					<div class="alert alert-success">
							Success
						</div>
					<?php }
					else if($_SESSION['sql_insert_control']=="err"){?>
						<div class="alert alert-warning">
							Error
						</div>
					<?php 
					}?>
					
				</div>
				<div class="card-text">
					<form class="form-control" action="income_insert.php" method="post">
					<input class="form-control" type="text" placeholder="0.0$" name="income_amount"><br>
					<input class="form-control" type="date" name="income_date"><br>
					<select name="income_category" class="form-select">
					<option selected>Choose</option>
						<option>Salary</option>
						<option>Additional Income</option>
						<option>Freelance</option>
						<option>Other</option>
					</select>
					<a href="incomesql.php"><button style="margin-top: 20px;" class="btn btn-lg btn-outline-dark w-100"> + Add</button></a>
					</form>
				</div>
			</div>
		</div>
		
	</div>

</body>
<?php 
	require_once 'footer.php';
?>
</html>