<?php
session_start();
$mysqli = new mysqli('localhost','root','','Robotronics');
$sql = "SELECT * FROM requests_robo";
$result = $mysqli->query($sql);
$approved = $mysqli->query("SELECT * FROM app_req_robo");
$rejected = $mysqli->query("SELECT * FROM rej_req_robo");
$mysqli->close(); 
?>

<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="UTF-8">
      <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <link rel="icon" href  = "images/img_logo.ico">
  <!-- Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
    <title>Authorities</title>


    <!-- CSS FOR STYLING THE PAGE -->
    <style>
      body
      {
        margin : 0; 
        font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
        background-color : #D3E4CD;
      }

      #project {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 90%;
        margin-left:4%;
        margin-bottom : 10%;
      }

      #project td,
      #project th {
        border: 1px solid #ddd;
        padding: 8px;
      }

      #project tr:nth-child(even) {
        background-color: #f2f2f2;
      }

      #project tr:hover {
        background-color: #ddd;
      }

      #project th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #04aa6d;
        color: white;
      }
      .NA {
        color: red;
      }

      .button {
        border: none;
        color: white;
        padding: 6px 12px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
      }

      .button1 {
        background-color: white;
        color: black;
        border: 2px solid #4caf50;
      }

      .button1:hover {
        background-color: #4caf50;
        color: white;
      }
      .button2 {
        background-color: white;
        color: black;
        border: 2px solid red;
      }

      .button2:hover {
        background-color: red;
        color: white;
      }

      .head_doc
      {
        height : 80vh;
        width : 99vw;
        background-image : url('images/club2.png');
        background-size : cover;
      }

      .head_heading
      {
        text-align : center;
        font-size : 2rem;
        margin-top : 0;
      }

      h4
      {
        margin-top : 5%;
        text-align : center;
      }
    </style>
</head>
</head>
  
<body>

<section class = "head_doc">
      <br><br>
        <h1 class = "head_heading">Hello <?php echo $_SESSION['usename']; ?></h1>
    </section>

    <!-- pending section -->
    <section id="pending">
        <h4>Follow to the Pending Requests</h4>
        <!-- TABLE CONSTRUCTION-->
        <table id="project">
            <tr>
                <th>Project Id</th>
                <th>Applicant Name</th>
                <th>Applicant Role</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Budget</th>
                <th>Request Date</th>
                <th>Approve</th>
                <th>Reject</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Project_Id'];?></td>
                <td><?php echo $rows['Applicant_Name'];?></td>
                <td><?php echo $rows['Applicant_Role'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Phone_no'];?></td>
                <td><?php echo $rows['Budget'];?></td>
                <td><?php echo $rows['Request_date'];?></td>
                <td>
                  <form method="post" action="Approve.php" target=”_blank”>
                    <input type="text" name="CN" id="CN" hidden value=<?php echo $rows['Club_Name']?>>
                    <input type="text" name="Project_Id" id="Project_Id" hidden value=<?php echo $rows['Project_Id']?>>
                    <input type="text" name="Applicant_Name" id="Applicant_Name" hidden value=<?php echo $rows['Applicant_Name']?>>
                    <input type="text" name="Applicant_Role" id="Applicant_Role" hidden value=<?php echo $rows['Applicant_Role']?>>
                    <input type="text" name="Email" id="Email" hidden value=<?php echo $rows['Email']?>>
                    <input type="text" name="Budget" id="id" hidden value=<?php echo $rows['Budget']?>>
                    <input type="text" name="Phone_no" id="id" hidden value=<?php echo $rows['Phone_no']?>>
                    <input type="text" name="Request_date" id="id" hidden value=<?php echo $rows['Request_date']?>>
                          <button
                            class="button button1"
                            type ="submit"
                            name = "bt1"
                            >
                            Click here to Approve
                            </button>
                    </form>
                </td>
                <td>
                  <form method="post" action="Reject.php" target=”_blank”>
                    <input type="text" name="CN" id="CN" hidden value=<?php echo $rows['Club_Name']?>>
                    <input type="text" name="Project_Id" id="Project_Id" hidden value=<?php echo $rows['Project_Id']?>>
                    <input type="text" name="Applicant_Name" id="Applicant_Name" hidden value=<?php echo $rows['Applicant_Name']?>>
                    <input type="text" name="Applicant_Role" id="Applicant_Role" hidden value=<?php echo $rows['Applicant_Role']?>>
                    <input type="text" name="Email" id="Email" hidden value=<?php echo $rows['Email']?>>
                    <input type="text" name="Budget" id="id" hidden value=<?php echo $rows['Budget']?>>
                    <input type="text" name="Phone_no" id="id" hidden value=<?php echo $rows['Phone_no']?>>
                    <input type="text" name="Request_date" id="id" hidden value=<?php echo $rows['Request_date']?>>
                          <button
                            class="button button2"
                            type ="submit"
                            name = "bt1"
                            >
                            Click here to Reject
                            </button>
                    </form>
                </td>
    
            </tr>
            <?php
                }
             ?>
        </table>
    </section>

    
    <section id="Rejected">
        <h4>See the Rejected Requests</h4>
        <!-- TABLE CONSTRUCTION-->
        <table id="project">
            <tr>
                <th>Project Id</th>
                <th>Applicant Name</th>
                <th>Applicant Role</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Budget</th>
                <th>Rejection Date</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$rejected->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Project_Id'];?></td>
                <td><?php echo $rows['Applicant_Name'];?></td>
                <td><?php echo $rows['Applicant_Role'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Phone_no'];?></td>
                <td><?php echo $rows['Budget'];?></td>
                <td><?php echo $rows['Rejection_date'];?></td>
                <?php
                }
                ?>
          </table>   
    </section>

    <section id="approved">
        <h4>See to the Approved Requests</h4>
        <!-- TABLE CONSTRUCTION-->
        <table id="project">
            <tr>
                <th>Project Id</th>
                <th>Applicant Name</th>
                <th>Applicant Role</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Budget</th>
                <th>Approval Date</th>

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$approved->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['Project_Id'];?></td>
                <td><?php echo $rows['Applicant_Name'];?></td>
                <td><?php echo $rows['Applicant_Role'];?></td>
                <td><?php echo $rows['Email'];?></td>
                <td><?php echo $rows['Phone_no'];?></td>
                <td><?php echo $rows['Budget'];?></td>
                <td><?php echo $rows['Approval_date'];?></td>
                <?php
                }
                ?>
          </table>   
    </section>

</body>
  
</html>