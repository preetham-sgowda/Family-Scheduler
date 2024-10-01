<?php 
include 'connect.php';

// Auto-generate Family Code
function generateFamilyCode() {
    return substr(md5(uniqid(mt_rand(), true)), 0, 8); // Generates a random 8-character code
}

if(isset($_POST['signUp'])){
    $firstName = $_POST['fName'];
    $lastName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);
    $familyCode = generateFamilyCode();  // Generate family code for the new user

    // Check if email already exists
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    
    if($result->num_rows > 0){
        echo "Email Address Already Exists!";
    } else {
        // Insert new user with family code
        $insertQuery = "INSERT INTO users(firstName, lastName, email, password, familyCode) 
                        VALUES ('$firstName', '$lastName', '$email', '$password', '$familyCode')";
        if($conn->query($insertQuery) === TRUE){
            header("location: index.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
   $email = $_POST['email'];
   $password = $_POST['password'];
   $password = md5($password);
   $familyCode = $_POST['familyCode'];

   // Check if email, password, and family code match
   $sql = "SELECT * FROM users WHERE email='$email' AND password='$password' AND familyCode='$familyCode'";
   $result = $conn->query($sql);
   
   if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
   } else {
        echo "Incorrect Email, Password, or Family Code";
   }
}
?>
