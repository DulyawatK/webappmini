<?php
    require 'conn.php';

    $sql = "SELECT * FROM users WHERE uid ='$_GET[uid]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
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

<body class="container">
    <div class="container-fluid">
                <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title fw-semibold mb-4">Edit User</h5>
                    <div class="card">
                        <div class="card-body">
                        <form id="form1" name="form1" method="post" action="dbeditusermain.php">
                            <label for="uid">ID</label>
                            
                            <?php
                                echo $_GET["uid"];
                            ?>

                            <div class="mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="uid" id="uid" value="<?=$row["uid"];?>" hidden>
                                <input type="text" class="form-control" name="username" id="username" value="<?=$row["username"];?>"/>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" id="email" value="<?=$row['email'];?>" />
                            </div>
                            <div class="mb-3">
                                <label for="password">Password</label>
                                <input type="text"class="form-control" name="password" id="password" value="<?=$row['password'];?>" />
                            </div>
                            <div class="mb-3">
                                <label for="urole">Current Status</label>
                                <input type="text"class="form-control" name="urole" id="urole" value="<?=$row['urole'];?>" readonly/>
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect02">Edit Status</label>
                                </div>
                                <select class="custom-select" name ="urole" id="urole">
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            
                            </div>
                            <input type="submit" class="btn btn-success" value="Confirm">
                            <a class="btn btn-danger" href='alluser.php'>Cancel</a>
                        </form>
                        </div>
                    </div>
                    
                    </div>
                </div>
                </div>
    </div>

</body>

</html>