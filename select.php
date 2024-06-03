<?php
include 'db_connection.php';
$conn = OpenCon();

// SQL query to retrieve data
$sql = "SELECT * FROM products";

// Executing the query and storing the result
$result = mysqli_query($conn, $sql);

// Checking if the query was successful
if (mysqli_num_rows($result) > 0) {
    // Outputting the data
    while ($row = mysqli_fetch_assoc($result)) {
        echo "ID: $row[id]<br>Name: $row[name]<br>Price: $row[price]<br>Quantity: $row[quantity]<br><br>";
    }
} else {
    echo "0 results";
}

CloseCon($conn);
?>