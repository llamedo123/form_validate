<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $lastname = test_input($_POST["lastname"]);
    $firstname = test_input($_POST["firstname"]);
    $email = test_input($_POST["email"]);
    $age = test_input($_POST["age"]);
    $address = test_input($_POST["address"]);
    $gender = test_input($_POST["gender"]);
    $comment = test_input($_POST["comment"]);

    // Validation rules
    $errors = [];
    if (empty($lastname)) {
        $errors[] = "Lastname is required.";
    }
    if (empty($firstname)) {
        $errors[] = "Firstname is required.";
    }
    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }
    if (empty($age)) {
        $errors[] = "Age is required.";
    } elseif (!is_numeric($age) || $age < 0) {
        $errors[] = "Age must be a positive number.";
    }
    if (empty($address)) {
        $errors[] = "Address is required.";
    }
    if (empty($gender)) {
        $errors[] = "Gender is required.";
    }

    // Display form submission result
    if (empty($errors)) {
        echo "<h2>Form Submission Successful</h2>";
        echo "<p>Lastname: $lastname</p>";
        echo "<p>Firstname: $firstname</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Gender: $gender</p>";
        echo "<p>Comment: $comment</p>";
    } else {
        echo "<h2>Form Submission Failed</h2>";
        foreach ($errors as $error) {
            echo "<p>Error: $error</p>";
        }
    }
}

// Helper function to sanitize input values
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
</body>
</html>