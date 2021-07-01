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
	<form action="" method="POST" role="form">
		<legend>Ứng dụng chuyển đổi tiền tệ</legend>
	
		<div class="form-group">
			<label for="">Nhập số tiền cần chuyển đổi</label>
			<input type="text" class="form-control" id="" placeholder="Input field" name="vnd">
		</div>
	
		
	
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
	<?php 
		$rate = 23000;
		if(isset($_POST["submit"])){
			$USD = $_POST["vnd"]/ $rate;
			echo $USD . " USD";
		}
		
	 ?>
</body>
</html>