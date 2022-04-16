<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Advanced</title>
</head>
<body>
    <?php 
    $products = array(
        "Electronics" => array(
          "Television" => array(
            array(
            "id" => "PR001",
            "name" => "MAX-001",
            "brand" => "Samsung"
            ),
            array(
            "id" => "PR002",
            "name" => "BIG-301",
            "brand" => "Bravia"
            ),
            array(
            "id" => "PR003",
            "name" => "APL-02",
            "brand" => "Apple"
            )
          ),
          "Mobile" => array(
            array(
            "id" => "PR004",
            "name" => "GT-1980",
            "brand" => "Samsung"
            ),
            array(
            "id" => "PR005",
            "name" => "IG-5467",
            "brand" => "Motorola"
            ),
            array(
            "id" => "PR006",
            "name" => "IP-8930",
            "brand" => "Apple"
            )
          )
        ),
        "Jewelry" => array(
          "Earrings" => array(
            array(
            "id" => "PR007",
            "name" => "ER-001",
            "brand" => "Chopard"
            ),
            array(
            "id" => "PR008",
            "name" => "ER-002",
            "brand" => "Mikimoto"
            ),
            array(
            "id" => "PR009",
            "name" => "ER-003",
            "brand" => "Bvlgari"
            )
          ),
          "Necklaces" => array(
            array(
            "id" => "PR010",
            "name" => "NK-001",
            "brand" => "Piaget"
            ),
            array(
            "id" => "PR011",
            "name" => "NK-002",
            "brand" => "Graff"
            ),
            array(
            "id" => "PR012",
            "name" => "NK-003",
            "brand" => "Tiffany"
            )
          )
        )
      );
      echo "<h1>Product Table</h1>";
      echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
      <tr><th>Category</th>
      <th>SubCatigory</th>
      <th>ID</th>
      <th>Name</th>
      <th>Brand</th>
      </tr>";
      foreach($products as $key => $v1) {
        foreach ($v1 as $key1 => $v2) {
          foreach($v2 as $key2 => $v3) {
            echo "<tr>";
            echo "<td>$key</td>";
            echo "<td>$key1</td>";
            foreach($v3 as $key3 => $v4){
              echo "<td>$v4</td>";
            }
            echo "</tr>";
          }
        }
      };
echo "</table>";

echo "<h1>Mobile Table</h1>";
      echo "<table border='2px' cellpadding='5px' cellspacing='0px'>
      <tr><th>Category</th>
      <th>SubCatigory</th>
      <th>ID</th>
      <th>Name</th>
      <th>Brand</th>
      </tr>";
foreach($products as $key => $v1) {
  foreach($v1 as $key1 => $v2) {
    foreach($v2 as $key2 => $v3) {
      if ($key1 == "Mobile") {
        echo "   <tr>
        <td>$key</td>
        <td>$key1</td>
        <td>$v3[id]</td>
        <td>$v3[name]</td>
        <td>$v3[brand]</td>
         </tr>";
      }
    }
  }
};
echo "<br>";
echo "</table>";

echo "<h2>Deletion and Updating</h2>";
foreach($products as $key => $v1) {
  foreach($v1 as $key1 => $v2)  {
    foreach($v2 as $key2 => $v3) {
      if ($v3["id"]=="PR003")  {
        unset($v3);
      }
      elseif ($v3["id"] == "PR002") {
        $v3["name"] == "BIG-555";
      }
      echo "<p> Product ID: $v3[id]<br> Product Name: $v3[name]<br> Product Brand: $v3[brand]<br> Subcategory: $key1<br> Category: $key </p>";
    }
  }
};
 ?>
</body>
</html>