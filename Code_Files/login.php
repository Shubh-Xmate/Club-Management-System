<?php 
session_start();
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Club Management System</title>
  <link rel="icon" href="images/img_logo.ico">
  <style>
      body
{
  margin : 0;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  background-image: url('images/img_login8.jpg');
  background-size: cover;
}

.circle
{
  margin-left: 5%;
  margin-top: 5%;
  height: 20px;
  width: 20px;
  display : inline-block;
  border-radius: 100%;
  background-color: #99A799;
}

.main_heading
{
  color: #FEF5ED;
  font-size: 3rem;
  display: inline-block;
}

.center_div
{
  margin : 3% auto 5% auto;
  background-color : #fbfbfb;
  height: 60vh;
  width: 35vw;
  border-radius: 4%;
}

.login_image
{
  margin-left: 4%;
  height: 5%;
  width: 5%;
  display: inline-block;
}

.login_heading
{ 
  margin-left: 2%;
  display: inline-block;
  font-size: 2rem;
  font-weight: bold;
}

.login_label
{
  margin-left : 10%;
  margin-top: 6%;
  display: block;
  font-size: 1.2rem;
}

.input_text
{
  margin-left : 10%;
  width: 60%;
  display: block;
  font-size: 1.5rem;
}

.horizontal_line
{
  width: 80%;
  margin-top: 4%;
  margin-right: auto;
  margin-left: auto;
  height: 0.5%;
  background-color:gray;
}

.submit_button
{
  display: block;
  margin-top: 8%;
  width: 80%;
  background-color: #0066A2;
  color: white;
  margin-left: auto;
  margin-right: auto;
  font-size: 1.4rem;
}
  </style>
</head>

<body>
    <!-- circle bar -->
      <div class="circle"></div>
      <h3 class = "main_heading">Club Management System</h3>

      <!-- login div -->
      <div class = "center_div">
        <div>
          <br><br>
          <img src="images/img_logo.ico" class = "login_image" alt="cms..">
          <h2 class = "login_heading">Login to your account</h2>
        </div>
        <hr class = "horizontal_line">
        <form class="userform" action="" method="post">
          <label class="login_label" for="usename"><b>username</b></label>
          <input class="input_text" type="text" name="usename">
          <label class="login_label" for="password"><b>password</b></label>
          <input class="input_text" type="password" name="password">
         
          <input class="submit_button" type="submit" name="submit" value="submit">
          <hr class = "horizontal_line">
        </form>
      </div>
</body>
</html>





<?php 
    if(isset($_POST['submit'])){
    $_SESSION["usename"] = $_POST['usename'];
    $_SESSION["password"] = $_POST['password'];
    $usename = $_SESSION["usename"];
    $password = $_SESSION["password"];
    // adding password encryption
    
    $mysqli = new mysqli('localhost','root','','robotronics');
    $query = "select * from login where name = '$usename'";
    $result = $mysqli->query($query);
    $login = false;
    $role = "";

    if ($result->num_rows > 0) 
    {     
      foreach($result as $row) {
          $role = $row['role'];
          if (password_verify($password, $row['password'])) {
            $login = true;
          }
      }  
    } 

    if ($login) {
        if ($role == "authority"){
          header("Location: requests.php");
          exit;
        }
        else{
          header("Location: project.php");
          exit;
        }
    } else {
        ?>
        <script>
            alert( "Access Denied. You may have entered the wrong input details.")
        </script>
    <?php
        }

    unset($_POST['submit']);
    $mysqli->close();

  }
?>



