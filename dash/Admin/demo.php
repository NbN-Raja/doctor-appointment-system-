

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doct";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT*  FROM appointment";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {

        echo "id: " . $row["id"] .
            "<br> name <br>:" . $row["department"] .
            "<br> Gender:" . $row["gender"];


            if($row['status']==1){
                echo "<p>  Active</p>"
            }
    }} else {

    echo "no resulkt";
}

mysqli_close($conn);
?>



