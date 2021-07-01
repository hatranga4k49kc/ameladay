<?php 
if(isset($_POST["submit"])){
	$numberPrime= $_POST["numberPrime"];

}else{
	echo "no submit";
}
function isPrimeNumber($n) {

	if ($n < 2) {
		return false;
	}
    // check so nguyen to khi n >= 2
	$squareRoot = sqrt($n);
	for ($i = 2; $i <= $squareRoot; $i++) {
		if ($n % $i == 0) {
			return false;
		}
	}
	return true;
}



if($numberPrime == 0){
	echo "vui lòng điền 1 số khác 0";


}if($numberPrime >= 1){
	echo ($numberPrime . " số nguyên tố đầu tiên là: ");
	$count = 0;
	$i = 2;
	while ($count < $numberPrime) {
		if (isPrimeNumber($i)) {
        echo ($i . " ;");
        $count++;
    }
    $i++;
	}
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
	<form action="" method="POST" role="form">
		<legend>Điền số lượng số nguyên tố đầu tiên cần in ra</legend>
		<input type="number" name="numberPrime">
		<button type="submit" class="btn btn-primary" name="submit">Submit</button>
	</form>
</body>
</html>