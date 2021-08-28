<?php
    include 'conn.php';
    if(count($_POST)!=0){
        extract($_POST);
        extract($_GET);
        $query="UPDATE user SET username='$username',password='$password' WHERE id='$id'";
        $result=mysqli_query($conn,$query);
        if($result==true){
            echo "Record Inserted";
        }else{
            echo "failed";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
    <div class="container ">
        <div class="row ">
            <div class="col-lg-6 m-auto text-center">
            <form  method="POST">
                <div class="card">
                    <div class="card-header bg-dark text-muted">
                        <h1>Update Operation</h1>
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>
                <h5><a href="display.php"><input type="button" class="btn btn-primary" value="Display Data"></h5>
            </div>
        </div>
    </div>
</body>
</html>