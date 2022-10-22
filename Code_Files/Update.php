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
  $CN_n = $_POST['CN_n'];
  $id_n = $_POST['id_n'];
  $Applicant_Name_n = $_POST['Applicant_Name_n'];
  $Applicant_Role_n = $_POST['Applicant_Role_n'];
  $Email_n = $_POST['Email_n'];
  $Phone_no_n = $_POST['Phone_no_n'];
  $Budget_n = $_POST['Budget_n'];
  $Request_date_n = $_POST['Request_date_n'];

  
  $conn = new mysqli('localhost','root','','Robotronics');
  $sql1 ="UPDATE `requests_robo` SET `Applicant_Name`='$Applicant_Name_n',`Applicant_Role`='$Applicant_Role_n',
  `Email`='$Email_n',`Phone_no`='$Phone_no_n',
  `Request_date`='$Request_date_n',`Budget`='$Budget_n' WHERE `Project_Id`='$id_n'";
  if (mysqli_query($conn, $sql1)) {
		echo "<br><h1> request succesfully updated  in requests table</h1>" ;
	} else {
	echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
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