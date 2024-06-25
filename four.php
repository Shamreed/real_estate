<?php

  include('config/db_connect.php');

  if(isset($_POST['delete'])){

    $id_delete = mysqli_real_escape_string($conn, $_POST['id_delete']);

    $sql = "DELETE FROM sellers WHERE slr_id = $id_delete";

    if(mysqli_query($conn, $sql)){
      //success
      header('Location: four.php');    
    }else{
      echo 'query error: ' . mysqli_error($conn);
    }

  }

//query
$sql = 'SELECT * FROM sellers';

//make query and get result
$result = mysqli_query($conn, $sql);

//fetch result
$real_estate = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free the memory
mysqli_free_result($result);

//close connection
mysqli_close($conn);


?>


<!DOCTYPE html>
<html>
  
  <?php include('templets/head4.php'); ?>

 
  <?php include('templets/footer.php'); ?>



</html>
