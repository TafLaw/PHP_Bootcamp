<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "Rush00");
?>
<!doctype html>
<html>
<head>
    <title>rush00</title>
</head>
<body>
<div class="container" style="width:60%;">
	<h2 align="center">rush00</h2>
    <?php
	$query = "SELECT * FROM products ORDER BY id ASC";
	$result = mysqli_query($connect, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			?>
            <div style="width: 40%; box-shadow: 4px 4px 22px gray;">
            <form method="post" action="cart.php?action=add&id=<?php echo $row["id"]; ?>">
            <div style="padding:10px;" align="center">
            <img src="<?php echo $row["image"]; ?>" class="img-responsive" alt="samsung" width="80%" height="80%">
            <h5><?php echo $row["p_name"]; ?></h5>
            <h5>R <?php echo $row["price"]; ?></h5>
            <input type="text" name="quantity" class="form-control" value="1" style="width: 60%">
            <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" class="btn btn-default" value="Add to Cart">
            <input type="submit" name="view" style="margin-top:5px" value="go to cart">
            </div>
            </form>
            </div>
            <?php
		}
	}
	?>
 </body>
</html>