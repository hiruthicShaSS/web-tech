<?php
$input = $_GET["name"];

$con = mysqli_connect("localhost", "root", "", "mydb");


$sql = "SELECT * FROM user WHERE name = '$input'";
$result = mysqli_query($con, $sql);

$hint = "";

if ($input != "") {
    while ($a = mysqli_fetch_array($result)) {
        $hint = $hint . $a[0] . "<br>";
    }
}

echo $hint == "" ? "user name not exist!" : "User name already exist!<br>" . $hint;

mysqli_close($con);
