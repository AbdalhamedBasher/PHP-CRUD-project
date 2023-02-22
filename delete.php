<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=mysqli_real_escape_string($con,$_GET['deleteid']);
    $sql="DELETE FROM mrpeterson WHERE id=$id";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
                    
        
    }

    

}