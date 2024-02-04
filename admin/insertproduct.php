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
    <title>Add Product</title>
</head>

<body> 
    <div class="container-fluid">
            <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Add Product</h5>
                <div class="card">
                    <div class="card-body">
                    <form id="form1" name="form1" method="post" action="dbinsertproduct.php">
                      
                        
                        <div class="mb-3">
                            <label for="p_name">Product ID</label>
                            <input type="text" class="form-control" name="p_id" id="p_id"/>
                            <label for="p_name">Product name</label>
                            <input type="text" class="form-control" name="p_name" id="p_name"/>
                        </div>
                        <div class="mb-3">
                            <label for="p_descrip">Description</label>
                            <input type="text" class="form-control" name="p_descrip" id="p_descrip"  />
                        </div>
                        <div class="mb-3">
                            <label for="p_price">Price</label>
                            <input type="text"class="form-control" name="p_price" id="p_price" />
                        </div>
                        <div class="mb-3">
                            <label for="p_price">Picture (image URL only)</label>
                            <input type="text"class="form-control" name="p_img" id="p_img" />
                            <br>
                         
                            
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