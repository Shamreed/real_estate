<head>
    <title>Seller page</title>
    <link rel="stylesheet" href="templets/newthird.css">
  </head>
  <body>
  <nav class="navbar">
   <ul>
   <h1>Home Hub</h1>
    <li><a href="sec.php">Home</a></li>
    <li><a href="thr.php">Sell</a></li>
    <li><a href="four.php">Buy</a></li>
    <li><a href="index.php">Logout</a></li>
   </ul>
 </nav>
    <p class="s">Seller Details</p>
    <form class="white" action="thr.php" method="POST">
    <div class="seller">
      <input name="name" class="name" type="text" placeholder="Name">
      <input name="phno" class="ph" type="text" placeholder="ph.no">
      <input name="address" class="addr" type="text" placeholder="Address">
    </div>
    <p class="p">Property Details</p>
    <div class="property">
      <input name="type" class="type" type="text" placeholder="property type">
      <input name="size" class="size" type="text" placeholder="property size">
      <input name="price" class="price" type="text" placeholder="property price">
    </div>
    <button name="submit">
      Submit
    </button>