 <?php 
session_start();
include_once("db_connect.php");
include("inc/config.inc.php"); 
include("header.php"); 
?>
<title>cart</title>
<link href="style/style.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="script/cart.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php include('container.php');?>
<div class="container">	
	
	<div class="text-center">	
		<div class="col-md-12 text-right header-box">
		<a href="view_cart.php" class="cart-counter" id="cart-info" title="View Cart">            
			<span class="cart-item" id="cart-container"><?php 
			if(isset($_SESSION["products"])){
				echo count($_SESSION["products"]); 
			} else {
				echo 0; 
			}
			?></span>
		</a>
		</div>
		<div class="col-md-12 text-center">			
			<h2>Indian</h2>
			<ul class="products-container">
			<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products where product_code like "."'ind%'";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div class="cont">
						<img class="product_image" src="images/<?php echo $row["product_image"]; ?>">
						<div class="overlay">
       					<p class="text"><?php echo $row["product_desc"]; ?></p>
    					</div>
					</div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box">
						<div>
							Spicy :
							<select name="product_color">
							<option value="Low spicy">Low</option>
							<option value="Medium spicy">Medium</option>
							<option value="Spicy">High</option>
							</select>
						</div>	
						<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<button type="submit">Add to Cart</button>
					</div>
				</form>
				</li>
			<?php } ?>
			</ul>
		</div>	
		

		<div class="col-md-12 text-center">
		<h2>Chinese</h2>			
			<ul class="products-container">
			<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products where product_code like "."'chi%'";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div><img class="product_image" src="images/<?php echo $row["product_image"]; ?>"></div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box">
						<div>
							Spicy :
							<select name="product_color">
							<option value="Low spicy">Low</option>
							<option value="Medium spicy">Medium</option>
							<option value="Spicy">High</option>
							</select>
						</div>	
						<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<button type="submit">Add to Cart</button>
					</div>
				</form>
				</li>
			<?php } ?>
			</ul>
		</div>

		<div class="col-md-12 text-center">			
			<h2>Sandwich</h2>
			<ul class="products-container">
			<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products where product_code like "."'san%'";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div><img class="product_image" src="images/<?php echo $row["product_image"]; ?>"></div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box">
						<div>
							Spicy :
							<select name="product_color">
							<option value="Low spicy">Low</option>
							<option value="Medium spicy">Medium</option>
							<option value="Spicy">High</option>
							</select>
						</div>	
						<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<button type="submit">Add to Cart</button>
					</div>
				</form>
				</li>
			<?php } ?>
			</ul>
		</div>

		<div class="col-md-12 text-center">			
			<h2>Italian</h2>
			<ul class="products-container">
			<?php			
			$sql_query = "SELECT product_name, product_desc, product_code, product_image, product_price FROM shop_products where product_code like "."'ita%'";	
		    $resultset = mysqli_query($conn, $sql_query) or die("database error:". mysqli_error($conn));
			while( $row = mysqli_fetch_assoc($resultset) ) {
			?>
			<li>
				<form class="product-form">
					<h4><?php echo $row["product_name"]; ?></h4>
					<div><img class="product_image" src="images/<?php echo $row["product_image"]; ?>"></div>
					<div>Price : <?php echo $currency; echo $row["product_price"]; ?></div>
					<div class="product-box">
						<div>
							Spicy :
							<select name="product_color">
							<option value="Low spicy">Low</option>
							<option value="Medium spicy">Medium</option>
							<option value="Spicy">High</option>
							</select>
						</div>	
						<div>
							Qty :
							<select name="product_qty">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							</select>
						</div>					
						<input name="product_code" type="hidden" value="<?php echo $row["product_code"]; ?>">
						<button type="submit">Add to Cart</button>
					</div>
				</form>
				</li>
			<?php } ?>
			</ul>
		</div>

	</div>
</div>
<?php include('footer.php');?>