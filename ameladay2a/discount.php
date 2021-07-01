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
		<form action="" method="POST" role="form">
			<legend>Product</legend>

			<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Product Description</label>
				<input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mo ta san pham" name="description">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">List Price</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Gia niem yet san pham (VND)" name="price">
			</div>
			<div class="mb-3">
				<label for="formGroupExampleInput2" class="form-label">Discount Percent</label>
				<input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Tỷ lệ chiết khấu (phần trăm)" name="discount">
			</div>
			

			<button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>

	</div>
	<?php 
		session_start();
		if(isset($_POST["submit"])){
			$_SESSION["description"]= $_POST["description"];
			$_SESSION["price"] = $_POST["price"];
			$_SESSION["discount"]= $_POST["discount"];
			echo $_SESSION["description"];
			header("Location:display_discount.php");
		}
		echo "no Submit";


	 ?>
	
</body>
</html>