<html>
<body>

<p>Thank you for reaching out to us</p><?php echo $_POST["name"]; ?><br>
<p>Your email address is:</p> <?php echo $_POST["email"]; ?>
<p>We will be in contact you shortly.</p>

</body>
</html>




<!--<?php
//connect to the database and add data to the database based on user input READ DATA
$user="root";
$pass="root";
$dbh = new PDO('mysql:host=localhost;stemDb=ssl;port=8889', $user, $pass);
if ($_SERVER['REQUEST_METHOD']=='POST') {
  $name=$_POST['name']; //get POST values
  $email=$_POST['email']; //get POST values
  $textarea=$_POST['textarea']; //add on post value
  $stmt=$dbh->prepare("INSERT INTO ContactFormData (name, email, textarea) VALUES (:name, :email, :textarea);");
  $stmt->bindParam(':name', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':textarea', $textarea);
  $stmt->execute(); //------------------------------------------------RETURNING ERROR!!!
};
?> -->