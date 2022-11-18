<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
</head>
<?php 
    require_once 'header.php';
?>
<body>
<div class="row p-5">
			<div class="card">
				<div class="card-body">
					<div class="col-md-12 d-flex justify-content-center"> 
						<ul class="nav nav-tabs">
							<li class="nav-item">
								<a class="nav-link active" href="#" aria-current="page">Income</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="chart_expense.php" aria-current="page">Expense</a>
							</li>
						</ul>
					</div>
				</div>
</body>
<script>
    const chart = document.getElementById('myChart');
    const myChart = new Chart(chart, {
        type: 'doughnt',
        data: {
            labels:['Bills','Education','Shop','House Rent'],
            datasets: [{
                label: '',
                data: [12,19,3,5],
                backgroundColor: [

                ]
            }],
        }
    });

</script>
<?php 
    require_once 'footer.php';
?>
</html>