
<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <center>
    <h1>Registration Form</h1>
    <hr>
    <br>

    <!-- HTML form -->
    
    <form action="DatabaseInsert.php"   method="POST">

 <fieldset>
  <legend>Basic Information:</legend>
        <!-- Input Text Field -->
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" required>

        <br>

        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" required>

        <br>

        <br>
        <label for="dob">Date of Birth: </label>
       <input type="date" id="dob" name="dob"
       value="2021-01-01">

      <br>
      <br>

        <!-- Radio -->
        <label for="gender">Gender</label>
        <input type="radio" name="gender" id="male" value="male" required>
        <label for="male">Male</label>

        <input type="radio" name="gender" id="female" value="female" required>

        <label for="female">Female</label>

        <br>
        <br>

         <!--Email/email-->
          <label for="email">Email Address:</label>
          <input type="email" id="email" name="email" required>
        <br>
        
        </fieldset>

       
        <fieldset>
        <legend>User Account Information </legend>
        
        <label for="username">User Name:</label>
        <input type="text" name="username" id="username" required>

        <br>
        <br>

        <label for="pass">Password</label>
        <input type="password" id="pass" name="pass" required>
        <br>
        <br>

       

         <input type="submit" value="Submit">

    </form>
</center>


</body>
</html>

