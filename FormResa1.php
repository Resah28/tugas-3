<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
        <h1>Welcome to the home page</h1>
        <?php
        // Check if the cookies are set
        if(isset($_COOKIE['name']) && isset($_COOKIE['age']) && isset($_COOKIE['address'])){
            // Retrieve the cookie values
            $name = $_COOKIE['name'];
            $age = $_COOKIE['age'];
            $address = $_COOKIE['address'];
            
            // Display the biodata using Bootstrap
            echo "<div class='panel panel-default'>";
            echo "<div class='panel-heading'><h4>Biodata</h4></div>";
            echo "<div class='panel-body'>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Address:</strong> $address</p>";
            echo "</div></div>";
        }
        else{
            echo "<p>No biodata found. Please fill in the biodata form <a href='biodata-form.php'>here</a>.</p>";
        }
        ?>
    </div>
</body>
</html>