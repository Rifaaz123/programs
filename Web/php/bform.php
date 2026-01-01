<html>
<body>
<form method= "post" action="bform.php">
Id:<input type="text" name="bid">
Title:<input type="text" name="title">
Author:<input type="text" name="aname">
Edition:<input type="text" name="edition">
Publisher:<input type="text" name="publisher">
<input type="submit" name="submit">
</form>

<h3>Search Books by Author</h3>
<form name="searchForm" action="bform.php" method="post">
 <label>Author Name:</label>
 <input type="text" name="search_author">
 <input type="submit" name="search" value="Search"><br><br>
</form>

<?php

$$conn = mysqli_connect("localhost","root","","book");
if(!$conn)
{
die("connection failed".mysqli_connect_error());
}
echo "connected successfully";
echo "<br>";


if(isset($_POST['submit']))
{
 $bid=$_POST['bid'];
 $title=$_POST['title'];
 $aname=$_POST['aname'];
 $edition=$_POST['edition'];
 $publisher=$_POST['publisher'];

echo "Values are: ".'<br>';
echo "ID:".$bid.'<br>';
echo "Title:".$title.'<br>';
echo "Author:".$aname.'<br>';
echo "Edition:".$edition.'<br>';
echo "Publisher:".$publisher.'<br>';


$sql="insert into books values('$bid','$title','$aname','$edition','$publisher')";
if(mysqli_query($conn,$sql))
{
 echo "New record inserted successfully";
}

if (isset($_POST['search'])) {
 $search_author = $_POST['search_author'];
 $sql = "SELECT * FROM books WHERE author LIKE '%$search_author%'";
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
 echo "<h3>Search Results:</h3>";
 while ($row = mysqli_fetch_assoc($result)) {
 echo "Book ID : " . $row['bid'] . "<br>";
 echo "Title : " . $row['title'] . "<br>";
 echo "Author : " . $row['aname'] . "<br>";
 echo "Edition : " . $row['edition'] . "<br>";
 echo "Publisher : " . $row['publisher'] . "<br><br>";

 }
 } else {
 echo "<p><b>No books found for this author.</b></p>";
 }
}

mysqli_close($conn);
}
?>

</body>
</html>