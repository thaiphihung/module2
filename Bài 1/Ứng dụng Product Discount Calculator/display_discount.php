<!DOCTYPE html>
<html>
<head>
	<title>Product Discount Calculator - Result</title>
</head>
<body>
	<?php
	$product_description = $_POST['product_description'];
	$list_price = $_POST['list_price'];
	$discount_percent = $_POST['discount_percent'];

	$discount_amount = $list_price * $discount_percent * 0.01;
	$discount_price = $list_price - $discount_amount;

	echo "<h1>Product Discount Calculator - Result</h1>";
	echo "<p>Product Description: $product_description</p>";
	echo "<p>List Price: $list_price</p>";
	echo "<p>Discount Percent: $discount_percent%</p>";
	echo "<p>Discount Amount: $discount_amount</p>";
	echo "<p>Discount Price: $discount_price</p>";
	?>
</body>
</html>