<html>
<head>
<title>BOOK DETAILS</title>
</head>
<body>
<center>
<h2>BOOK DETAILS</h2>
<form name="books" action="bdetails.php" method="post">
Book ID: <input type="text" name="bid"><br><br>
Title: <input type="text" name="title"><br><br>
Author: <input type="text" name="author"><br><br>
Edition: <input type="text" name="edition"><br><br>
Publisher: <input type="text" name="publisher"><br><br>
<input type="submit" name="submit" value="Submit">
</form>
<br><br>
<form name="search" action="bdetails.php" method="post">
Search by Author: <input type="text" name="sea">
<input type="submit" name="search" value="Search">
</form>
</center>
<?php
$conn = mysqli_connect("localhost", "root", "", "mca");
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
$bid = $_POST['bid'];
$title = $_POST['title'];
$author = $_POST['author'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];
echo "<center>";
echo "<h3>Entered Details:</h3>";
echo "Book ID: $bid<br>";
echo "Title: $title<br>";
echo "Author: $author<br>";
echo "Edition: $edition<br>";
echo "Publisher: $publisher<br>";
echo "</center>";
$insert = "INSERT INTO books (bid, title, author, edition, publisher)
VALUES ('$bid', '$title', '$author', '$edition', '$publisher')";
if (mysqli_query($conn, $insert)) {
echo "<br><center><b>Record Inserted Successfully</b></center><br>";
} else {
echo "<center>Error: " . mysqli_error($conn) . "</center>";
}
}
if (isset($_POST['search'])) {
$sea = $_POST['sea'];
$sql = "SELECT * FROM books WHERE author LIKE '%$sea%'";
$res = mysqli_query($conn, $sql);
echo "<center>";
if (mysqli_num_rows($res) == 0) {
echo "<br>No record found.";
} else {
echo "<h3>Search Results</h3>";
echo "<table border='1' cellpadding='5'>
<tr>
<th>Book ID</th>

<th>Title</th>
<th>Author</th>
<th>Edition</th>
<th>Publisher</th>
</tr>";
while ($row = mysqli_fetch_assoc($res)) {
echo "<tr>
<td>".$row['bid']."</td>
<td>".$row['title']."</td>
<td>".$row['author']."</td>
<td>".$row['edition']."</td>
<td>".$row['publisher']."</td>
</tr>";
}
echo "</table>";
}
echo "</center>";
}
mysqli_close($conn);
?>
</body>
</html>