<!-- Check if form is submitted  -->
<?php 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve input values from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // SQL statement to insert data into a table
    $sql = "INSERT INTO signup (username,email,password) VALUES ('$name','$email','$password')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Sign Up successfully')</script>";
        header('location:signin.php');
    } else {
        echo "Error inserting data: " . $conn->error;
    }
}
?>