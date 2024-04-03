<?php


  include("dbconnection.php");

  if(isset($_GET["deleteId"])){
    $id=$_GET["deleteId"];
    $sql="delete from `employee table` where eId='$id'";

    $result=mysqli_query($conn,$sql);

    if($result){
        header("location:index.php");
  }
}
?>