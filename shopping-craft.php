<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	  <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">
</head>
<body class="container">
	<form action="index.php" method="post">
	<button type="submit" class="btn btn-success">Return Home </button>
	</form>
	<h1 class="text-center text-danger mb-5" 
	style="font-family: 'Abril Fatface', cursive;">Shopping At 1992 Shop </h1>
	
	<div class="row">

	<?PHP

	$con = mysqli_connect('localhost','root');
	mysqli_select_db($con,'quanlybanhang');

	// if($con){
	// 	echo "connection succussful";
	// }else{
	// 	echo "no connection";
	// }

	$query = " SELECT * FROM `hanghoa` order by MSHH ASC ";

	$queryfire = mysqli_query($con, $query);

	$num = mysqli_num_rows($queryfire);

	if($num > 0){
		while($product = mysqli_fetch_array($queryfire)){
			?>
			
		<div class="col-lg-4 col-md-3 col-sm-12">
			<form>
				<div class="card">
					<h6 class="card-title bg-info text-white p-2 text-uppercase"> <?php echo
					 $product['TenHH'];  ?> <span>(Mã <?php echo  $product['MaNhom']; ?>) </span>  </h6>

					<div class="card-body">
						 <img src="<?php echo
					 $product['Hinh'];  ?>" alt="phone" class="img-fluid mb-2" >

					 <h6> <?php echo $product['Gia']; ?><span>( Số lượng: <?php echo $product['SoLuongHang']; ?> ) </span> </h6> 

					 <input type="text" name="" class="form-control" placeholder="Quantity">

					</div>
					<div class="btn-group d-flex">
						<button class="btn btn-success flex-fill"> Add to cart </button> <button class="btn btn-warning flex-fill text-white"> Buy Now </button>
					</div>


				</div>
			</form>

		</div>


	<?php		
		}
	}
	?>
	
</body>
</html>