<?php

include('dbconnection.php');
$id=$_GET['updateId'];
if(isset($_POST['update'])){

    $name=$_POST['name'];
    $department=$_POST['department'];
    $salary=$_POST['salary'];
    $email=$_POST['email'];
   
    $sql="update `employee table` set emp_name='$name',emp_department='$department',emp_salary='$salary',emp_email='$email' where eId='$id'";

    $result=mysqli_query($conn,$sql);

    if($result){
        header("location:index.php");
    }else{
        die(mysqli_error($conn));
    }


}





 $sql1="select emp_name from `employee table` where eId='$id'";
 $result1=mysqli_query($conn,$sql1);
 $place_name = mysqli_fetch_assoc($result1)['emp_name'];


 $sql2="select emp_department from `employee table` where eId='$id'";
 $result2=mysqli_query($conn,$sql2);
 $place_department = mysqli_fetch_assoc($result2)['emp_department'];

 $sql2="select emp_email from `employee table` where eId='$id'";
 $result3=mysqli_query($conn,$sql2);
 $place_email = mysqli_fetch_assoc($result3)['emp_email'];

 $sql2="select emp_salary from `employee table` where eId='$id'";
 $result4=mysqli_query($conn,$sql2);
 $place_salary = mysqli_fetch_assoc($result4)['emp_salary'];


 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Employee</title>
    <style>
        .form-container{
            display:flex;
            justify-content:center;
            align-items:start;
            height:350px;
        }
        .form-container form input{
            margin-top:20px;
        }
        .form-container form input,label{
            padding:0.3rem;
            font-size:1.2rem;
        }
        button{
            margin:20px auto;
            background-color: green
            ;
        }
    </style>
</head>
<body>
    <div class='form-container'>
            <form method='post'>

            <label for="name">Enter Name</label>
            <input type="text" name='name' id='name' value="<?php echo $place_name; ?>"  >
            <br/>
            <label for="department">Enter Department</label>
            <input type="text" name='department' id='department' value="<?php echo $place_department;?>">
            <br/>
            <label for="name">Enter Salary</label>
            <input type="number" name='salary' id='salary' value="<?php echo $place_salary;?>">
            <br/>
            <label for="email">Enter email</label>
            <input type="text" name='email' id='email' value="<?php echo $place_email;?>">
            <br/>
            <button type='submit' name='update'>update</button>
            </form>
          
    </div>
    <?php
                if(isset($sub)){
                    echo '<p style="font-size:2.5rem;">data updated</p>';
                }
            ?>

</body>
</html>