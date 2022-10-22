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
  </head>
  <style>
      body
      {
        padding-top : 2%;
        background-image : url('images/registration.jpg');
        background-size : cover;
      }
    </style>

  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1>
          </div>
          <div class="panel-body">
            <form action="Register_s.php" method="post">
              <div class="form-group">
                <label for="id">Project Id</label>
                <input
                  type="text"
                  class="form-control"
                  id="id"
                  name="id"
                  required
                />
              </div>
            
              <div class="form-group">
                <label for="Project_name">Project Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Project_name"
                  name="Project_name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="Name">Name of Registrar</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  name="Name"
                  required
                />
              </div>
              <div class="form-group">
                <label for="Name">Email of Registrar</label>
                <input
                  type="text"
                  class="form-control"
                  id="Email"
                  name="Email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="role">Role of Registrar</label>
                <input
                  list="role"
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
                <label for="head">Head of the Project</label>
                <input
                  type="text"
                  class="form-control"
                  id="head"
                  name="head"
                  required
                />
              </div>
              <div class="form-group">
                <label for="sponsor">Sponsor</label>
                <input
                  type="text"
                  class="form-control"
                  id="sponsor"
                  name="sponsor"
                  required
                />
              </div>
              <div class="form-group">
                <label for="sponsor_email">Sponsor Email</label>
                <input
                  type="text"
                  class="form-control"
                  id="sponsor_email"
                  name="sponsor_email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="due_date">Due Date </label>
                <input
                  class="form-control"
                  id="due_date"
                  name="due_date"
                  type='date'
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