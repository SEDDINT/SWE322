<?php
// Salaheddin Thabet
// 202011207
$classMates = array("Khalid", "Abdul karem", "samer", "Ahmed");
$arr_Length = count($classMates);
echo "<h1> my class mates are: </h1>";

for ($x = 0; $x < $arr_Length; $x++) {
    echo "<h2>" . $classMates[$x] . "</h2>";
}

echo "<hr>";
echo "<br>";

$corse = array(
    "SWE301" => "requirement enginering",
    "SWE302" => "Archtecture & desing",
    "PHL101" => "critical thinking",
);

echo "<h1> corces I have taken: </h1>";
foreach ($corse as $c => $c_value) {
    echo "<h3> code = " . $c . ", course name = " . $c_value . ".</h3>";
}

$info = array(
    array("Labtop", "Asus", "MSI"),
    array("CPU", "AMD", "Intel"),
    array("GPU", "AMD", "Nvidia")
);
echo "<hr>";
echo "<br>";

echo "I am looking for " . $info[0][1] . " " . $info[0][0] . " with " . $info[1][1] . " " . $info[1][0] . " and " . $info[2][1] . " " . $info[2][2] . ".";
