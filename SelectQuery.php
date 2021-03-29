<!DOCTYPE html>
<html>
<head>
    <title>Database Select</title>
</head>
<body>

    <h1>Database Select</h1>
    <?php 

    $hostname = "localhost";
    $username = "admin";
    $password = "123";
    $dbname = "task";
    
    $conn1 = new mysqli($hostname, $username, $password, $dbname);
    if($conn1->connect_errno) {
        echo "1. Database Connection Failed!...";
        echo "<br>";
        echo $conn1->connect_error;
    }
    else {
        echo "1. Database Connection Successful!";
      echo "<br>";

        $stmt = $conn1->prepare("select id, firstname, username, password from user where username = ? && password = ?");
        $stmt->bind_param("ss", $u , $p);
        $u = $_POST['username'];
        $p = $_POST['password'];
        
        $stmt->execute();
        $res2 = $stmt->get_result();
        $user = $res2->fetch_assoc();

        echo "<br>";
        echo "<br>";
        echo "id: " .$user['id'];
                echo "<br>";
                echo "firstname: " .$user['firstname'];
                echo "<br>";
                echo "username: " .$user['username'];
                echo "<br>";
                echo "password: " .$user['password'];
                echo "<br>";
                echo "<br>";

 }
    $conn1->close();
    ?>

</body>
</html>