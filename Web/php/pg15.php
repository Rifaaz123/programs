<html> 
<head> 
</head> 
<body> 
<?php 
$name = $email = $password = $phone = $gender = $address = ""; 
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    if (empty($_POST["name"])) { 
        $name = "Name is required"; 
    } else { 
        $name = test_input($_POST["name"]); 
    } 
    if (empty($_POST["email"])) { 
        $email = "Email is required"; 
    } else { 
        $email = test_input($_POST["email"]); 
    } 
    if (empty($_POST["password"])) { 
        $password = "Password is required"; 
    } else { 
        $password = test_input($_POST["password"]); 
    } 
    if (empty($_POST["phone"])) { 
        $phone = "Phone number is required"; 
    } else { 
        $phone = test_input($_POST["phone"]); 
    } 
if (empty($_POST["gender"])) { 
$gender = "Gender is required"; 
} else { 
$gender = test_input($_POST["gender"]); 
} 
if (empty($_POST["address"])) { 
$address = "Address is required"; 
} else { 
$address = test_input($_POST["address"]); 
} 
} 
function test_input($data) { 
$data = trim($data); 
$data = stripslashes($data); 
$data = htmlspecialchars($data); 
return $data; 
} 
?> 
<h2>Registration Form</h2> 
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
Name: <input type="text" name="name"> 
<br><br> 
Email: <input type="text" name="email"> 
<br><br> 
Password: <input type="password" name="password"> 
<br><br> 
Phone: <input type="text" name="phone"> 
<br><br> 
Gender: 
<input type="radio" name="gender" value="Male">Male 
<input type="radio" name="gender" value="Female">Female 
<input type="radio" name="gender" value="Other">Other 
<br><br> 
Address: <textarea name="address" rows="4" cols="40"></textarea> 
<br><br> 
<input type="submit" name="submit" value="Register"> 
</form> 
<?php 
echo "<h2>Your Input:</h2>"; 
echo $name; 
echo "<br>"; 
echo $email; 
echo "<br>"; 
echo $password; 
echo "<br>"; 
echo $phone; 
echo "<br>"; 
echo $gender; 
echo "<br>"; 
echo $address; 
?> 
</body> 
</html>