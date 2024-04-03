<?php
include("dbconnection.php");
?>
<?php

if(isset($_GET["addEmp"])){
header('location: addEmp.php');
exit;

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management system</title>
    <link rel="stylesheet" href="./css/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>

    <div class='addingEmployee'>
            <form method="get">
            <button name="addEmp" id="addEmp">Add Employee</button>
            </form>
    </div>

    <table class="table mx-3">
  <thead>
    <tr>
      <th scope="col">E.id</th>
      <th scope="col">Name</th>
      <th scope="col">Department</th>
      <th scope="col">Salary</th>
      <th scope="col">Email</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
  <?php
    $sql="select * from `employee table`";

    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
      
        $id=$row['eId'];
        $name=$row['emp_name'];
        $email=$row['emp_email'];
        $department=$row['emp_department'];
        $salary=$row['emp_salary'];

        echo '
        <tr>
        <th >'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$department.'</td>
        <td>'.$salary.'</td>
        <td>'.$email.'</td>
        <td>
        <button class="btn btn-success"><a href="update.php?updateId='.$id.'" class="text-white">Update</a></button>
        <button class=" btn btn-warning"><a href="delete.php?deleteId='.$id.'" class="text-white">Delete</a></button>
       </td>
      </tr>
        ';



    }

  ?>

  </tbody>
</table>

    


</body>
</html>