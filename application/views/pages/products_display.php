<!--
 - Author: Jomar Oliver Reyes
 - Author URL: https://www.jomaroliverreyes.com
-->

<!-- This file will display all the lists of products. -->
<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
<h1><?php echo $title; ?></h1>
<table>
    <thead>
        <tr>
            <!-- Titles of columns -->
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Description</th>
            <th>Product Price</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!-- Displays the list of songs -->
        <?php foreach($products as $product): ?>
        <tr>
            <td><?php echo $product['product_id']; ?></td>
            <td><?php echo $product['product_name']; ?></td>
            <td><?php echo $product['product_desc']; ?></td>
            <td><?php echo $product['product_price']; ?></td>
            <!-- Redirects to the page containing details of a specific product -->
            <td><a href="<?php echo base_url('products/view/'.$product['product_slug']); ?>">View</a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>