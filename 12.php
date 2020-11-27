<?php require 'header.php';
$connect = mysqli_connect("localhost", "root", "abcd", "cart");

$query = "SELECT * FROM products ORDER BY id ASC";
$id=$connect->query($query);
?>
<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "abcd", "cart");
$query = "SELECT * FROM products ORDER BY id ASC";
        $result = mysqli_query($connect, $query);
        $d= array();
        if(mysqli_num_rows($result) > 0)
        {
          while($row = mysqli_fetch_assoc($result))
          {
            $d[] = $row;

          }
        }





        print_r($d)
        ?>