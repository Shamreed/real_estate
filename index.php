<?php

  include('config/db_connect.php');

  $errors = array('email'=>'', 'password'=>'');

  if(isset($_POST['login'])){

    //check email
    if(empty($_POST['email'])){
      $errors['email'] = 'email is required <br />';
    } else {
      $email = $_POST['email'];
      if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'email must be valid';
      }
    }

    //check password
    if(empty($_POST['password'])){
      $errors['password'] = 'password is required <br />';
    } else {
      $password = $_POST['password'];
      if(!preg_match('/^[a-zA-Z0-9]+$/',$password)){
        $errors['password'] = 'Password must be valid';
      }
    }

    if(array_filter($errors)){
      //echo 'error';

    } else {
      //echo 'valid';
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      $sql =  "SELECT * FROM login WHERE login_email = '$email' AND login_password = '$password'";  
      
      //store the result
      $result = mysqli_query($conn, $sql);

      //store the result as an array
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

      //check the count
      $count = mysqli_num_rows($result);

      if($count == 1){
        header('Location: sec.php');
      } else {
        echo 'query error:'.mysqli_error($conn);
      }
      
    }
  }


?>

<!DOCTYPE html>
<html>
  
  <?php include('templets/header.php'); ?>

  <?php include('templets/footer.php'); ?>



</html>
