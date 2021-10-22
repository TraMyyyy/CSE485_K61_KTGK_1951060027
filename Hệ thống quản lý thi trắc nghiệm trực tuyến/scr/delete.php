<?php
    $id = $_GET['id'];

    $conn = mysqli_connect("localhost","root","12345","exam");
    if(!$conn){
        header ('Location: error.php');
    }
    
    $sql = "DELETE FROM tb_exam WHERE id = '$id'" ;
    $result = mysqli_query($conn,$sql);

    if($result == true){
        header ('Location: index.php');
    }else{
        header ('Location: ../error.php');
    }

?>