<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Signup Sample</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/signup.css">
    </head>
    <body>
        <?php
            // require('./config.php');
            $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "school_directory";
                
                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
            if(isset($_POST['signup_button'])){
                echo 'this is  working';
                $name = $_POST['name'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirmPassword = $_POST['confirmPassword'];
                echo $name;
            //    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password'])){
            //     if($password == $confirmPassword){
                
                
                $sql = "INSERT INTO account (email, username, pass)
                VALUES ('john@example.com', 'Doe', '21')";
                
                if ($conn->query($sql) === TRUE) {
                  echo "New record created successfully";
                } else {
                  echo "Error: " . $sql . "<br>" . $conn->error;
                }
                
                $conn->close();
        }
        ?>
        <div class = "form">
            <div class = "title">
                <p>Sign up here</p>
            </div>
            <form action = "" method= "post">
                <input type="text" name="name" placeholder="name">
                <input type="text" name="email" placeholder="email">
                <input type="text" name="password" placeholder="password">
                <input type="text" name="confirmPassword" placeholder="Confirm Password">
                <input type="submit" value="Sign Up" name="signup_button">
            </form>
        
        </div>
        
        <script src="" async defer></script>
    </body>
</html>