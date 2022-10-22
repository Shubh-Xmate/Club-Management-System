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
		margin-left:530px;
		padding:15px;
		background-image: linear-gradient(#d16262, #decdcd);
	}
	.button_button1:hover{
		background-image: linear-gradient(#cd3131,#a37777 )
	}
</style>

<?php
    $Project_Id = $_POST['Project_Id'] ;
    $conn = new mysqli('localhost','root','','Robotronics');
    $sql1 = "DELETE FROM `requests_robo` WHERE Project_Id='$Project_Id'" ;
    if (mysqli_query($conn, $sql1)) {
		echo "<br><h1> request succesfully Deleted from  requests table where id = '$Project_Id'</h1>" ;
	} else {
	echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
	}
    $sql2 = "UPDATE `project_robo` SET `status`='Not Requested' WHERE id='$Project_Id'" ;
    if (mysqli_query($conn, $sql2)) {
		echo "<br><h1> status succesfully updated as not requested in  projects table table where id = '$Project_Id'</h1>" ;
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