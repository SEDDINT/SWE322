<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> Data Retrieval </title>
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

    $query = "SELECT * from 07_lab";

    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "<table border='3'>";
        echo "<tr>";
        echo "<th> ID </th>";
        echo "<th> First name </th>";
        echo "<th> Last name </th>";
        echo "<th> Major </th>";
        echo "</tr>";
        while ($result_row = mysqli_fetch_row($result)) {
            echo "<tr>";
            echo "<td>$result_row[0] </td>";
            echo "<td>$result_row[1] </td>";
            echo "<td> $result_row[2] </td>";
            echo "<td>$result_row[3] </td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
    ?>
</body>

</html>