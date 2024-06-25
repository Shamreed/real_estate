<head>
    <title>real estate</title>
    <link rel="stylesheet" href="templets/newlog.css">
</head>
<body>
    <div class="container">
      <p>
        Login
      </p>
      <form class="white" action="index.php" method="POST">
      <input name="email" class="email" type="text" placeholder="Email">
      <div class="red-text"><?php echo $errors['email']; ?></div>
      <input name="password" class="password" type="text" placeholder="Passsword">
      <div class="red-text"><?php echo $errors['password']; ?></div>
      <button name="login">
        Login
      </button>
      <a href="create.php" >
        Don't have an account? Register here
      </a>
    </div>