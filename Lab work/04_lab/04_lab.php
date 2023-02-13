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

$corse = array(
    "SWE301" => "requirement enginering",
    "SWE302" => "Archtecture & desing",
    "PHL101" => "critical thinking",
);

echo "<h1> corces I have taken: </h1>";
echo "<table border=3>";
echo "<tr>";
echo "<th>CODE</th>";
echo "<th>Cource name</th>";

foreach ($corse as $c => $c_value) {
    echo "<tr>";
    echo "<td> $c </td>";
    echo "<td> $c_value </td>";
    echo "</tr>";
}
echo "</table>";
echo "<hr>";
echo "<br>";
$info = array(
    array("Labtop", "Asus", "MSI"),
    array("CPU", "AMD", "Intel"),
    array("GPU", "AMD", "Nvidia")
);


echo "I am looking for " . $info[0][1] . " " . $info[0][0] . " with " . $info[1][1] . " " . $info[1][0] . " and " . $info[2][1] . " " . $info[2][2] . ".";
