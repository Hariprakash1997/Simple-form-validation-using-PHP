<?php include "db.php" ?>
<?php
    
    global $connection;
    
    //get data or pulling infromation from database
    
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if(!$result){
        die("Query FAILED" . mysqli_error($connection));
    }

    function createRows(){
        if(isset($_POST["submit"])){
            
            global $connection;
        
            $username = $_POST["username"];
            $password = $_POST["password"];
            
            //to prvent sql injection
            
            $username = mysqli_real_escape_string($connection, $username);
            $password = mysqli_real_escape_string($connection, $password);
            
            //password encryption
            
            $hashFormat = "$2y$10$";
            $salt = "iusesomecrazystrings22";
            $hashFormatSalt = $hashFormat . $salt;
            
            $password = crypt($password, $hashFormatSalt);

            // send or create data in mysql database

            $query = "INSERT INTO users(username, password) VALUES('$username', '$password')";

            /*                or

            $query = "INSERT INTO users(username, password) ";
            $query .= "VALUES('$username', '$password')";*/

            $result = mysqli_query($connection, $query);

            if(!$result){
                die("query FAILED " . mysqli_error());
            } else {
                echo "Record created";
            }
        
        }
    }

    function readData(){
        
        global $connection;
        
        //to READ or get data from database

        $query = "SELECT * FROM users";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("query FAILED " . mysqli_error());
        }
    }

    function showAllData(){
        global $result;
        while($row = mysqli_fetch_assoc($result)){
           $id = $row['id'];
           echo "<option value='$id'>$id</option>";
        }
    }

    function updateTable(){
        
        global $connection;

        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query FAILED" . mysqli_error($connection));
        } else {
            echo "Record updated";
        }
    }

    function deleteRows(){
        
        global $connection;

        $username = $_POST["username"];
        $password = $_POST["password"];
        $id = $_POST["id"];

        $query = "DELETE FROM users ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result){
            die("Query FAILED" . mysqli_error($connection));
        } else {
            echo "Record deleted";
        }
    }

?>