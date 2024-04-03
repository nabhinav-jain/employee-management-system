<?php

include('dbconnection.php');

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $department=$_POST['department'];
    $salary=$_POST['salary'];
    $email=$_POST['email'];

    $sql="insert into `employee table`(emp_name,emp_department,emp_salary,emp_email) Values('$name','$department','$salary','$email')";

    $result=mysqli_query($conn,$sql);

    if($result){
        $sub=1;
    }


}



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
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
            <input type="text" name='name' id='name'>
            <br/>
            <label for="department">Enter Department</label>
            <input type="text" name='department' id='department'>
            <br/>
            <label for="name">Enter Salary</label>
            <input type="number" name='salary' id='salary'>
            <br/>
            <label for="email">Enter email</label>
            <input type="text" name='email' id='email'>
            <br/>
            <button type='submit' name='submit'>Submit Data</button>
            </form>
          
    </div>
    <?php
                if(isset($sub)){
                    echo '<p style="font-size:2.5rem;">data submitted</p>';
                }
            ?>

</body>
</html>