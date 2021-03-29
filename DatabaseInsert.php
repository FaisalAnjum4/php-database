<!DOCTYPE html>
<html>
<head>
    <title>Data Insert</title>
</head>
<body>

    <h1 style="  text-align:center;">Data Insert</h1>
     <p>
		
</p>
 <h1 style="  text-align:center; ;font-size : 20px;">
     <?php 

    $hostname = "localhost";
    $username = "admin";
    $password = "123";
    $dbname = "task";
    // Mysqli Procedural
    $conn2 = mysqli_connect($hostname, $username, $password, $dbname);
    if(mysqli_connect_error()) {
        echo "Database Connection Failed!...";
        echo "<br>";
        echo mysqli_connect_error();
    }
    else {
        echo "Database Connection Successful!";

         $stmt2 = mysqli_prepare($conn2, "insert into user (firstname,lastname,dob,gender,email,username,password) values (?, ?, ?, ?, ?, ?, ?)");
        mysqli_stmt_bind_param($stmt2, "sssssss", $f, $l , $d , $g , $e ,$u, $p);
        $f = $_POST['fname'];
       $l = $_POST['lname'];
       $d = $_POST['dob'];
       $g = $_POST['gender'];
       $e = $_POST['email'];
       $u = $_POST['username'];
       $p = $_POST['pass'];
        $res = mysqli_stmt_execute($stmt2);

 

        if($res) {
            echo " <br> Data Insert Successful!";


        }
        else {
            echo "Failed to Insert Data.";
            echo "<br>";
            echo $conn2->error;
        }
    }
?>
  <h1 style=" color: blue; text-align:center ;font-size : 30px;">
   <a href="Login.php">Login </a>
   <?php	
    mysqli_close($conn2);


    ?>
</h1>
 

</body>
</html>