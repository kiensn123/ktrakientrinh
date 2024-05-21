<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
</head>
<body>
    <h1>Add New Product</h1>
        <form method="POST" action="/products">
        
        <input type="text" name="product_type" placeholder="Product Type" required><br>
        <input type="text" name="product_code" placeholder="Product Code" required><br>
        <input type="text" name="product_name" placeholder="Product Name" required><br>
        <input type="number" name="quantity" placeholder="Quantity" required><br>
        <input type="text" name="note" placeholder="Note"><br>
        <button type="submit">Add Product</button>
    </form>
</body>
</html>