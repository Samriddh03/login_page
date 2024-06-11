<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $username = $_POST['username'];
    $password = $_POST['password'];


    $host = "localhost";
    $dbusername ="root";
    $dbpassword = "";
    $dbname = "authentication";


    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
    

    if($conn->connect_error) {
        die("Connection failed: ". $conn->connect_error);
    }
    

    $querry = "SELECT *FROM  login WHERE username=$username AND password=$password";
    $stmt =$conn->prepare($querry);
    $stmt->bind_param($username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    $result = $conn->query($query);

    if($result->num_rows == 1){

        header("Location: success.html");
        exit();

    }


    else{
         header("Location: error.html");
        exit();
    }
    
    
    $conn->close();
} 
?>
