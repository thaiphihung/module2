<!DOCTYPE html>
<html>
<head>
	<title>Product Discount Calculator</title>
</head>
<body>
	<h1>Product Discount Calculator</h1>
	<form action="display_discount.php" method="post">
		<label for="product_description">Product Description:</label>
		<input type="text" id="product_description" name="product_description"><br><br>

		<label for="list_price">List Price:</label>
		<input type="number" id="list_price" name="list_price"><br><br>

		<label for="discount_percent">Discount Percent:</label>
		<input type="number" id="discount_percent" name="discount_percent"><br><br>

		<input type="submit" value="Calculate Discount">
	</form>
</body>
</html>