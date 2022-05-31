<?php

require 'config.php';


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=1, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table border="1">

        <thead>

            <th>id</th>
            <th>name</th>
            <th>age</th>
            <th>email</th>
        </thead>
        <tbody>
            <?php
            $name = $_POST['name'];
            $age = $_POST['age'];
            $email = $email['email'];


            $query = "SELECT * FROM employee";
            $sql = mysqli_query($conn, $query);



            if ($sql) {

                while ($row = mysqli_fetch_array($sql)) {

            ?>

                    <tr>
                        <td><?php echo $row['id'] ?></td>
                        <td><?php echo $row['name'] ?></td>
                        <td><?php echo $row['age'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                    </tr>
            <?php   }
            } else {
                echo "failed";
            }
            ?>
        </tbody>




    </table>




<?php 
       

if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $update = "UPDATE test1 SET name='$name', age='$age',email='$email' WHERE id = '$id'";
    
    mysqli_query($conn,$update);
    echo "<script>window.location.href='update.php'</script>";
}
?>




    <form action="update.php" method="POST">
        <input type="text" name="name" id="" placeholder="name"><br>
        <input type="number" name="age" id="" placeholder="age"><br>
        <input type="email" name="email" id="" placeholder="email"><br>
        <input type="submit" value="update" name="update">
    </form><br><br>



</body>

</html>