<html>
<head>
</head>
<body>



<?php
// set the number for the multiplication table
$num = 5;

// generate the multiplication table using a for loop
echo "Multiplication Table for " . $num . ":\n\n";
for ($i = 1; $i <= 10; $i++) {
  $result = $num * $i;
  echo $num . " x " . $i . " = " . $result . "\n";

}
echo "</ul>";
?>

</body>
</html>

