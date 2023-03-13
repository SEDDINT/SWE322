<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 06</title>
</head>

<body>

    <?php
    mysqli_connect("127.0.0.1", "root", "salaheddin", "06_lab");
    if (!$conn) {
        echo "Debugging errno: " . mysqli_connect_errno();
        echo "<br>";
        echo "Debugging error: " . mysqli_connect_error();
        exit;
    }
    mysqli_query($conn, "INSERT INTO 06_lab ('F_name' , 'L_name', 'S_id', 'Major') VALUES ('salah','Mohammad',1, 'SWE')");

    mysqli_close($conn)
    ?>
</body>

</html>