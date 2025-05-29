<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$name = $_POST['name'];
$link = $_POST['link'];
$cat = $_POST['cat'];
$comments = $_POST['comments'];

// Establish database connection
$con = mysqli_connect("localhost", "root", "", "add_account");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Escape input values to prevent SQL injection
$name_escaped = mysqli_real_escape_string($con, $name);

// Check if the account already exists
$result = mysqli_query($con, "SELECT * FROM compte WHERE nom='$name_escaped'");
if (mysqli_num_rows($result) == 0) {
    // Insert new account if it doesn't exist
    $req = "INSERT INTO compte VALUES ('$name_escaped', '$cat', '$link', '$comments')";
    if (mysqli_query($con, $req)) {
        // Redirect to success page
        header("Location: add_success.html");
        exit;
    } else {
        // Redirect to fail page if insertion fails
        header("Location: add_fail.html");
        exit;
    }
} else {
    // Redirect to fail page if account already exists
    header("Location: add_fail.html");
    exit;
}

// Close database connection
mysqli_close($con);
?>
