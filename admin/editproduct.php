<?php
    require_once 'conn.php';
    require_once 'header.php';

    $sql = "SELECT * FROM product WHERE p_id ='$_GET[p_id]'";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ". $conn->$conn_error);
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Edit</title>
</head>
<body>
    
    <div class="container-fluid">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Edit Product</h5>
                <div class="card">
                    <div class="card-body">
                    <form id="form1" name="form1" method="post" action="dbeditproduct.php">
                        <label for="p_id">ID</label>
                        
                            <?php
                                echo $_GET["p_id"];
                                $row = $result->fetch_assoc(); // Assuming associative result
                                $product_name = $row["p_name"];

                            ?>
                        <div class="mb-3">
                            <label for="p_name">Product name</label>
                            <input type="text" class="form-control" name="p_id" id="p_id" value="<?=$row["p_id"];?>" hidden>
                            <input type="text" class="form-control" name="p_name" id="p_name" value="<?=$row["p_name"];?>"/>
                        </div>
                        <div class="mb-3">
                            <label for="p_descrip">Description</label>
                            <input type="text" class="form-control" name="p_descrip" id="p_descrip" value="<?=$row['p_descrip'];?>" />
                        </div>
                        <div class="mb-3">
                            <label for="p_price">Price</label>
                            <input type="text"class="form-control" name="p_price" id="p_price" value="<?=$row['p_price'];?>" />
                        </div>
                        <div class="mb-3">
                            <label for="p_price">Picture</label>
                            <input type="text"class="form-control" name="p_img" id="p_img" value="<?=$row['p_img'];?>" />
                            <br>
                            <img src="<?=$row['p_img'];?>" alt="product-image" width="500" height="600">
                            
                        </div>
                        <input type="submit" class="btn btn-success" value="Confirm">
                        <a class="btn btn-danger" href='allproduct.php'>Cancel</a>
                    </form>
                    </div>
                </div>
                
                </div>
            </div>
            </div>
    </div>


</body>
</html>