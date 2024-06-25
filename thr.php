<?php
  include('config/db_connect.php');

  $errors = array('name'=>'', 'phno'=>'','address'=>'','type'=>'','size'=>'','price'=>'');

  if(isset($_POST['submit'])){

    //save name
      if(empty($_POST['name'])){
      
      } else {
        $name = $_POST['name'];
      }

     //save phno
     if(empty($_POST['phno'])){
     
     } else {
       $phno = $_POST['phno'];
     }

     //save address
     if(empty($_POST['address'])){
     
     } else {
       $address = $_POST['address'];
     }

     //save type
     if(empty($_POST['type'])){
     
     } else {
       $type = $_POST['type'];
     }

     //save size
     if(empty($_POST['size'])){
     
     } else {
       $size = $_POST['size'];
     }

     //save price
     if(empty($_POST['price'])){
     
     } else {
       $price = $_POST['price'];
     }



    if(array_filter($errors)){
      //echo 'error';

    } else {
      //echo 'valid';

      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $phno = mysqli_real_escape_string($conn, $_POST['phno']);
      $address = mysqli_real_escape_string($conn, $_POST['address']);
      $type = mysqli_real_escape_string($conn, $_POST['type']);
      $size = mysqli_real_escape_string($conn, $_POST['size']);
      $price = mysqli_real_escape_string($conn, $_POST['price']);

      $sql =  "INSERT INTO sellers(slr_name, slr_ph, slr_address, prop_type, prop_size, prop_price) VALUES('$name','$phno','$address','$type','$size','$price')";  
      
      //save to db
      if(mysqli_query($conn, $sql)){
        header('Location: four.php');
      } else {
        echo 'query error:'.mysqli_error($conn);
      }
      
    }
  }

?>
<!DOCTYPE html>
<html>
  
  <?php include('templets/head3.php'); ?>

  <?php include('templets/footer.php'); ?>

</html>