<?php 
    require 'config.php';
    
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];

    $query="INSERT INTO employee (name,age,email) VALUES ('$name','$age','$email')";

    $result = mysqli_query($conn,$query);
    
    if($result) {
        $res = ['done!'];
    } else {
        $res = ['error!'];
    }
    echo '<br>';
    echo json_encode($res);
    
    
?>


