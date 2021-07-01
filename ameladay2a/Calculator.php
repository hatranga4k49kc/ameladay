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


		<form action="" method="POST" role="form" class="col-md-6">
			<div class="mb-3 ">
				<label for="formGroupExampleInput" class="form-label">First operand</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder" name="number_1">
			</div>

				<label for="formGroupExampleInput" class="form-label">First operand</label>
			<select class="form-select " aria-label="Default select example" name = "math_symbols">
				<option value="+">Cộng</option>
				<option value="-">Trừ</option>
				<option value="*">Nhân</option>
				<option value="">Chia</option>
			</select>

			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Another label</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input placeholder" name ="number_2">
			</div>



			<button type="submit" class="btn btn-primary" name ="submit">Submit</button>
		</form>


		<?php 
			if (isset($_POST["submit"])) {
				$number_1=$_POST["number_1"];
				$number_2 = $_POST["number_2"];
				if($_POST["math_symbols"]== "+"){
					$result = $number_1 + $number_2;
					
				}
				if($_POST["math_symbols"]=="-"){
					$result = $number_1 - $number_2;
					
				}
				if($_POST["math_symbols"]=="*"){
					$result = $number_1 * $number_2;
					echo $result;
				}
				if($_POST["math_symbols"]==""){
					if ($number_2 != 0) {
						$result = $number_1 / $number_2;
					}else{
						$result = 'không thực hiện được phép chia';
					}
				}
				echo $result;
			}
			else{
				echo "No submit";
			}
		 ?>
	</div>
</body>
</html>