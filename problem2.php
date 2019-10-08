<!DOCTYPE html>
<html>
<body>

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
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
