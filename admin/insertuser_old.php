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
    <title>Edit</title>
</head>

<body> 
    <?php 
      require_once 'navbar.php';
    ?>
    <br>
    <form class="container" id="form1" name="form1" method="post" action="dbinsertuser.php">
        <h1>Insert User</h1><br>
        <P>
            <label for="uid">ID</label>
            <input type="text" name="uid" id="uid"/>
        </p>

        <p>
            <label for="username">ชื่อผู้ใช้</label>
            <input type="text" name="username" id="username">
        </p>

        <p>
            <label for="email">อีเมล</label>
            <input type="email" name="email" id="email">
        </p>

        <p>
            <label for="password">รหัสผ่าน</label>
            <input type="text" name="password" id="password">
        </p>

        <p>
            <label for="urole">สถานะ</label>
            <input type="text" name="urole" id="urole">
        </p>

        <input type="submit" class="btn btn-success" value="confirm">
        <a class="btn btn-danger" href='alluser.php'>cancel</a>
    </form>
</body>

</html> 