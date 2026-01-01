<html>
<head>
<title>Student Registration Form</title>
</head>
<body bgcolor="sky blue">
<center>
<h1>STUDENT REGISTRATION FORM</h1>
<form method="post" onsubmit="return validateForm()" action="form.php">
Name:<input type="text" id="name" name="name"><br><br>
Address:<textarea name="address" id="address"></textarea><br><br>
Age:<input type="text" id="age" name="age"><br><br>
Email:<input type="text" id="email" name="email"><br><br>
DOB:<input type="date" id="dob" name="dob"><br><br>
Phoneno:<input type="text" id="phone" name="phone"><br><br>
Gender:
    <input type="radio" id="gender1" name="gender" value="male">MALE
    <input type="radio" id="gender2" name="gender" value="female">FEMALE
    <input type="radio" id="gender3" name="gender" value="others">OTHERS<br><br>
Course:
<select name="course" id="course">
    <option value="mca">MCA</option>
    <option value="mtech">MTech</option>
    <option value="mba">MBA</option>
</select><br><br>
Password:<input type="password" id="password" name="password"><br><br>
<input type="checkbox" id="declare" name="declare">I hereby declare that above details are correct<br><br>
<input type="submit" name="submit">
<input type="reset" name="reset">
</center>
</form>
<script>
function validateForm() {
    let name = document.getElementById("name").value.trim();
    let age = document.getElementById("age").value.trim();
    let email = document.getElementById("email").value.trim();
    let dob = document.getElementById("dob").value.trim();
    let phone = document.getElementById("phone").value.trim();
    let g1 = document.getElementById("gender1");
    let g2 = document.getElementById("gender2");
    let g3 = document.getElementById("gender3");
    let gender = g1.checked || g2.checked || g3.checked;
    let password = document.getElementById("password").value;
        if (!name || !age || !email || !dob || !phone || !gender  || !password ) {
        alert("all field are required ");
        return false;
    }
    const ep = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z0-9]{2,6}$/;
    if (!ep.test(email)) {
        alert("Enter valid email address");
        return false;
    }
    const pp = /^[0-9]{10}$/;
    if (!pp.test(phone)) {
        alert("Enter 10 digits number");
        return false;
    }
    if (password.length < 6) {
        alert("Enter at least 6 characters for password");
        return false;
    }
    else
    {
    alert("registered successfully");
    return true;
    }
}
</script>
<?php
$conn=mysqli_connect("localhost","root","","mca");
if(!$conn){
die("connection failed".mysgli_error());
}
echo "connection successful";
echo "<br>";

/*
$sql="create table form(name varchar(15) primary key,email varchar(20) not null,phone int(10) not null)";
if(mysqli_query($conn,$sql))
{

echo "table created";
}
else
{
echo "error occured".mysqli_error($conn);
}
*/

if(isset($_POST['submit']))
{
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phone=$_POST['phone'];

echo "Values are: ".'<br>';
echo "Name:".$name.'<br>';
echo "Email:".$email.'<br>';
echo "Phone:".$phone.'<br>';

$ins="insert into form values('$name','$email','$phone')";
if(mysqli_query($conn,$ins))
{
echo "inserted successfully";
echo "<br>";
}

$ret="select name,email,phone from form";
$result=mysqli_query($conn,$ret);

if(mysqli_num_rows($result)>0){
while($row = mysqli_fetch_assoc($result))
{
echo "Name:".$row["name"]." email:".$row["email"] ."<br>";
}

}
}
mysqli_close($conn);
?>

</body>
</html>
