<html> 
<head> 
<title>Calculate Electricity Bill</title> 
</head> 
<?php 
$result_str = $result = ''; 
if (isset($_POST['unit-submit'])) { 
$units = $_POST['units']; 
if (!empty($units)) { 
$result = calculate_bill($units); 
$result_str = 'Total amount for ' . $units . ' units: Rs. ' . $result; 
} 
} 
function calculate_bill($units) { 
if($units <= 100) { 
$bill = $units * 5; 
} else if($units > 100 && $units <= 200) { 
$bill = (100 * 5) + (($units - 100) * 7.5); 
} else { 
$bill = (100 * 5) + (100 * 7.5) + (($units - 200) * 10); 
} 
return number_format((float)$bill, 2, '.', ''); 
} 
?> 
<body> 
<div id="page-wrap"> 
<h1>Calculate Electricity Bill</h1> 
<form action="" method="post" id="quiz-form"> 
<input type="number" name="units" id="units" placeholder="Please enter number of Units" /> 
<input type="submit" name="unit-submit" id="unit-submit" value="Submit" /> 
</form> 
<div> 
<?php echo '<br />' . $result_str; ?> 
</div> 
</div> 
</body> 
</html>