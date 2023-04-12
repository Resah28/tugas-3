<?php
// Check if the form has been submitted
if(isset($_POST['submit'])){
    // Retrieve the form data
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    
    // Set the cookies to store the user's biodata
    setcookie('name', $name, time() + (86400 * 30)); // expires in 30 days
    setcookie('age', $age, time() + (86400 * 30));
    setcookie('address', $address, time() + (86400 * 30));
    
    // Redirect the user to the biodata display page
    header('Location: biodata.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata Form</title>
</head>
<body>
    <h1>Biodata Form</h1>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>
        
        <label for="age">Age:</label>
        <input type="number" name="age" required><br><br>
        
        <label for="address">Address:</label>
        <textarea name="address" rows="5" cols="30" required></textarea><br><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>