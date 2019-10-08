<!DOCTYPE html>
<html>
<body>

<?php
$employees = array('Travis' => 29, 'John' => 30, 'Manny' => 24, 'Gabriel' => 20, 'Yogi' => 22);
asort($employees);

foreach($employees as $x => $x_value) {
  	echo "{";
 	  echo "<br>";
    echo "name: " . $x . ","; 
   	echo "<br>";
  	echo " age: " . $x_value;
  	echo "<br>";
  	echo "},";
  	echo "<br>";
}
?>

</body>
</html>
