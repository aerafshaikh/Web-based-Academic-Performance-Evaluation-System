<?php
	include('fy_stud_add_data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sy Add student marks</title>
    <link rel="stylesheet" href="css/fy_add_marks_all.css" />
    <script>
    	function disable() {
		  document.getElementById("sem").disabled=true;
		}
    </script>
</head>
<body>

<header>
    <div class="header">
      <ol>
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
      </ol>
      <ul>
      <li><a href="sy_student_list.php"><u>Previous Page</u></a></li>
      </ul>
    </div>
  </header>

  <div class="regform">
    <h1>Add SY Student marks</h1>
</div>

<div class="main">

    <form action="sy_add_marks_all_php.php" method="POST">

    	<?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

    	
            <h2 class="name">
            Name </h2>
             <?php 
	            	if (isset($_GET['id']))
	            	 {
	            		$con = mysqli_connect('localhost','root','','apes');
	            		
					 	function validate($data)
					 	{
					        $data = trim($data);
					        $data = stripslashes($data);
					        $data = htmlspecialchars($data);
					        return $data;
						}

						$id = validate($_GET['id']);	
	            		$sql = "SELECT * FROM sy_stud_data WHERE id = '$id' ";
	            	
	            		$result = mysqli_query($con,$sql);
     

	            		if(mysqli_num_rows($result)>0)
	            		{
	            			$rows = mysqli_fetch_assoc($result);
	            		}
            	 	}
            	 	 ?>
           <input class="firstname" type="text" name="first_name" value="<?=$rows['first_name']?>">
            
           

            <br>

            <h2 class="name">
        	Seat Number </h2>
        	<input class="firstname" id="cap" onblur="mycapital()" type="text" name="seat_no" value="<?=$rows['seat_no']?>" >

        	<br>


        	<!-- Sem List -->
        	<h2 class="name">
        	Select Semester </h2>
        	<div class="semlist">
        	<select id="sem">
        		<option disabled="" selected="">--Select--</option>
        		<option value="sem1" >SEM III</option>
        		<option value="sem2">SEM IV</option>
        	</select>
        </div>

        	

<div class="sem-details">

           	<div class="sem1 detail">

        	<h2 class="name">
        	Select exam </h2>
        	<div class="examlist">

        	<select id="exam" >
        		<option disabled="" selected="">--Select--</option>
        		<option value="internal">Internal Exam</option>
        		<option value="practical">Practical Exam</option>
        		<option value="theory">Theory Exam</option>
        	</select>
        </div>

        	
        		
        		<div class="internal details">
	        	
		        	<h2 class="sem">
		            Semester III</h2> 
		            <?php if (isset($_GET['error'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['error']; ?>
		    </div>
		   <?php } ?>
		            
		        <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Engineering Mathematics III</td>
                    <td><input class="obt_marks" type="text" name="in_emaths3" value="<?=$rows['in_emaths3']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Discrete Structures and Graph Theory</td>
                    <td><input class="obt_marks" type="text" name="in_dsgt" value="<?=$rows['in_dsgt']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Data Structure</td>
                    <td><input class="obt_marks" type="text" name="in_ds" value="<?=$rows['in_ds']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Digital Logic & Computer Architecture</td>
                    <td><input class="obt_marks" type="text" name="in_dlca" value="<?=$rows['in_dlca']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Computer Graphics </td>
                    <td><input class="obt_marks" type="text" name="in_cg" value="<?=$rows['in_cg']?>"></td>
                    <td>20</td>
                </tr>
            </table>
	        </div>

	        <div class="practical details">
	        	
		        	<h2 class="sem">
		            Semester III</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>                             
                <tr>
                    <td>Data Structure</td>
                    <td><input class="obt_marks" type="text" name="p_ds" value="<?=$rows['p_ds']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Digital Logic & Computer Architecture</td>
                    <td><input class="obt_marks" type="text" name="p_dlca" value="<?=$rows['p_dlca']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Computer Graphics </td>
                    <td><input class="obt_marks" type="text" name="p_cg" value="<?=$rows['p_cg']?>" ></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Java Programming</td>
                    <td><input class="obt_marks" type="text" name="p_java" value="<?=$rows['p_java']?>"></td>
                    <td>50</td>
                </tr>
               
            </table>
	        </div>

	        <div class="theory details">
	        	
		        	<h2 class="sem">
		            Semester III</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Engineering Mathematics III</td>
                    <td><input class="obt_marks" type="text" name="te_emaths3" value="<?=$rows['te_emaths3']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Discrete Structures and Graph Theory</td>
                    <td><input class="obt_marks" type="text" name="te_dsgt" value="<?=$rows['te_dsgt']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Data Structure</td>
                    <td><input class="obt_marks" type="text" name="te_ds" value="<?=$rows['te_ds']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Digital Logic & Computer Architecture</td>
                    <td><input class="obt_marks" type="text" name="te_dlca" value="<?=$rows['te_dlca']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Computer Graphics</td>
                    <td><input class="obt_marks" type="text" name="te_cg" value="<?=$rows['te_cg']?>"></td>
                    <td>80</td>
                </tr>
            </table>
	        </div>

	     </div>


	     <!--Sem III end here -->

	     <div class="sem2 detail">

        	<h2 class="name">
        	Select exam </h2>
        	<div class="examlist">
        	<select id="exams">
        		<option disabled="" selected="">--Select--</option>
        		<option value="internal">Internal Exam</option>
        		<option value="practical">Practical Exam</option>
        		<option value="theory">Theory Exam</option>
        	</select>
        </div>
        	
        		
        		<div class="internal detailed">
	        	
		            <h2 class="sem">
		            Semester IV</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Engineering Mathematics IV</td>
                    <td><input class="obt_marks" type="text" name="in_emaths4" value="<?=$rows['in_emaths4']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Analysis of Algorithm</td>
                    <td><input class="obt_marks" type="text" name="in_aoa" value="<?=$rows['in_aoa']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Database Management System</td>
                    <td><input class="obt_marks" type="text" name="in_dbms" value="<?=$rows['in_dbms']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Operating System</td>
                    <td><input class="obt_marks" type="text" name="in_os" value="<?=$rows['in_os']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Microprocessor</td>
                    <td><input class="obt_marks" type="text" name="in_mp" value="<?=$rows['in_mp']?>"></td>
                    <td>20</td>
                </tr>
            </table>
	        </div>

	        <div class="practical detailed">
	      
		           <h2 class="sem">
		            Semester IV</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Analysis of Algorithm</td>
                    <td><input class="obt_marks" type="text" name="p_aoa" value="<?=$rows['p_aoa']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Database Management System</td>
                    <td><input class="obt_marks" type="text" name="p_dbms" value="<?=$rows['p_dbms']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Operating System</td>
                    <td><input class="obt_marks" type="text" name="p_os" value="<?=$rows['p_os']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Microprocessor</td>
                    <td><input class="obt_marks" type="text" name="p_mp" value="<?=$rows['p_mp']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Python Programming</td>
                    <td><input class="obt_marks" type="text" name="p_python" value="<?=$rows['p_python']?>"></td>
                    <td>50</td>
                </tr>
                
            </table>
	        </div>

	        <div class="theory detailed">
	        	
		           <h2 class="sem">
		            Semester IV</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Engineering Mathematics IV</td>
                    <td><input class="obt_marks" type="text" name="te_emaths4" value="<?=$rows['te_emaths4']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Analysis of Algorithm</td>
                    <td><input class="obt_marks" type="text" name="te_aoa" value="<?=$rows['te_aoa']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Database Management System</td>
                    <td><input class="obt_marks" type="text" name="te_dbms" value="<?=$rows['te_dbms']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Operating System</td>
                    <td><input class="obt_marks" type="text" name="te_os" value="<?=$rows['te_os']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Microprocessor</td>
                    <td><input class="obt_marks" type="text" name="te_mp" value="<?=$rows['te_mp']?>"></td>
                    <td>80</td>
                </tr>
            </table>
	        </div>

	     </div>


	 </div>
	 <input type="text" 
		          name="id"
		          value="<?=$row['id']?>"
		          hidden >
	 
	 <button type="submit" name="submit">Add Marks</button>

</form>
<script src="https://code.jquery.com/jquery-2.2.4.js" 
integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" 
crossorigin="anonymous"></script>
<script>

	$(document).ready(function(){
		$("#sem").change(function(){
			var imp = $("#sem").val();
			$(".detail").hide();
			$("."+imp).show();
		})
	})


	$(document).ready(function(){
		$("#exam").change(function(){
			var imp = $("#exam").val();
			$(".details").hide();
			$("."+imp).show();
		})
	})

	$(document).ready(function(){
		$("#exams").change(function(){
			var imp = $("#exams").val();
			$(".detailed").hide();
			$("."+imp).show();
		})
	})
</script>
</body>
</html>