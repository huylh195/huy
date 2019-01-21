<?php
include ('../connect/connect.php');
    $id = $_GET['id'];
    $pro_title = $_POST['pro_title'];
    $price = $_POST['pro_price'];
    $pro_status = $_POST['pro_status'];
    $sql = "DELETE FROM `tbl_products` WHERE pro_id = $id ";
    $query = mysqli_query($conn, $sql);
    if($query)
    {
        header('Location:http://localhost/project/pages/tables/data.php');
    }else
    {
        echo ("Nooooooooo");
    }
?>