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

  <title>Dairy</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

  <div class="row">
    <div class="column3">
        <img class="items" src="images/lactaid-milk.png" alt="Lactaid Milk">
        <p class="description"> Lactaid 2% Milk, 64FOZ </p>
        <p class="oldprice"> Original: $4.29/ea </p>
        <p class="newprice"> Now: $3.79/ea </p>
        <p class="source">Source: <cite><a href="https://shop.sprouts.com/product/13424/lactaid-2-milk-64-foz">Sprouts Farmers Market</a></cite></p>
    </div>

    <div class="column3">
        <img class="items" src="images/sour-cream.png" alt="Sour Cream">
        <p class="description"> Daisy Sour Cream, 16 OZ </p>
        <p class="normalprice"> Price: $2.49/lb </p>
        <p class="source">Source: <cite><a href="https://shop.sprouts.com/product/16861/daisy-sour-cream-16-oz">Sprouts Farmers Market</a></cite></p>
    </div>


    <div class="column3">
        <img class="items" src="images/whole-milk.png" alt="Whole Milk">
        <p class="description"> Shamrock Whole Milk, 128 FOZ </p>
        <p class="normalprice"> Price: $2.39/ea </p>
        <p class="source">Source: <cite><a href="https://shop.sprouts.com/product/11773/shamrock-whole-milk-128-foz">Sprouts Farmers Market</a></cite></p>
    </div>

    <div class="column3">
        <img class="items" src="images/yakult.png" alt="Yakult">
        <p class="description"> Yakult Probiotic Dairy Beverage, 5 PK </p>
        <p class="normalprice"> Price: 2.99/ea </p>
        <p class="source">Source: <cite><a href="https://shop.sprouts.com/product/30535/yakult-probiotic-dairy-beverage-5-pk">Sprouts Farmers Market</a></cite></p>
    </div>
</div>
<footer>
<?php
  include("includes/footer.php");
  ?>
</footer>


</body>
</html>
