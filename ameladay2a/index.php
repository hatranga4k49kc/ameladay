
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="mb-3">
			<form action="" method="POST" role="form">
				<legend>Future Value Calculator</legend>

				<div class="form-group">
					<label for="">label</label>
					<input type="text" class="form-control" id="" placeholder="Lượng tiền đầu tư ban đầu" name="InventmentAmount">
					<input type="text" class="form-control" id="" placeholder="Lãi suất năm" name="YearlyInterestRate">
					<input type="text" class="form-control" id="" placeholder="Số năm đầu tư " name="NumberOfYears">

				</div>



				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<div>
				<?php 
				if(isset($_POST["InventmentAmount"]) ){
					$InventmentAmount = $_POST["InventmentAmount"];
					$YearlyInterestRate = $_POST["YearlyInterestRate"];
					$NumberOfYears = $_POST["NumberOfYears"];
					for ($i=0; $i <$NumberOfYears  ; $i++) { 
						$InventmentAmount = $InventmentAmount * (1+ $YearlyInterestRate);
					};

					echo $InventmentAmount;

				};


				



				?>
			</div>
		</body>
		</html>
