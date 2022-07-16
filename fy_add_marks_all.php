<?php
	include('fy_stud_add_data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fy Add student marks</title>
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
	  <li><a href="fy_student_list.php"><u>Previous Page</u></a></li>
      </ul>
    </div>
  </header>

  <div class="regform">
    <h1>Add FY Student marks</h1>
</div>

<div class="main">

    <form action="fy_add_marks_all_php.php" method="POST">
    	<?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>

    	
            <h2 class="name">
            Name </h2>
             <?php 
	            	if (isset($_GET['id']))
	            	 {
	            		$db = mysqli_connect('localhost','root','','apes');
	            		
					 	function validate($data)
					 	{
					        $data = trim($data);
					        $data = stripslashes($data);
					        $data = htmlspecialchars($data);
					        return $data;
						}

						$id = validate($_GET['id']);	
	            		$sql = "SELECT * FROM fy_stud_data WHERE id = '$id' ";
	            	
	            		$result = mysqli_query($db,$sql);
     

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
        		<option value="sem1" >SEM I</option>
        		<option value="sem2">SEM II</option>
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
		            Semester I</h2> 
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
		                    <td>Engineering Mathematics-I</td>
		                    <td><input class="obt_marks" type="text" name="in_emaths1" value="<?=$rows['in_emaths1']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Engineering Physics-I</td>
		                    <td><input class="obt_marks" type="text" name="in_ephy1" value="<?=$rows['in_ephy1']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Engineering Chemistry-I</td>
		                    <td><input class="obt_marks" type="text" name="in_echem1" value="<?=$rows['in_echem1']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Engineering Mechanics</td>
		                    <td><input class="obt_marks" type="text" name="in_emech" value="<?=$rows['in_emech']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Basic Electrical Engineering</td>
		                    <td><input class="obt_marks" type="text" name="in_bee" value="<?=$rows['in_bee']?>"></td>
		                    <td>20</td>
		                </tr>
		            </table>
	        </div>

	        <div class="practical details">
	        	
		        	<h2 class="sem">
		            Semester I</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Engineering Physics-I</td>
		                    <td><input class="obt_marks" type="text" name="p_ephy1" value="<?=$rows['p_ephy1']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Engineering Chemistry-I</td>
		                    <td><input class="obt_marks" type="text" name="p_echem1" value="<?=$rows['p_echem1']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Engineering Mechanics</td>
		                    <td><input class="obt_marks" type="text" name="p_emech" value="<?=$rows['p_emech']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Basic Electrical Engineering</td>
		                    <td><input class="obt_marks" type="text" name="p_bee" value="<?=$rows['p_bee']?>"></td>
		                    <td>50</td>
		                </tr>
						<tr>
		                    <td>Basic Workshop-I</td>
		                    <td><input class="obt_marks" type="text" name="p_workshop1" value="<?=$rows['p_workshop1']?>"></td>
		                    <td>50</td>
		                </tr>
		            </table>
	        </div>

	        <div class="theory details">
	        	
		        	<h2 class="sem">
		            Semester I</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Engineering Mathematics-I</td>
		                    <td><input class="obt_marks" type="text" name="te_emaths1" value="<?=$rows['te_emaths1']?>"></td>
		                    <td>80</td>
		                </tr>
		                <tr>
		                    <td>Engineering Physics-I</td>
		                    <td><input class="obt_marks" type="text" name="te_ephy1" value="<?=$rows['te_ephy1']?>"></td>
		                    <td>80</td>
		                </tr>
		                <tr>
		                    <td>Engineering Chemistry-I</td>
		                    <td><input class="obt_marks" type="text" name="te_echem1" value="<?=$rows['te_echem1']?>"></td>
		                    <td>80</td>
		                </tr>
		                <tr>
		                    <td>Engineering Mechanics</td>
		                    <td><input class="obt_marks" type="text" name="te_emech" value="<?=$rows['te_emech']?>"></td>
		                    <td>80</td>
		                </tr>
		                <tr>
		                    <td>Basic Electrical Engineering</td>
		                    <td><input class="obt_marks" type="text" name="te_bee" value="<?=$rows['te_bee']?>"></td>
		                    <td>80</td>
		                </tr>
		            </table>
	        </div>

	     </div>


	     <!--Sem I end here -->

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
		            Semester II</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Engineering Mathematics-II</td>
		                    <td><input class="obt_marks" type="text" name="in_emaths2" value="<?=$rows['in_emaths2']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Engineering Physics-II</td>
		                    <td><input class="obt_marks" type="text" name="in_ephy2" value="<?=$rows['in_ephy2']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Engineering Chemistry-II</td>
		                    <td><input class="obt_marks" type="text" name="in_echem2" value="<?=$rows['in_echem2']?>"></td>
		                    <td>20</td>
		                </tr>
		                <tr>
		                    <td>Engineering Graphics</td>
		                    <td><input class="obt_marks" type="text" name="in_egraph" value="<?=$rows['in_egraph']?>"></td>
		                    <td>20</td>
		                </tr>
						 <tr>
		                    <td>C programming</td>
		                    <td><input class="obt_marks" type="text" name="in_c" value="<?=$rows['in_c']?>"></td>
		                    <td>20</td>
		                </tr>
		            </table>
	        </div>

	        <div class="practical detailed">
	      
		           <h2 class="sem">
		            Semester II</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		               
		                <tr>
		                    <td>Engineering Physics-II</td>
		                    <td><input class="obt_marks" type="text" name="p_ephy2" value="<?=$rows['p_ephy2']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Engineering Chemistry-II</td>
		                    <td><input class="obt_marks" type="text" name="p_echem2" value="<?=$rows['p_echem2']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Engineering Graphics</td>
		                    <td><input class="obt_marks" type="text" name="p_egraph" value="<?=$rows['p_egraph']?>"></td>
		                    <td>50</td>
		                </tr>
						<tr>
		                    <td>C programming</td>
		                    <td><input class="obt_marks" type="text" name="p_c" value="<?=$rows['p_c']?>"></td>
		                    <td>50</td>
		                </tr>
		                <tr>
		                    <td>Basic Workshop- II</td>
		                    <td><input class="obt_marks" type="text" name="p_workshop2" value="<?=$rows['p_workshop2']?>"></td>
		                    <td>50</td>
		                </tr>
		            </table> 
	        </div>

	        <div class="theory detailed">
	        	
		           <h2 class="sem">
		            Semester II</h2> 
		            
		            <table class="marks" >
		                <tr>
		                    <th>Subject</th>
		                    <th>Obtained Marks.</th>
		                    <th>Out of Marks(total)</th>
		                </tr>
		                <tr>
		                    <td>Engineering Mathematics-II</td>
		                    <td><input class="obt_marks" type="text" name="te_emaths2" value="<?=$rows['te_emaths2']?>"></td>
		                    <td>80</td>
		                </tr>
		                <tr>
		                    <td>Engineering Physics-II</td>
		                    <td><input class="obt_marks" type="text" name="te_ephy2" value="<?=$rows['te_ephy2']?>"></td>
		                    <td>80</td>
		                </tr>
		                <tr>
		                    <td>Engineering Chemistry-II</td>
		                    <td><input class="obt_marks" type="text" name="te_echem2" value="<?=$rows['te_echem2']?>"></td>
		                    <td>80</td>
		                </tr>
		                <tr>
		                    <td>Engineering Graphics</td>
		                    <td><input class="obt_marks" type="text" name="te_egraph" value="<?=$rows['te_egraph']?>"></td>
		                    <td>80</td>
		                </tr>
						<tr>
		                    <td>C programming</td>
		                    <td><input class="obt_marks" type="text" name="te_c" value="<?=$rows['te_c']?>"></td>
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