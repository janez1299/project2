<?php
include("includes/init.php");

//open connection to database
$db = open_sqlite_db("secure/data.sqlite");

function print_record($record) {
    ?>
    <tr>
        <td><?php echo htmlspecialchars($record["productname"]);?></td>
        <td><?php echo htmlspecialchars($record["department"]);?></td>
        <td><?php echo htmlspecialchars($record["unit_price"]);?></td>
        <td><?php echo htmlspecialchars($record["units_in_stock"]);?></td>
    </tr>
    <?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Request Submit Form</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php");
?>

<h2> Request Results </h2>
<?php

//Get the list of items from the database
$item = exec_sql_query($db,"SELECT productname FROM catalog",NULL)->fetchAll(PDO::FETCH_COLUMN);

if (isset($_POST["submit_request"])) {
    $valid_request = TRUE;

    $productName = filter_input(INPUT_POST, 'itemname2', FILTER_SANITIZE_STRING);
    $department = filter_input(INPUT_POST, 'department', FILTER_SANITIZE_STRING);
    $unitPrice = filter_input(INPUT_POST, 'price');
    $unitsInStock = filter_input(INPUT_POST, 'units', FILTER_SANITIZE_NUMBER_INT);

    if ($productName==""){
        $valid_request = FALSE;
    }
}

if($valid_request){
    $sql = "INSERT INTO catalog(productname, department, unit_price, units_in_stock)
    VALUES (:itemname2, :department, :price, :units) ";
    $params = array(
        ':itemname2' => $productName,
        ':department' => $department,
        ':price' => $unitPrice,
        ':units' => $unitsInStock
    );
    $params2 = array();
    $sql2 ="SELECT * FROM catalog";
    $insertion_result = exec_sql_query($db, $sql, $params);
    $result = exec_sql_query($db, $sql2, $params2);
    if ($result){
        echo("Your request has been recorded. Thank you!");
    } else {
        echo("Failed to add request.");
    }
    } else {
        echo("Failed to add request. Invalid product name.");
    }
    $records = $result->fetchAll();
?>

<table>
        <tr>
        <th>Product Name</th>
        <th>Department</th>
        <th>Unit Price</th>
        <th>Units in Stock</th>
    </tr>

    <?php
    foreach($records as $row) {
      print_record($row);
    }
    ?>

    </table>
</body>

<footer>
<?php
  include("includes/footer.php");
  ?>
</footer>
</html>
