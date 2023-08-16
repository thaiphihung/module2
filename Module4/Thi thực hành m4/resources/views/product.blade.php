<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/calculate-discount" method="POST">
        @csrf
    <p>
        <input type="text" name = "product_description" placeholder="Product Description ">
    </p>
     <p>
        <input type="text" name = "list_price" placeholder="List Price ">
    </p>
    <p>
        <input type="text" name = "discount_percent" placeholder="Discount Percent ">
    </p>
    <p>
        <button type="submit">
            Calculator
        </button>
    </p>
    </form>
</body>
</html>