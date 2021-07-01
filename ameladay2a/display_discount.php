<?php 
	session_start();
	if(isset($_SESSION["description"])){
		$description = $_SESSION["description"];
		$price = $_SESSION["price"];
		$discount = $_SESSION["discount"];
	}else{
		echo "no session";
	}
	

 ?>

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
		<div class="row">
			
				<?php echo "mô tả sản phẩm: " . $description; ?><br>
			
				
				<?php echo "giá sản phẩm ". $price; ?>  <br>
				<?php echo "tỉ lệ chiết khấu " . $discount?> <br>
				<?php 
					$Discount_Amount = $price*$discount*0.01;
					$Discount_Price = $price - $Discount_Amount;
					echo "lượng chiết khấu là: ". $Discount_Amount;
					echo "giá sau khi chiết khấu". $Discount_Price;
				 ?>

			
		</div>

	</div>
</body>
</html>