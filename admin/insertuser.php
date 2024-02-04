<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="styletop.css">
    <title>Add User</title>
</head>

<body> 
    <div class="container-fluid">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add User</h5>
                <div class="card">
                    <div class="card-body">
                    <form id="form1" name="form1" method="post" action="dbinsertuser.php">
                      
                        <div class="mb-3">
                            <label for="uid">User ID</label>
                            <input type="text" class="form-control" name="uid" id="uid"/>
                            <label for="username">Username</label>
                            <input type="text" class="form-control" name="username" id="username"/>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" name="email" id="email"  />
                        </div>
                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="text"class="form-control" name="password" id="password" />
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect02">Status</label>
                            </div>
                            <select class="custom-select" name ="urole" id="urole">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                            
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