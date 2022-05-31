



<?php
require 'config.php';




$query = "SELECT * FROM employee";
$sql = mysqli_query($conn, $query);



if ($sql) {

    $arr = array();
    $i = 0;
    while ($row = mysqli_fetch_array($sql)) {

        $arr[$i]["id"] = $row['id'];
        $arr[$i]["name"] = $row['name'];
        $arr[$i]["age"] = $row['age'];
        $arr[$i]["email"] = $row['email'];
        $i++;
    }

    echo json_encode($arr);
} else {
    echo "failed";
}

?>