<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "Rush00");
if(isset($_POST["add"]))
{
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
			'product_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
			echo '<script>window.location="product.php"</script>';
		}
		else
		{
			echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="product.php"</script>';
		}
	}
	else
	{
		$item_array = array(
		'product_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'product_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
                echo '<form action="product.php"><input type="submit" name="submit" value="back"></form>';
				/* echo '<script>window.location="product.php"</script>'; */
			}
		}
    }
}
if (isset($_GET["view"]))
{
    if ($_GET["view"] == "go to cart")
        echo '<script>window.location="cart.php"</script>';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Rush00</title>
    </head>
    <body>
    <div style="border: 2px solid black;">
    <h2>Your Orders</h2>
    <div class="prod-block">
    <?php
	if(!empty($_SESSION["cart"]))
	{
		$total = 0;
		foreach($_SESSION["cart"] as $keys => $values)
		{
			?>
            <?php echo $values["item_name"]; ?>
            <?php echo $values["item_quantity"] ?>
            <p>R <?php echo $values["product_price"]; ?></p>
            <p>R <?php echo number_format($values["item_quantity"] * $values["product_price"], 2); ?></p>
            <a href="cart.php?action=delete&id=<?php echo $values["product_id"]; ?>"><span>remove</span></a>
            <?php 
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		?>
        <p>Total</p>
        R <?php echo number_format($total, 2); ?>
        <?php
	}
	?>
    </div>
    </div>
    </body>
<html>