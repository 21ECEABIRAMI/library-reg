<?php include("./index.html")
    ?>
<?php
// Database connection settings
$_servername = "localhost";
$_username = "root";
$_password = "Abi@0805";
$_dbname = "testdatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



if ($conn->query($sql) === TRUE) {
    echo "SUCCESSFULLY SUBMITTED";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


// Close connection
$conn->close();
?>