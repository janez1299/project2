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

const CATEGORY_FIELDS = ["productName","department","unit_price","units_in_stock"];

if (isset($_GET['search']) && isset($_GET['category'])){
  $do_search = TRUE;

  $category = filter_input(INPUT_GET, 'category', FILTER_SANITIZE_STRING);

  // Check if the selected department exists in the DEPARTMENT_FIELDS array
  if(in_array($category, CATEGORY_FIELDS)){
    $search_field = $category;
  } else{
    echo("Invalid Department for search.");
    $do_search = FALSE;
  }

  // Get the itemname input
  $search = filter_input(INPUT_GET,'search',FILTER_SANITIZE_STRING);
  $search = trim($search);
} else{
  // No search provided, so set the product to query to NULL
  $do_search = FALSE;
  $category = NULL;
  $search = NULL;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <title>Search Submit Form</title>
  <link rel="stylesheet" type="text/css" href="styles/all.css" media="all" />
</head>

<body>
  <?php include("includes/header.php"); ?>

  <?php
  if ($do_search){
    // We have a specific item to query!
    ?>
    <h2>Search Results</h2>
    <?php

    $sql="SELECT * FROM catalog WHERE ".$search_field." LIKE '%' || :search || '%' ";
    $params = array(
      ':search' => $search
    );
  } else{
    // No item to query, so return everything!
    ?>
    <h1>All Reviews</h1>
    <?php
    $sql = "SELECT * FROM catalog";
    $params = array();
  }

  //display the results
  $result = exec_sql_query($db,$sql,$params);
  if ($result) {
    // Query was successful, display the records.
    $records = $result->fetchAll();

    if (count($records)>0) {
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
    <?php
    } else{
      echo "<p>No matching product found. </p>";
    }
  }
?>

</body>

<footer>
<?php
  include("includes/footer.php");
  ?>
</footer>
</html>
