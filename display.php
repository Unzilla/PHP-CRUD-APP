<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row mt-5">

            <div class="col-lg-12">
            <h1 class="display-4">Users Table</h1><hr>
                <table class="table table-dark table-responsive">

                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Password</th>
                            <th scope="col">Delete</th>
                            <th scope="col">Update</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        include 'conn.php';
                        $query="SELECT * FROM user";
                        $result=mysqli_query($conn,$query);
                        while($res=mysqli_fetch_array($result)){
                     ?>
                        <tr>
                           
                            <td><?php echo $res['id'] ?></td>
                            <td><?php echo $res['username'] ?></td>
                            <td><?php echo $res['password'] ?></td>
                            <td><a href="delete.php?id=<?php echo $res['id'] ?>"><input type="button" class="btn btn-danger" value="Delete"></a></td>
                            <td><a href="update.php?id=<?php echo $res['id'] ?>"><input type="button" class="btn btn-danger" value="Update"></a></td>

                        </tr>

                        
                      
                    </tbody
                    <?php }

                    
                    ?>


                    <tr>
                    <td><a href="create.php"><input type="button" class="btn btn-danger" value="Add New"></a></td>
                    </tr>

                </table>
                <div>
                </div>
            </div>

</body>

</html>