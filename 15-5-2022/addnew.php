<?php

 include ("config.php");

$uniNum= $_POST['uniNum'];
$name= $_POST['name'];
$major= $_POST['major'];
$batch= $_POST['batch'];
$faculty= $_POST['faculty'];


if(isset($_POST['submit'])){

    $add = "INSERT INTO student (Uni_Num,Name,Major,Batch,Faculty) VALUES ('$uniNum','$name','$major','$batch','$faculty')";
    $insert = mysqli_query($conn , $add);

   
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <form  method="post" action="addnew.php">

     <label for="">UNI ID:</label>
     <input type="number" name="uniNum" value="" required>
     <br><br>

     <label for="">Name:</label>
     <input type="text" name="name" value="" required>
     <br><br>

    
     <input type="hidden" name="name" value="" required>
     <br><br>

     <label for="">Major:</label>
     <input type="text" name="major" value="" required>
     <br><br>


     <label for="">Batch:</label>
     <input type="text" name="batch" value="" required>
     <br><br>


     <label for="">faculty:</label>
     <input type="text" name="faculty" value="" required>
     <br><br>

     <input type="submit" name="submit" value="add"> 




     </form>

</body>
</html>