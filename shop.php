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

  <title>Shop</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

<h2>Full Catalog</h2>

    <?php
    $sql = "SELECT productname, department, unit_price, units_in_stock FROM catalog";
    $params = array();
    $result = exec_sql_query($db,$sql,$params);

    $records = $result ->fetchAll();
    ?>
<table>
    <tr>
        <th>Product Name</th>
        <th>Department</th>
        <th>Unit Price</th>
        <th>Units in Stock</th>
    </tr>

    <?php
        foreach($records as $row){
            print_record($row);
        }
        ?>
</table>

<footer>
<?php
  include("includes/footer.php");
  ?>
</footer>

</body>
</html>
