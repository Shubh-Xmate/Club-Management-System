<?php
  $id = $_POST['id'];
  $CN = $_POST['CN'] ;
?>


<!DOCTYPE html>
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
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Application Form</h1>
          </div>
          <div class="panel-body">
            <form action="action.php" method="post">
              <div class="form-group">
                <label for="Name">Club</label>
                <input
                  type="text"
                  class="form-control"
                  id="CN"
                  name="CN"
                  value = <?php echo $CN?>
                  required
                />
              </div>
            
              <div class="form-group">
                <label for="id">Project Id</label>
                <input
                  type="text"
                  class="form-control"
                  
                  id="id"
                  name="id"
                  value = <?php echo $id?>
                  required
                />
              </div>
              <div class="form-group">
                <label for="Name">Name</label>
                <input
                  type="text"
                  placeholder="Enter your name"
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
                  placeholder="Enter your role"
                  name="role"
                  id="rolr"
                  class="form-control"
                  required
                />
                <datalist id="role">
                  <option value="Co-ordinator"></option>
                  <option value="Core-member"></option>
                  <option value="Teacher-associate"></option>
                  <option value="Student-associate"></option>
                </datalist>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input
                  type="text"
                  placeholder="Enter your email-id"
                  class="form-control"
                  id="email"
                  name="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="password">Passcode for approval</label>
                <input
                  type="password"
                  class="form-control"
                  id="password"
                  name="password"
                  required
                />
              </div>
              <div class="form-group">
                <label for="number">Phone Number</label>
                <input
                  class="form-control"
                  placeholder="Enter your phone number"
                  id="number"
                  name="number"
                  required
                />
              </div>
              <div class="form-group">
                <label for="number">Budget</label>
                <input
                  class="form-control"
                  placeholder="Enter the amount"
                  id="Budget"
                  name="Budget"
                  required
                />
              </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
