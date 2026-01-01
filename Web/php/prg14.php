<html> 
<body> 
<?php 
$players = array("MS Dhoni", "Virat Kohli", "Rohit Sharma", "Hardik Pandya", "Sachin Tendulkar "); 
echo "<table border='1' cellpadding='5'>"; 
echo "<tr><th>Cricket Players</th></tr>"; 
$arrlength = count($players); 
for($x = 0; $x < $arrlength; $x++) { 
echo "<tr><td>" . $players[$x] . "</td></tr>"; 
} 
echo "</table>"; 
?> 
</body> 
</html> 