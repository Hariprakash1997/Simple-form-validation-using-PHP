<?php

    include "db.php";
        
    include "functions.php";
    
    readData();
        
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
                <h1 class="text-center">All datas</h1>
                <?php
                
                while($row = mysqli_fetch_assoc($result)){
                    
                ?>
                   
                    <pre>
                    <?php
                    
                    print_r($row);
                    
                    ?>
                    </pre>
                
                <?php 
                    
                }
                
               
                
                /*
                
                while($row = mysqli_fetch_row($result)){
                    
                ?>
                   
                    <pre>
                    <?php
                    
                    print_r($row);
                    
                    ?>
                    </pre>
                
                <?php 
                    
                }
                
                */
                
                 ?>
                
            </div>
        </div>
    </div>
    
    
</body>
</html>