<style>
  body{
		background-image: linear-gradient(#8192b7, #89d9e2);
	}
	h1,h4{
		color:#166707;
		justify:content;
		text-align:center;
	}
	.button_button1{
		margin-left:80vh;
		padding:15px;
		background-image: linear-gradient(#d16262, #decdcd);
	}
	.button_button1:hover{
		background-image: linear-gradient(#cd3131,#a37777 )
	}
</style>

<?php
    $CN = $_POST['CN'] ;
    $Project_Id = $_POST['Project_Id'] ;
    $Applicant_Name = $_POST['Applicant_Name'];
    $Applicant_Role = $_POST['Applicant_Role'];
    $Email = $_POST['Email'];
    $Phone_no = $_POST['Phone_no'];
    $Budget = $_POST['Budget'];
    $Request_date = $_POST['Request_date'];
    $A_date = date("Y/m/d") ;
    $conn = new mysqli('localhost','root','','Robotronics');

    $sql1 = "UPDATE project_robo SET status = 'Approved' WHERE id ='$Project_Id'" ;
    if (mysqli_query($conn, $sql1)) {
		echo "<br> <h1>Status succesfully updated as approved in projects</h1>" ;
	} else {
	echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}
	
    $sql2 = "INSERT INTO app_req_robo (Club_Name, Project_Id, Applicant_Name,Applicant_Role, Email, Phone_no,Request_date ,Budget,Approval_date)
	VALUES ('$CN', '$Project_Id', '$Applicant_Name','$Applicant_Role', '$Email', '$Phone_no','$Request_date','$Budget','$A_date')";

	if (mysqli_query($conn, $sql2)) {
		echo "<br> <h1>Request stored succesfully in approved requests</h1>" ;
	} else {
	echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
	}

    $sql3 = "DELETE  FROM `requests_robo` WHERE Project_Id ='$Project_Id' " ;
    if (mysqli_query($conn, $sql3)) {
		echo "<br> <h1>Request deleted succesfully from requests</h1>" ;
	} else {
	echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
	}
  
  $to_email = $Email;
	$subject = "Budget application result";
	$body = "Dear student, you had applied for budget of the project

	
you filled records as below 
Club_Name : $CN
Project_Id : $Project_Id
Applicant_Name : $Applicant_Name 
Applicant_Role : $Applicant_Role
Email : $Email
Phone_No : $Phone_no
Date of request : $Request_date
Budget : $Budget	
	
Your request been succesfully approved by sponsor and college

requested money has been deposited in registered account 

wisely spend the money and all the best for project :)
	
	
	";

	if (mail($to_email, $subject, $body)) {
		echo "<br><h1>email with more details sent to $to_email</h2>";
	} else {
		echo "Email sending failed... :( , due to some technical issue";
	}
     
?>
<html>
    <form action="requests.php">
        <br><br><button
            class="button_button1"
          >
            Click here to go back
          </button>
    </form>
</html>