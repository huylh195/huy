<?php
include ('../connect/connect.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>  </title>
        <meta charset= "UTF-8">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    </head>
    <body>
    <form action="" method="POST">
        <div class="form-group">
            <label for="formGroupExampleInput">Product</label>
            <input type="text" class="form-control" id="formGroupExampleInput" name="pro_title" >
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">price</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="pro_price">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">status</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" name="status">
        </div>
        <div>
            <input type= "submit" name="submit" >
        </div>
        </form>
    </body>
    <?php
    if(isset($_POST['submit']))
    {
        // $id= $_GET['id'];
        $pro_title=$_POST['pro_title'];
        $price=$_POST['pro_price'];
        $pro_status=$_POST['status'];
        $sql= "INSERT INTO `tbl_products`(`pro_title`, `pro_price`, `pro_status`) VALUES (' $pro_title',' $price','$pro_status')";
        $query=mysqli_query($conn,$sql);
        if($query)
        {
            header('Location:http://localhost/project/pages/tables/data.php');
        }
            else
            {
                echo "fail";
            }
        
    }  
    ?>
</html>