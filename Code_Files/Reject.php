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
    $R_date = date("Y/m/d") ;
    $conn = new mysqli('localhost','root','','Robotronics');

    $sql1 = "UPDATE project_robo SET status = 'Rejected' WHERE id ='$Project_Id'" ;
    if (mysqli_query($conn, $sql1)) {
		echo "<br><h1> Status succesfully updated as Rejected in projects</h1>" ;
	} else {
	echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}
	
    $sql2 = "INSERT INTO rej_req_robo (Club_Name, Project_Id, Applicant_Name,Applicant_Role, Email, Phone_no,Request_date ,Budget,Rejection_date)
	VALUES ('$CN', '$Project_Id', '$Applicant_Name','$Applicant_Role', '$Email', '$Phone_no','$Request_date','$Budget','$R_date')";

	if (mysqli_query($conn, $sql2)) {
		echo "<br> <h1>Request stored succesfully in Rejected requests</h1>" ;
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
	$body = "Dear student, your had applied for budget of the project

	
you filled records as below 
Club_Name : $CN
Project_Id : $Project_Id
Applicant_Name : $Applicant_Name 
Applicant_Role : $Applicant_Role
Email : $Email
Phone_No : $Phone_no
Date of request : $Request_date
Budget : $Budget	
	
Due to shortage of funds your request had been rejected :(

dont feel disheartened we will contact you soon once we got the sufficient funds

apply option still available to you

thank you 


	
	";

	if (mail($to_email, $subject, $body)) {
		echo "<h2>email with more details sent to $to_email</h2>";
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