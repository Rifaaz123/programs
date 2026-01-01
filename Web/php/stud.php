<html>
<head>
<title>Student Details</title>
</head>
<body>
<center>
<h1>STUDENT  DETAILS</h1>
<form method="post" action="stud.php">
RollNo:<input type="text" id="rollno" name="rollno"><br><br>
Name:<input type="text" id="name" name="name"><br><br>
Age:<input type="text" id="age" name="age"><br><br>
Course:<input type="text" id="course" name="course"><br><br>
<input type="submit" name="submit">
</form>


<?php
$conn = mysqli_connect("localhost","root","","stud");
if (!$conn) {
die("Connection failed".mysqli_connect_error());
}

if(isset($_POST['submit']))
{
 $rollno=$_POST['rollno'];
 $name=$_POST['name'];
 $age=$_POST['age'];
 $course=$_POST['course'];

echo "Values are: ".'<br>';
echo "Rollno:".$rollno.'<br>';
echo "Name:".$name.'<br>';
echo "Age:".$age.'<br>';
echo "Course:".$course.'<br>';

$ins="insert into students values('$rollno',$name','$age','$course')";
if(mysqli_query($conn,$ins))
{
echo "inserted successfully";
echo "<br>";
}

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
if (!$result) {
die("Query Failed:". mysqli_error($conn));
}
if (mysqli_num_rows($result) > 0) {
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>ROLLNO</th><th>Name</th><th>AGE</th><th>COURSE</th></tr>";
while($row = mysqli_fetch_assoc($result)) {
echo "<tr>";
echo "<td>". $row["rollno"] ."</td>";
echo "<td>". $row["name"] ."</td>";
echo "<td>". $row["age"] ."</td>";
echo "<td>". $row["course"] ."</td>";
echo "</tr>";}
echo "</table>";}
else {
echo "No records found";
}
}
mysqli_close($conn);
?>
</center>
</body>
</html>