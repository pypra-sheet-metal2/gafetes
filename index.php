<?php
// Check if the 'id' parameter is set in the URL
if (isset($_GET['id'])) {
    // Retrieve the 'id' parameter from the URL
    $id = $_GET['id'];

    // Construct the redirection URL with the 'mobile' and 'id' parameters
    $redirectUrl = "http://192.168.100.90/gafetes/empleados.php?mobile&id=" . urlencode($id);

    // Redirect to the constructed URL
    header("Location: " . $redirectUrl);
    exit(); // Make sure the script stops executing after the redirect
} else {
    // If 'id' parameter is not set, display an error message
    echo "Error: 'id' parameter is required.";
}
?>
