<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_input($_POST["name"]);
    $email = sanitize_input($_POST["email"]);
    $message = sanitize_input($_POST["message"]);
    // Validation
    $nameErr = "";
    $emailErr = "";

    if (empty($name)) {
        $nameErr = "Name is required";
    } else {
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }

    if (empty($email)) {
        $emailErr = "Email is required";
    } else {
        // Check if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    // If there are no validation errors, process the form data
    if (empty($nameErr) && empty($emailErr)) {
        // Process the form data here
        // For example, you can store the data in a database or send an email
        // But for this example, we'll just display a success message
        echo "Form submitted successfully!";
    }
}

// Function to sanitize user input
function sanitize_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
  

// Function to establish a database connection and return the connection object
function connectDatabase() {
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';
    $dbname = 'portfoliodb';

    // Create a database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    return $conn;
}

// Function to insert project details into the database
function insertProject($projectData) {
    // Connect to the database
    $conn = connectDatabase();

    // Perform insert operation here using $projectData

    // Example query
    $sql = "INSERT INTO projects (name, description, client) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $projectData['name'], $projectData['description'], $projectData['client']);

    if ($stmt->execute()) {
        return true; // Insert successful
    } else {
        return false; // Insert failed
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}

// Function to retrieve project data from the database
function getProjects() {
    // Connect to the database
    $conn = connectDatabase();

    // Perform select operation here and return the result

    // Example query
    $sql = "SELECT * FROM projects";
    $result = $conn->query($sql);

    // Process the result and return the data

    // Close the connection
    $conn->close();

    return $projectData; // Return the retrieved data
}

// Function to update project information in the database
function updateProject($projectData) {
    // Connect to the database
    $conn = connectDatabase();

    // Perform update operation here using $projectData

    // Example query
    $sql = "UPDATE projects SET name=?, description=?, client=? WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $projectData['name'], $projectData['description'], $projectData['client'], $projectData['id']);

    if ($stmt->execute()) {
        return true; // Update successful
    } else {
        return false; // Update failed
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}

// Function to delete projects from the database
function deleteProject($projectId) {
    // Connect to the database
    $conn = connectDatabase();

    // Perform delete operation here using $projectId

    // Example query
    $sql = "DELETE FROM projects WHERE id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $projectId);

    if ($stmt->execute()) {
        return true; // Delete successful
    } else {
        return false; // Delete failed
    }

    // Close the connection
    $stmt->close();
    $conn->close();
}

// Add more custom functions based on your specific requirements

?>
