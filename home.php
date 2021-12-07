<?php
include('databaseconnection.php');
include('session.php');

$result = mysqli_query($con, "select * from users where user_id='$session_id'") or die('Error In Session');
$row = mysqli_fetch_array($result);

?>

<html>

<head>
  <link rel="stylesheet" type="text/css" href="homepage.css">
</head>

<body>

  <div class="home-form">
    <center>
      <h1>Hello <?php echo $row['name']; ?>. Welcome! </h1>
    </center>
    <div class="btn">
      <center>
        <a href="logout.php"><button id="logout__btn">LOG OUT</button></a>
      </center>
    </div>
  </div>


</body>

</html>