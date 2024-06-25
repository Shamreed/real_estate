<?php

  include('config/db_connect.php');

  $errors = array('email'=>'', 'password'=>'', 'user'=>'', 'ph'=>'');

  if(isset($_POST['sign'])){

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

    if(empty($_POST['user'])){
      $errors['user'] = 'username is required <br />';
    } else {
      $user = $_POST['user'];
    }

    if(empty($_POST['ph'])){
      $errors['ph'] = 'phone number is required <br />';
    } else {
      $ph = $_POST['ph'];
    }


    if(array_filter($errors)){
      //echo 'error';

    } else {
      //echo 'valid';
      $user = mysqli_real_escape_string($conn, $_POST['user']);
      $email = mysqli_real_escape_string($conn, $_POST['email']);
      $ph = mysqli_real_escape_string($conn, $_POST['ph']);
      $password = mysqli_real_escape_string($conn, $_POST['password']);

      //insert signup data
      $sql_su = "INSERT INTO signup(username, email, ph, password) VALUES('$user','$email','$ph','$password')";
   
      if(mysqli_query($conn, $sql_su)){
        //insert to login
        $sql_lo = "INSERT INTO login(login_email, login_password) VALUES('$email', '$password')";
        if(mysqli_query($conn, $sql_lo)){
          header('Location: index.php');
        }
        else {
          echo 'query error:' . mysqli_error($conn);
        }
      }
  }
}


?>

<!DOCTYPE html>
<html>
  
  <?php include('templets/head0.php'); ?>

  <?php include('templets/footer.php'); ?>



</html>