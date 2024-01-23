<?php
include 'connect.php';

if(isset($_GET['deleteid'])){
    $passenger_id=$_GET['deleteid'];

    $sql="delete from passenger where passenger_id=$passenger_id";
    $result=mysqli_query($con,$sql);
    if ($result){
        //echo "Delete successful";
        header('location:passenger.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
