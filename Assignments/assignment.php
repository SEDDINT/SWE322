<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment</title>
</head>

<body>
    <center>
        <br>
        <br>
        <form action="assignment.php" method="POST">
            <label for="number_1">Enter the first number:</label>
            <input name="number_1" type="number">
            <br>
            <label for="number_2">Enter the second number:</label>
            <input name="number_2" type="number">
            <br>
            <input type="submit" name="sub" value="+">
            <input type="submit" name="sub" value="-">
            <input type="submit" name="sub" value="x">
            <input type="submit" name="sub" value="/">
            <br>
            <?php
            if (isset($_POST['sub'])) {
                $num1 = $_POST['number_1'];
                $num2 = $_POST['number_2'];
                $oprnd = $_POST['sub'];
                if ($oprnd == "+")
                    $ans = $num1 + $num2;
                else if ($oprnd == "-")
                    $ans = $num1 - $num2;
                else if ($oprnd == "x")
                    $ans = $num1 * $num2;
                else if ($oprnd == "/")
                    $ans = $num1 / $num2;

                if (isset($ans)) {
                    echo "the answer is : " . $ans . " .";
                } else {
                    echo "the answer is :";
                }
            } ?>
    </center>


</body>

</html>