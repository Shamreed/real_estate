<head>
  <title>sign up</title>
  <link rel="stylesheet" href="templets/create.css">
</head>
<body>
    <div class="contain">
      <p>
        Sign up
      </p>
      <form class="white" action="create.php" method="POST">
      <input name="user" class="first" type="text" placeholder="Username">
      <div class="red-text"><?php echo $errors['user']; ?></div>
      <input name="email" class="last" type="email" placeholder="Email">
      <div class="red-text"><?php echo $errors['email']; ?></div>
      <input name="ph" class="user" type="text" placeholder="Ph.No">
      <div class="red-text"><?php echo $errors['ph']; ?></div>
      <input name="password" class="password" type="text" placeholder="Password">
      <div class="red-text"><?php echo $errors['password']; ?></div>
      <button name="sign">
        Sign up
      </button>
      
    </div>