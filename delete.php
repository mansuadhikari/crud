<?php
require_once('connection.php');

$id = $_GET['id'];
// echo $id;
$sql = "DELETE FROM students where id='$id'";
$result = mysqli_query($conn, $sql);
if ($result) {
    header('Location:details.php');
}
if ($result) {
    echo "Deleted";

} else {
    echo "Error while deleting";
}


?>