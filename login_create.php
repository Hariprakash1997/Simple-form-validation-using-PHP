<?php

    // to connect to database

    include "db.php";

    include "functions.php";
    
    createRows();

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
               <h1 class="text-center">Create</h1>
                <form action="login_create.php" method="post">
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