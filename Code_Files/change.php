<?php
    $CN = $_POST['CN'] ;
    $id = $_POST['id'] ;
    $N_date = date("Y/m/d") ;
?>


<?php
$mysqli = new mysqli('localhost','root','','Robotronics');
$sql = "SELECT * FROM requests_robo where Project_Id = '$id'";
$result = $mysqli->query($sql);
$mysqli->close(); 

?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <!-- CSS FOR STYLING THE PAGE -->
    <style>
      #project {
        font-family: Arial, Helvetica, sans-serif;
        border-collapse: collapse;
        width: 100%;
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
    </style>
</head>
  
<body>
    <section>
        <!-- TABLE CONSTRUCTION-->
        <table id="project">
            <tr>
                <th>Records</th>
                <th>Club</th>
                <th>Project Id</th>
                <th>Applicant Name</th>
                <th>Applicant Role</th>
                <th>Email</th>
                <th>Phone No</th>
                <th>Budget</th>
                <th>Request Date</th>
                

            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 
                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
            
            <form action="Delete.php" method ='post'>

                <td>Old</td>
                <td><input name='Club_Name' value=<?php echo $rows['Club_Name']?>></td>
                <td><input name='Project_Id' value=<?php echo $rows['Project_Id']?>></td>
                <td><input name='Applicant_Name' value=<?php echo $rows['Applicant_Name']?>></td>
                <td><input name='Applicant_Role' value=<?php echo $rows['Applicant_Role']?>></td>
                <td><input name='Email' value=<?php echo $rows['Email']?>></td>
                <td><input name='Phone_no' value=<?php echo $rows['Phone_no']?>></td>
                <td><input name='Budget' value=<?php echo $rows['Budget']?>></td>
                <td><input name='Request_date' value=<?php echo $rows['Request_date']?>></td>
                
                <br><button class="button button2" type='submit' name='update'>
                Click here to delete original request
            </button><br><br><br>
                
            </form>    
				
            </tr> 
            <?php
                }
             ?>
            <tr>
            <form action="Update.php" method ='post'>
                <td>New</td>
                <td>
                    <label for="CN_n"></label>
                    <input
                    id="CN_n"
                    name="CN_n"
                    value=<?php echo $CN?>
                    required
                    />
                </td>
                <td>
                    <label for="id_n"></label>
                    <input
                    id="id_n"
                    name="id_n"
                    value=<?php echo $id?>
                    required
                    />

                </td>
                <td>
                    <label for="Applicant_Name_n"></label>
                    <input
                    id="Applicant_Name_n"
                    name="Applicant_Name_n"
                    required
                    />

                </td>
                
                <td>
                    <label for="Applicant_Role_n"></label>
                    <input
                    list ='role'
                    id="Applicant_Role_n"
                    name="Applicant_Role_n"
                    required
                    />
                    <datalist id="role">
                    <option value="Co-ordinator"></option>
                    <option value="Core-member"></option>
                    <option value="Teacher-associate"></option>
                    <option value="Student-associate"></option>
                    </datalist>

                </td>
                <td>
                    <label for="Email_n"></label>
                    <input
                    id="Email_n"
                    name="Email_n"
                    required
                    />

                </td>
                <td>
                    <label for="Phone_no_n"></label>
                    <input
                    id="Phone_no_n"
                    name="Phone_no_n"
                    required
                    />

                </td>
                <td>
                    <label for="Budget_n"></label>
                    <input
                    id="Budget_n"
                    name="Budget_n"
                    required
                    />

                </td>
                <td>
                    <label for="Request_date_n"></label>
                    <input
                    id="Request_date_n"
                    name="Request_date_n"
                    value = <?php echo $N_date?>
                    required
                    />


                </td>
                


            </tr>
        </table>


    </section>

        <br><br><br><button class="button button1" type='submit' name='update'>
            Click here to update
        </button>
    </form>




</body>
  
</html>

