<?php

include('config.php');



$ID = $_GET['ID'];
$view = mysqli_query($conn , " select * from student where ID =  ' $ID ' ");
$row = mysqli_fetch_array($view);

$ID= $row['ID'];
$uniNum= $row['Uni_Num'];
$name= $row['Name'];
$major= $row['Major'];
$batch= $row['Batch'];
$faculty= $row['faculty'];


if(isset($_POST['submit'])){

    $ID = $_POST['ID'];
    
    $insert = mysqli_query($conn ,"Update student set Name= '$name' where ID ='$ID'");
}

echo "<script language = 'javaScript'>
document.location='view.php';
</script>";


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
     <form  method="post" action="update.php?ID=<?echo $ID;?>">

     
     <input type="hidden" name="ID" value="<?php echo $ID;?>"/>
     

     <label for="">UNI ID:</label>
     <input type="number" name="uniNum" value="" required>
     <br><br>

     <label for="">Name:</label>
     <input type="text" name="name" value="" required>
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

     <input type="submit" name="submit" value="update"> 




     </form>

</body>
</html>