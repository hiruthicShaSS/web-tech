<?php
    $name = $_GET["name"];
    $email = $_GET["email"];
    $password = $_GET["password"];

    $con = mysqli_connect("localhost", "root", "", "mydb");
    
    
    $sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$password')";
    $result = mysqli_query($con, $sql);
    
    echo "Done!";

?>