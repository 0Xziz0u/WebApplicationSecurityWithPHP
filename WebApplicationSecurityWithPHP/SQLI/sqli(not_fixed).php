<!---- NoT fixed code ---->

<?php
$servername = "localhost";
$username = "ziz0u";
$password = "1234";
$dbname = "student";
if (isset($_GET['id'])){
    $id = $_GET['id'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

/* This line checks if there was an error connecting to the database. If an error occurs
it terminates the script and displays an error message.
*/
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM sqli WHERE ID=".$id;
$result = $conn->query($sql);
if (!empty($result) && $result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "ID : ". $row["ID"] . "<br/>";
}
}
$conn->close();
}
?>
