<style>
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
      body{
		    background-image: linear-gradient(#8192b7, #89d9e2);
	    }
      h1{
        color:#166707;
        text-align:center;
      }
      .button1{
        margin-left:80vh;
        padding:15px;
        background-image: linear-gradient(#d16262, #decdcd);
	    }
      .button1:hover{
        background-image: linear-gradient(#cd3131,#a37777 )
      }
      /* .button1 {
        background-color: #d8ead8;
        color: black;
        border: 2px solid #4caf50;
      }

      .button1:hover {
        background-color: #4caf50;
        color: white;
      } */
</style>

<?php
$id = $_POST['id'] ;
$Project_name = $_POST['Project_name'] ;
$Name = $_POST['Name'] ;
$Email = $_POST['Email'] ;
$role = $_POST['role'] ;
$head = $_POST['head'] ;
$sponsor = $_POST['sponsor'] ;
$sponsor_email = $_POST['sponsor_email'] ;
$due_date = $_POST['due_date'] ;
$R_date = date("Y/m/d") ;

$conn = new mysqli('localhost','root','','Robotronics');
$sql1 = "INSERT INTO `new_pro_robo`(`id`, `project_name`, 
    `registrar_name`, `registrar_email`, `registrar_role`, `head`, 
    `sponsor`,`sponsor_email`, `due_date`, `registration_date`) VALUES 
    ('$id','$Project_name','$Name','$Email','$role','$head','$sponsor','$sponsor_email'
    ,'$due_date','$R_date')";

	if (mysqli_query($conn, $sql1)) {
		echo "<br> <h1 style='color:green'>New project registered successfuly in new projects table</h1>" ;
	} else {
	echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}

  // achieved this using triggers

// $sql2 = "INSERT INTO `project_robo`(`id`, `project_name`, `head`, `sponsor`, `due_date`, `status`)
//  VALUES ('$id','$Project_name','$head','$sponsor','$due_date','Not Requested')";

//     if (mysqli_query($conn, $sql2)) {
// 		echo "<br> <h1 style='color:green'>New project registered successfuly in  projects table</h1>" ;
        
// 	} else {
// 	echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
// 	}

// $sql3 = "INSERT INTO `sponsor_robo`(`id`, `sponsor_name`, `sponsor_mail`, `sponsor_role`)
// VALUES ('$id','$sponsor','$sponsor_email','title-sponsor')";

// 	if (mysqli_query($conn, $sql3)) {
// 		echo "<br> <h1 style='color:green'>Sponsor details registered successfuly in new sponsor table</h1>" ;
// 	} else {
// 	echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
// 	}


$to_email = $Email ;
$subject = "Confirmation Email from college ";
$body = " You have successfully registered a new program 

Registration details as below
Project_Id : $id
Project_name : $Project_name
Registrar Name : $Name
Registrar Role : $role
Registrar Email : $Email
Head of the project : $head	
Sponsor of thr project : $sponsor
Registratio date : $R_date
thank you :)
	
	
	";
	
	if (mail($to_email, $subject, $body)) {
		echo "<br><h1 style='color:green'>Confirmation email sent to $Email </h1>";
	} else {
		echo "Email sending failed... :( , due to some technical issue";
	}
?>


<html>
    <form action="project.php">
        <br><br><button
          class="button button1"
          >
          Click here to go back
          </button>
    </form>
</html>