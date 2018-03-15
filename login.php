<?php

    if(isset($_POST["submit"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];
        
        // to connect to database
        
        $connection = mysqli_connect("localhost", "root", "", "loginapp");
        
        if($connection){
            echo "Connected to database";
        } else {
            //will not let anymore code to run if database is not connected
            die("Database connection failed");
        }
        
        //CRUD - create read update delete
      
        /*if($username && $password){
            echo $username;
            echo $password;
        } else {
            echo "This field cannot be blank";
        }*/
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="bootstrap.min.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input name="username" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>
                    <input class="btn btn-primary" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>