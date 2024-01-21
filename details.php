<?php
require_once('connection.php');

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// print_r($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1">
        <thead>
            <tr>
                <th>Sn.</th>
                <th>Name </th>
                <th>Address</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $key => $student) { ?>
                <tr>
                    <td>
                        <?= ++$key; ?>
                    </td>
                    <td>
                        <?= $student['name']; ?>
                    </td>

                    <td>
                        <?= $student['address']; ?>
                    </td>
                    <td>
                        <a href="update.php?id=<?= $student['id']; ?>">Edit</a>
                        <a href="delete.php?id=<?= $student['id']; ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="index.php">Add new details</a>
</body>

</html>