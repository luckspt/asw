<?php
// get the q parameter from URL
$q = $_REQUEST["q"];
$dbhost = "appserver-01.alunos.di.fc.ul.pt";
$dbuser = "aswNN";
$dbpass = "SENHA";
$dbname = "aswNN";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (mysqli_connect_error()) {
    die("Database connection failed:" . mysqli_connect_error());
}

$prods = "";
$sql = "SELECT nome FROM Voluntario";
$result = mysqli_query($conn, $sql);
while ($row = mysqli_fetch_assoc($result)) {
    $a[] = $row["nome"];
}

mysqli_close($conn);
$hint = "";
// lookup all hints from array if $q is different from ""
if ($q !== "") {
    $q = strtolower($q);
    $len = strlen($q);
    foreach ($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>
