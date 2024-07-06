<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_webproject";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>


<?php
// Run a SQL query
$sql = "SELECT * FROM absensi1";
$result = mysqli_query($conn, $sql);

// Fetch the result data
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. "";
    }
} else {
    echo "0 results";
}

// Close the connection
mysqli_close($conn);
?>