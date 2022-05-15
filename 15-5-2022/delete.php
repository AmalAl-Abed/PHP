<?php 

 include ("config.php");

 //uniNum

$ID = $_GET['ID'];
$delete = mysqli_query($conn, "delete from student where ID ='$ID'");


echo "<script language = 'javaScript'>
document.location='view.php';
</script>";
?>

