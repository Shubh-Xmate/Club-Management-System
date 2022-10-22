<style>

	.button {
        border: none;
        color: white;
        padding: 6px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin-top : 5%;
        margin-left : 4%;
        margin-bottom : 5%;
        transition-duration: 0.4s;
        cursor: pointer;
      }

      .button1 {
        background-color: white;
        color: black;
        border: 2px solid green;
      }
      .button1:hover {
        background-color: green;
        color: white;
      }
</style>
<?php 
session_start();
?>

<html>
  <head>
    <title>Registration Page</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />
    <link rel = "icon" href = "images/img_logo.ico">

    <style>
      body
      {
        padding-top : 2%;
        background-image : url('images/application.jpg');
        background-size : cover;
      }
      
    </style>
  </head>

  <body>
    <div class="container" >
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="" method="post">
              <div class="form-group">
                <label for="Name">Club</label>
                <input
                  type="text"
                  class="form-control"
                  id="ClubName"
                  name="ClubName"
                  required
                  value ="Robotronics"
                />
              </div>

              <div class="form-group">
                <label for="Name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  name="Name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="role">Role</label>
                <input
                  list="role"
                  name="role"
                  id="rolr"
                  class="form-control"
                  required
                />
                <datalist id="role">
                  <option value="coordinator"></option>
                  <option value="authority"></option>
                </datalist>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="email"
                  name="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Passcode for recognition of role</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Set password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
              </div>
              
              <input id="submit" name="submit" type="submit" required class="btn btn-primary" />

            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>



<?php 
    echo "<script>document.getElementByClassName('container').style.display = 'none';</script>";
    if(isset($_POST['submit'])){
    $_SESSION["Name"] = $_POST['Name'];
    $_SESSION["role"] = $_POST['role'];
    $_SESSION["email"] = $_POST['email'];
    $_SESSION["password"] = $_POST['password'];
    $Name = $_SESSION["Name"];
    $role = $_SESSION["role"];
    $email = $_SESSION["email"];
    $password = $_SESSION["password"];

        $conn = new mysqli('localhost','root','','robotronics');
        $sql = "INSERT INTO `login`(`name`, `email`, `password`, `role`) 
        VALUES ('$Name','$email','$password','$role')";

        if (mysqli_query($conn, $sql)) {
            echo "<h2 style='color:green'>Registration successful</h2>" ;
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } ;

        $to_email = $email;
        $subject = "Login details ";
        $body = "You have succesfully activated your account with role : $role

login details as follows
Name : $Name
Email : $email
Password : $password

please remember the password , if any query contact site owners
        
        
        ";
        
        if (mail($to_email, $subject, $body)) {
            echo "<br><h2 style='color:green'>Email with login details sent to : $email  </h2>";
        } else {
            echo "Email sending failed... :( , due to some technical issue";
        } ;
        echo '<html>
        <form action="login.php">
            <br><br><button
            class="button button1"
            >
                Click here to go back
            </button>
        </form>
        </html>
        ' ;
    } ;
?>