<?php
include("includes/init.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Search & Request </title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

<h2> Search </h2>

<form id="search_form" method="get" action="search_submit.php">
    <fieldset>
    <legend>Item Search</legend>
    <p>Please input the following information about the item you are searching for: </p>

    <select name="category">
        <option value="" select disabled>Search By</option>
        <option value="productName">Product Name</option>
        <option value="department">Department</option>
        <option value="unit_price">Unit Price</option>
        <option value="units_in_stock">Units In Stock</option>
    </select>
    <input type="text" name="search">
    <input id="button" type="submit" name="submit" value="Search"/>
    </fieldset>
</form>

<h2> Request </h2>
<form id="request_form" method="post" action="request_submit.php">
    <fieldset>
    <legend>Item Request</legend>
    <p>Don't see what you are looking for? No worries, you can request an item and we will stock it and add it to our catalog for you! </p>

    <ul>
        <li>Item Name: <input type="text" name="itemname2"/></li>
        <li>Department:
            <select type="text" name="department">
                <option value="Produce">Produce</option>
                <option value="Meat & Seafood">Meat & Seafood</option>
                <option value="Bakery">Bakery</option>
                <option value="Dairy">Dairy</option>
                <option value="Vitamins & Body Care">Vitamins & Body Care</option>
            </select>
        <li>Suggested Retail Price: <input type="number" step="0.01" name="price"></li>
        <li>Units Needed: <input type="integer" name="units"></li>
    </ul>
    <input id="button2" name="submit_request" type="submit" value="Submit"/>
    </fieldset>
</form>


<footer>
<?php
  include("includes/footer.php");
  ?>
</footer>
</body>
</html>
