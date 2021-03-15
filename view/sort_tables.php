<br>
<h1 class="center-align">Zippy's Used Autos by Year</h1>

<?php
$dsn = mysqli_connect("localhost", "root", "", "zippyusedautos");
 

$sql = "SELECT V.price, M.Make, V.model, V.year, T.Type, C.Class
        FROM vehicles V
        LEFT JOIN classes C
        ON V.class_id = C.ID
        LEFT JOIN makes M
        ON V.make_id = M.ID
        LEFT JOIN types T
        ON V.type_id = T.ID    
        ORDER BY year DESC";
if($result = mysqli_query($dsn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='display-vehicles'>";
            echo "<tr>";
                echo "<th class='table-header'>Price</th>";
                echo "<th class='table-header'>Make</th>";
                echo "<th class='table-header'>Model</th>";
                echo "<th class='table-header'>Year</th>";
                echo "<th class='table-header'>Type</th>";
                echo "<th class='table-header'>Class</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['Make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['Class'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
<br>
<h1 class="center-align">Zippy's Used Autos by Price</h1>

<?php
$dsn = mysqli_connect("localhost", "root", "", "zippyusedautos");
 

$sql = "SELECT V.price, M.Make, V.model, V.year, T.Type, C.Class
        FROM vehicles V
        LEFT JOIN classes C
        ON V.class_id = C.ID
        LEFT JOIN makes M
        ON V.make_id = M.ID
        LEFT JOIN types T
        ON V.type_id = T.ID    
        ORDER BY price DESC";
if($result = mysqli_query($dsn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='display-vehicles'>";
            echo "<tr>";
                echo "<th class='table-header'>Price</th>";
                echo "<th class='table-header'>Make</th>";
                echo "<th class='table-header'>Model</th>";
                echo "<th class='table-header'>Year</th>";
                echo "<th class='table-header'>Type</th>";
                echo "<th class='table-header'>Class</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['price'] . "</td>";
                echo "<td>" . $row['Make'] . "</td>";
                echo "<td>" . $row['model'] . "</td>";
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['Class'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>

<p class="center"><a href=".">Go back to homepage</a></p>