<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Data Modification </title>
</head>

<body>
    <?php
    $host_ip = "127.0.0.1";
    $username = "root"; //or the user we have created
    $password = "salaheddin"; //root currently has no password and this is wrong
    $database = "07_lab";

    $conn = mysqli_connect($host_ip, $username, $password, $database, "4306");

    if (!$conn) {
        echo "Debugging errno: " . mysqli_connect_errno();
        echo "<br>";
        echo "Debugging error: " . mysqli_connect_error();
        exit;
    }

    $query = "UPDATE 07_lab set f_name='Ali' WHERE f_name='salah'";

    $result = mysqli_query($conn, $query);
    if (mysqli_query($conn, $query)) {
        echo "Update has been successful";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>
</body>

</html>