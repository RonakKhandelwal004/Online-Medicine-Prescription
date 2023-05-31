<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve input values from the form
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "SELECT * FROM signup where email='$email' and password='$password' ";
    $result = $conn->query($sql);
    $row = mysqli_fetch_assoc($result);
    if ($result->num_rows == 1) {
        session_start();
        $_SESSION['email'] = $row['email'];
        if(isset($_SESSION['email'])){
            header('location:resister.php');
        }
        else 
        
         header('location:signin.php');
       
    }
    else {
        echo "<script>alert('Invalid username or password')</script>";
    }
}
?>