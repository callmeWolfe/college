<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Validation</title>

   <style>
       table {
           background-color: white;
           margin: 1em auto;
           padding: 1em;
           box-shadow: 0 4px 10px rgba(0,0,0,0.2),
                       0 4px 20px rgba(0,0,0,0.19);
       }

       tr, td, th {
           padding: 1em;
           text-align: left;
       }

       .center th {
           text-align: center;
       }

       h2 {
           text-align: center;
           margin-top: 2em;
           background-color: black;
           color: white;
       }
   </style>
</head>

<body>

<h2>FORM VALIDATION</h2>

<form name="form" action="" method="POST">
   <table>
       <tr>
           <th>Name</th>
           <td><input type="text" name="fname" required></td>
       </tr>

       <tr>
           <th>Email</th>
           <td><input type="email" name="email" required></td>
       </tr>

       <tr>
           <th>Mob No</th>
           <td><input type="tel" name="mob" required></td>
       </tr>

       <tr>
           <th>Username</th>
           <td><input type="text" name="user" required></td>
       </tr>

       <tr>
           <th>Password</th>
           <td><input type="password" name="password" required></td>
       </tr>

       <tr class="center">
           <th colspan="2">
               <input type="submit" value="Submit" name="submit">
           </th>
       </tr>
   </table>
</form>

<?php
if (isset($_POST['submit'])) {

   $name = trim($_POST['fname']);
   $email = trim($_POST['email']);
   $mobile = trim($_POST['mob']);
   $user = trim($_POST['user']);
   $password = $_POST['password'];

   if ($name == "") {
       echo "<script>alert('Enter Name!');</script>";
   }
   else if (!preg_match("/^[a-zA-Z ]+$/", $name)) {
       echo "<script>alert('Enter a valid name!');</script>";
   }
   else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       echo "<script>alert('Enter a valid email!');</script>";
   }
   else if (!preg_match("/^[0-9]{10}$/", $mobile)) {
       echo "<script>alert('Enter a valid 10-digit mobile number!');</script>";
   }
   else if ($user == "") {
       echo "<script>alert('Enter Username!');</script>";
   }
   else if ($password == "") {
       echo "<script>alert('Enter Password!');</script>";
   }
   else if (strlen($password) < 8) {
       echo "<script>alert('Password must contain at least 8 characters!');</script>";
   }
   else if (!preg_match("/[0-9]/", $password)) {
       echo "<script>alert('Password must contain at least one number!');</script>";
   }
   else if (!preg_match("/[A-Z]/", $password)) {
       echo "<script>alert('Password must contain at least one capital letter!');</script>";
   }
   else if (!preg_match("/[a-z]/", $password)) {
       echo "<script>alert('Password must contain at least one lowercase letter!');</script>";
   }
   else {
       echo "<script>alert('Form submitted successfully!');</script>";
       echo "<h3 style='text-align:center;'>Form submitted successfully!</h3>";
   }
}
?>

</body>
</html>