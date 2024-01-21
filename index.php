<?php
require_once('connection.php');

if (!empty($_POST)) {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $sql = "INSERT INTO students (name,address)values('$name','$address')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location:details.php');
        echo "Data stored successfully";
    } else {
        echo "Something went wrong";
    }

}

?>