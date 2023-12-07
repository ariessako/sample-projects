<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Sample</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="CSS/login.css">
    </head>
    <body>
    <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "school_directory";
            
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
        
            if(isset($_POST['login_button'])){
                echo 'this is  working';
                $_SESSION['validate'] = false;
                $email = $_POST['email'];
                $password = $_POST['password'];
                $sql = "SELECT * FROM account WHERE email='$email' AND pass='$password'";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                $rowcount=mysqli_num_rows($result);
                echo $row['email'];
                if($rowcount > 0){
                    $_SESSION['email'] = $email;
                    $_SESSION['pass'] = $password;
                    $_SESSION['validate'] = true;
                    echo 'you have logged in';
                }else {
                    echo 'Error';
                }
                // $result = $conn->query($sql);
                // echo $result;
                // $row =  $result->fetch_assoc();
                // echo $row;
            //     $rowcount=mysqli_num_rows($row);
            //    if($row > 0){
            //     $_SESSION = true;

            //    }
                
                $conn->close();
        }
        ?>
        <div class = "form">
            <div class = "title">
                <p>Login here</p>
            </div>
            <form action = "" method= "post">
                <input type="text" name="email" placeholder="email">
                <input type="text" name="password" placeholder="password">
                <input type="submit" value="Login" name="login_button">
            </form>
        
        </div>
        
        <script src="" async defer></script>
    </body>
</html>