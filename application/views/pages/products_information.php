<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!-- This file will display the information for each product and there will be a single page for each product information. -->
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <strong>Product ID</strong>: <?php echo $products['product_id']; ?> <br/>
    <strong>Product Name</strong>: <?php echo $products['product_name']; ?> <br/>
    <strong>Product Description</strong>: <?php echo $products['product_desc']; ?> <br/>
    <strong>Product Price</strong>: <?php echo $products['product_price']; ?>

</body>
</html>