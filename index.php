<?php 
// Include and initialize database class// 

include_once 'database.php'; 
$db = new Database; 
 
// Get all products from database 
$products = $db->getRows('products'); 
?>

<!-- List products -->
<?php
if(!empty($products)){
    foreach($products as $row){
?>

<div class="item">
    <img src="images/<?php echo $row['image']; ?>"/>
    <p>Name: <?php echo $row['name']; ?></p>
    <p>Price: <?php echo $row['price']; ?></p>
    <a href="checkout.php?id=<?php echo $row['id']; ?>">BUY</a>
</div>

<?php }
}else{
    echo '<p>Product(s) not found...</p>';
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Paypal</title>
</head>
<body>



</body>
</html>

