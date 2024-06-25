<head>
    <title>buyer page</title>
    <link rel="stylesheet" href="templets/newfour.css">
</head>
<body>
<nav class="navbar">
   <ul>
   <h1 class="home">Home Hub</h1>
    <li><a href="sec.php">Home</a></li>
    <li><a href="thr.php">Sell</a></li>
    <li><a href="four.php">Buy</a></li>
    <li><a href="index.php">Logout</a></li>
   </ul>
 </nav>
    <h1 class="s">Seller Details</h1>
    <?php foreach($real_estate as $real){?>
      <div>
        <p>Name: <?php echo htmlspecialchars($real['slr_name']); ?></p>
        <p>Phone No: <?php echo htmlspecialchars($real['slr_ph']); ?></p>
        <p>Address: <?php echo htmlspecialchars($real['slr_address']); ?></p>
        <p><strong><u>Property Details</u></strong></p>
        <p>Type: <?php echo htmlspecialchars($real['prop_type']); ?></p>
        <p>Size: <?php echo htmlspecialchars($real['prop_size']); ?></p>
        <p>Price: <?php echo htmlspecialchars($real['prop_price']); ?></p>
        <form action="four.php" method="POST">
        <input type="hidden" name="id_delete" value="<?php echo $real['slr_id'] ?>">
        <input type="submit" name="delete" value="Delete">
        </form>  
      
      </div>
    
  
     
    <?php } ?> 