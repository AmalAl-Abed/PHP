<?php

 include ("config.php");

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
<table border ="1">
      <thead>
          <th>Id</th>
          <th>UniId</th>
          <th>name</th>
          <th>major</th>
          <th>Batch</th>
          <th>Faculty</th>
          <th>Actions</th>
      </thead>

      <tbody>

        <?php

          $query = "SELECT * FROM student ORDER BY ID ASC";
          $add= mysqli_query($conn,$query);
          while($row= mysqli_fetch_array($add)){
            

            $ID= $row['ID'];
            $uniNum= $row['Uni_Num'];
            $name= $row['Name'];
            $major= $row['Major'];
            $batch= $row['Batch'];
            $faculty= $row['faculty'];
            

          
        ?>  
        <tr>
              <td><?php echo $ID ?></td>
              <td><?php echo $uniNum ?></td>
              <td><?php echo $name ?></td>
              <td><?php echo $major ?></td>
              <td><?php echo $batch ?></td>
              <td><?php echo $faculty ?></td>
              <td>
                  <a href="update.php?ID=<?php echo $ID?>">Update</a>
                  <a href="delete.php?ID=<?php echo $ID?>">Delete</a>
              </td>
          </tr>
      </tbody>
      <?php
          }     
      ?>
    </table>
</body>
</html>