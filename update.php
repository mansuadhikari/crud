<?php
require_once('connection.php');

$id = $_GET['id'];
// echo $id;
$sql = "SELECT * FROM students where id='$id'";
$result = mysqli_query($conn, $sql);
$response = mysqli_fetch_assoc($result);
if ($response) {
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $address = $_POST['address'];
        $updateSql = "UPDATE students set name='$name',address='$address'";
        $updateRes = mysqli_query($conn, $updateSql);
        if ($updateRes) {
            echo "Data updated";
        } else {
            echo "Error on updating data";
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">

        <label for="">Name:</label>
        <input type="text" name="name" value="<?= $response['name']; ?>" required><br>
        <label for="">Address:</label>
        <input type="text" value="<?= $response['address']; ?>" name="address"><br>
        <button>Update</button>
    </form>
</body>

</html>