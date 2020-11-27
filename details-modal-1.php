<?php 
$connect = mysqli_connect("localhost", "root", "abcd", "cart");
$query = "SELECT * FROM tbl_product ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        $d= array();
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            $d[] = $row;

          }
        }
if(isset($_POST["add_to_cart"]))
{
  if(isset($_SESSION["shopping_cart"]))
  {
    $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
    if(!in_array($_GET["id"], $item_array_id))
    {
      $count = count($_SESSION["shopping_cart"]);
      $item_array = array(
        'item_id'     =>  $_GET["id"],
        'item_name'     =>  $_POST["hidden_name"],
        'item_price'    =>  $_POST["hidden_price"],
        'item_quantity'   =>  $_POST["quantity"]

      );
      $_SESSION["shopping_cart"][$count] = $item_array;
    }
  }
  else
  {
    $item_array = array(
      'item_id'     =>  $_GET["id"],
      'item_name'     =>  $_POST["hidden_name"],
      'item_price'    =>  $_POST["hidden_price"],
      'item_quantity'   =>  $_POST["quantity"]
    );
    $_SESSION["shopping_cart"][0] = $item_array;
  }
}
if(isset($_GET["action"]))
{
  if($_GET["action"] == "delete")
  {
    foreach($_SESSION["shopping_cart"] as $keys => $values)
    {
      if($values["item_id"] == $_GET["id"])
      {
        unset($_SESSION["shopping_cart"][$keys]);
        echo '<script>alert("Item Removed")</script>';
        echo '<script>window.location="index.php"</script>';
      }
    }
  }
}


?>
<head>
<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Web Store</title>
<!--BootStrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--Fontawesome-->
<script src="https://kit.fontawesome.com/30c615d078.js" crossorigin="anonymous"></script>	
<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>




<body>
	

<div class="modal fade details-1" id="details-1" tableindex="-1" role="dialog"
aria-labelledby="details-1" aria-hidden="true"  
>
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title text-left text-color"><?php echo $d[0]["name"];?></h4>
				 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-sm-6">
							<div class="center-block">
								<img src="./images/<?php echo $d[0]["image"]; ?>" class="details img-fluid" style="height: 400px" style="widows: 400px">
							</div>
						</div>
						<div class="col-sm-6 text-color">
							<h4>Details</h4>
							<p>Android</p>
							
							<p>Price: $<?php echo $d[0]["price"];?></p>
							<form action="shop.php?action=add&id=<?php echo $d[0]["id"]; ?>" method="post">
								<div class="form-group">
									<div class="col-xs-3">
										<label for="quantity" id="quantity-label">Quantity:</label>
										<input type="text" class="form-control" id="quantity" name="quantity" value="1" style="width: 60px">
										<input type="hidden" name="hidden_name" value="<?php echo $d[0]["name"]; ?>" />
										<input type="hidden" name="hidden_price" value="<?php echo $d[0]['price']; ?>" />
									</div><br>
									<div class="form-group">
										<label for="color">Color:</label>
										<select name="color" id="color" 
										class="form-control">
											<option value=""></option>
											<option value="Red">Red</option>
											<option value="Green">Green</option>
											<option value="Blue">Blue</option>

										</select>
									</div>
								</div>
							
						</div>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button class="btn btn-default" data-dismiss="modal">Close</button>
				<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn bg-primary-color text-white" value="Add to Cart" /></form>
			</div>
		</div>
	</div>
</div>
</form>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./js/main.js"></script>
</body>