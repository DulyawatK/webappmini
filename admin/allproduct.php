<?php
    require 'conn.php';
    require_once 'header.php';

    $sql = "SELECT * FROM product";
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Admin</title>
</head>

<body>
    
    <?php 
      require_once 'navbar.php';
    ?>
    <br>
    
    <div class="container">
        <h1>Product</h1>
        <br>
            <div class="shop__sidebar__search">
                    <form method="post">
                            <input type="text" placeholder="Search..." name="search">
                            <button type="submit"><span class="bi bi-search"></span></button>
                            <hr>
                            <a class="btn btn-primary" href='insertproduct.php'>Add Product</a>
                            <hr>
                    </form>
            </div>
            
          <table class="table">
          <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col-4">Title</th>
                    <th scope="col-4">Description</th>
                    <th scope="col-4">Price</th>
                    <th scope="col-4">Edit</th>
                    <th scope="col-4">Delete</th>
                    
                </tr>
                
          </thead>
          <br>
            
            <tbody>
                <?php
                    if (isset($_POST['search'])) {
     
                    $search = $_POST['search'];
                    $sql = "SELECT * FROM product WHERE p_name like '%$search%'";
                    $sql = "SELECT * FROM product WHERE p_id like '%$search%'";
                    $stmt = $conn->prepare($sql);
                    $searchParam = "%" . $search . "%";
                    $stmt->execute();
                    $result = $stmt->get_result();

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr><td>".$row["p_id"]."</td>"."<td>".$row["p_name"]."</td>"."<td>".$row["p_descrip"]."</td>"."<td>".$row["p_price"]."</td>"
                                ."<td>"."<a class='btn btn-warning' href='editproduct.php?p_id=".$row["p_id"]."'>Edit</a>"."</td>"
                                ."<td>"."<a class='btn btn-danger' href='deleteproductcheck.php?p_id=".$row["p_id"]."'>Delete</a>"."</td>";
                                echo "</tr>";
                                }
                        } else {
                        echo "0 results";
                        }
                    $stmt->close();
                    }
                    if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr><td>".$row["p_id"]."</td>"."<td>".$row["p_name"]."</td>"."<td>".$row["p_descrip"]."</td>"."<td>".$row["p_price"]."</td>"
                        ."<td>"."<a class='btn btn-warning' href='editproduct.php?p_id=".$row["p_id"]."'>Edit</a>"."</td>"
                        ."<td>"."<a class='btn btn-danger' href='deleteproductcheck.php?p_id=".$row["p_id"]."'>Delete</a>"."</td>";
                        echo "</tr>";
                            }
                        } else {
                                echo "0 results";
                        }
                    $conn->close();
                ?>
            </tbody>
        </table>
       
    </div>
</body>

</html>