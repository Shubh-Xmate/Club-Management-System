<style>
    body{
		background-image: linear-gradient(#8192b7, #89d9e2);
	}
	h1,h2,h4{
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
	// mail data
	$CN = $_POST['CN'];
	$id = $_POST['id'];
	$Name = $_POST['Name'] ;
	$role = $_POST['role'] ;
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];
	$date = date("Y/m/d") ;
	$Budget = $_POST['Budget'];
    echo "<h2 style='color:blue'>welcome ".$Name ."<br></h2>";
    echo "<h2 style='color:blue'>Your responces has been recorded we will contact you soon ".$Name .'<br></h2>';
	echo "<h2 style='color:blue'>submission date :" . $date . "<br></h2>";
	$to_email = "$email";
	$subject = "verification email from college";
	$body = "Hi, your request for budget has been under process we will let you know once it approved
	
you filled records as below 
Club_Name : $CN
Project_Id : $id
Applicant_Name : $Name 
Applicant_Role : $role
Email : $email
Phone_No : $number
Date of request : $date
Budget : $Budget	
	
If any query ,edit filled records

	
	
	";
	$headers = "From: abc.net";

	
	// email with details is sent to the person who filled the application form 
	if (mail($to_email, $subject, $body, $headers)) {
		echo "<br><h2 style='color:green'>email with more details sent to $to_email</h2><br>";
	} else {
		echo "Email sending failed... :( , due to some technical issue";
	}


	// Database connection
	$conn = new mysqli('localhost','root','','Robotronics');
	$sql = "INSERT INTO requests_robo (Club_Name, Project_Id, Applicant_Name,Applicant_Role, Email, Phone_no,Request_date ,Budget)
	VALUES ('$CN', '$id', '$Name','$role', '$email', '$number','$date','$Budget')";

	if (mysqli_query($conn, $sql)) {
		echo "<br><h2 style='color:green'><br> Your records has been stored successfully in the database</h2><br>" ;
	} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	$mysqli = new mysqli('localhost','root','','Robotronics');
	$sql = "SELECT sponsor_mail FROM `sponsor_robo` WHERE id='$id' and sponsor_role ='title-sponsor' ";
	$result = $mysqli->query($sql);
	$mysqli->close(); 

    while($rows=$result->fetch_assoc())
     {      
        $to_email = $rows['sponsor_mail'] ;
        settype($to_email, "string"); 
    }   
	

	
    
    
	$subject = "Budget application request ";
	$body = "Hello, an applicant had applied for budget of the project , being title sponsor of the project this email sent to you 
	
Applicants details as below
Club_Name : $CN
Project_Id : $id
Applicant_Name : $Name
Applicant_Role : $role
Email : $email
Phone_No : $number
Date of request : $date 
Budget : $Budget
	
deposite the requested money in college account 

thank you :)
	
	
	";
	

	// email sent to the sponsor of the project
	if (mail($to_email, $subject, $body)) {
		echo "<br><h2 style='color:green'>budget application email sent to title-sponsor of the project </h2>";
	} else {
		echo "Email sending failed... :( , due to some technical issue";
	}
	
?>
<html>
    <form action="project.php">
        <br><br><button
            class="button_button1"
          >
            Click here to go back
          </button>
    </form>
</html>
