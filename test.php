<?php
  include_once 'header.php';
?>
<?php
if (isset($_POST['submit'])){
  $servername="localhost";
  $username = "root";
  $password = "root";
  $dbname = "lale_pink";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Connection failed" . $conn->connect_error);
    }
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $username = $_POST['user_name'];
    $pwd = $_POST['pwd'];
    $pwdHashed = password_hash($pwd, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (first_name, last_name, email, address, username, password) VALUES ('$fname', '$lname', '$email', '$address', '$username', '$pwdHashed');";
    
    if ($conn->query($sql)){
      echo "New record created successfully!";
  } else {
      echo "Error creating new record: " . $conn->error;
  }
  $conn->close();
  }
?>
    <div class="container my-5 pt-5">
      <h2 class="text-center">SIGN UP</h2>
      <div class="text-center">
        <p>Thank you for sign up!</p>
        <p>Enjoy your shopping!</p>
        <button class="btn btn-success mb-5"><a href="index.php" class="text-white">LET'S SHOPPING</a></button>
      </div>
      <?php
  include_once 'footer.php';
?>