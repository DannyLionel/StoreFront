<?php require 'header.php';
$connect = mysqli_connect("localhost", "root", "abcd", "shop");

$query = "SELECT * FROM products ORDER BY id ASC";
$id=$connect->query($query);
?>
<?php 
session_start();
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
    }  }
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
<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Shop</title>
<!--BootStrap-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!--Fontawesome-->
<script src="https://kit.fontawesome.com/30c615d078.js" crossorigin="anonymous"></script>
<!--Slick slider-->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>

<!--Custom CSS-->
<link rel="stylesheet" type="text/css" href="./css/style.css">
</head>

<body>
	<main>
    
	  <div class="container">
          <div class="newseller">
            <div class="row">
              <div class="col-md-12 col-sm-6">
                <h1 class="text-color" align="center">Shop</h1>
               
                <div class="row py-3">
                   <?php while ($products = mysqli_fetch_assoc($id)): {
                  # code...
                } ?>
                  <div class="col-md-3 p-2">
                    <div>
                    	<h3 class="text-color"><?=$products['title']; ?></h3>
                      <img src="<?=$products['image']; ?>" alt="<?=$products['title']; ?>" class="img-fluid" style="height: 400px" style="width: 400px">
                      <h4 class="price text-color">$<?=$products['price']; ?></h4>
                      <button class="btn bg-primary-color text-white" data-toggle="modal" data-target="#details-<?=$products['modal'];?>">View Info</button>
                    </div>
                
                </div>
                 <?php endwhile; ?>

                </div>
                             </div>
        </div>
    </div>

</div>

</main>
<?php include 'details-modal-1.php';
      include 'details-modal-2.php';
      include 'details-modal-3.php';
      include 'details-modal-4.php';
      include 'details-modal-5.php';
      include 'details-modal-6.php';
      include 'details-modal-7.php';
      include 'details-modal-8.php';
 ?>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="./js/main.js"></script>
<?php  require 'footer.php'; ?>
</body>
</html>