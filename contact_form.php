<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database connection details
$servername = "localhost";
$username = "";
$password = "";
$dbname = "";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize a variable to hold feedback message
$feedback_message = "";

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data and sanitize
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $mobile = htmlspecialchars(trim($_POST['mobile']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Email settings
    $to = "";  // Replace with your email address
    $subject = "New Contact Form Submission";

    // Construct the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Mobile: $mobile\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        // Prepare SQL statement to insert form data into the database
        $stmt = $conn->prepare("INSERT INTO students (name, email, mobile, message) VALUES (?, ?, ?, ?)");
        
        if ($stmt === false) {
            die("Prepare failed: " . $conn->error);
        }

        $stmt->bind_param("ssss", $name, $email, $mobile, $message);

        // Execute the statement and check for success
        if ($stmt->execute()) {
            // Display thank you message
            $feedback_message = "Thank you for your response!";
        } else {
            $feedback_message = "Error inserting data into the database: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        // Display an error if the email couldn't be sent
        $feedback_message = "Error sending email: " . error_get_last()['message'];
    }
}

// Close the database connection
$conn->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Response</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
            margin: 0;
        }
        .message-box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="message-box">
        <p><?php echo $feedback_message; ?></p>
    </div>
    <script>
        // Show alert message
        alert("Thank you for your response!");

        // Redirect to index.html after 1 second
        setTimeout(function() {
            window.location.href = "https://sraryan.co.in/";
        }, 1000); // 1000 milliseconds = 1 second
    </script>
</body>
</html>
