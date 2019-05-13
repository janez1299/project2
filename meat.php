<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Meat & Seafood</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

  <div class="row">
    <div class="column3">
        <img class="items" src="images/ground-beef.png" alt="Ground Beef">
        <p class="description"> 100% Grass-Fed Ground Beef</p>
        <p class="oldprice"> Original: $5.99/lb </p>
        <p class="newprice"> Now: $3.99/lb </p>
        <p class="source">Source: <cite><a href="https://shop.sprouts.com/product/24229/100-grass-fed-ground-beef">Sprouts Farmers Market</a></cite></p>
    </div>

    <div class="column3">
        <img class="items" src="images/ribeye.png" alt="Boneless Ribeye Steak">
        <p class="description"> Boneless Ribeye Steak</p>
        <p class="normalprice"> Price: $13.99/lb </p>
        <p class="source">Source: <cite><a href="https://shop.sprouts.com/product/23288/boneless-ribeye-steak">Sprouts Farmers Market</a></cite></p>
    </div>

    <div class="column3">
        <img class="items" src="images/atlantic-salmon.png" alt="Atlantic Salmon">
        <p class="description"> Atlantic Salmon Fillet</p>
        <p class="normalprice"> Price: $8.99/lb </p>
        <p class="source">Source: <cite><a href="https://shop.sprouts.com/product/23842/atlantic-salmon-fillets-farm-raised">Sprouts Farmers Market</a></cite></p>
    </div>

    <div class="column3">
        <img class="items" src="images/sea-scallop.png" alt="Sea Scallop">
        <p class="description"> Wild Sea Scallop</p>
        <p class="normalprice"> Price: $8.99/lb </p>
        <p class="source">Source: <cite><a href="https://shop.sprouts.com/product/23842/atlantic-salmon-fillets-farm-raised">Sprouts Farmers Market</a></cite></p>
    </div>

</div>


<footer>
<?php
  include("includes/footer.php");
  ?>
</footer>


</body>
</html>
