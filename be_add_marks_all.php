<?php
	include('fy_stud_add_data.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE Add student marks</title>
    <link rel="stylesheet" href="css/fy_add_marks_all.css" />
    <script>
    	function disable() {
		  document.getElementById("sem").disabled=true;
		}
    </script>
</head>
<body>

<div class="header">
      <ol>
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
      </ol>
      <ul>
      <li><a href="be_student_list.php"><u>Previous Page</u></a></li>
      </ul>
    </div>
  </header>

  <div class="regform">
    <h1>Add BE Student marks</h1>
</div>

<div class="main">

    <form action="be_add_marks_all_php.php" method="POST">
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
	            		$sql = "SELECT * FROM be_stud_data WHERE id = '$id' ";
	            	
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
        		<option value="sem1" >SEM VII</option>
        		<option value="sem2">SEM VIII</option>
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
		            Semester VII</h2> 
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
                    <td>Digital Signal Processing </td>
                    <td><input class="obt_marks" type="text" name="in_dsp" value="<?=$rows['in_dsp']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Cryptography and System Security</td>
                    <td><input class="obt_marks" type="text" name="in_css" value="<?=$rows['in_css']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Artificial Intelligence II</td>
                    <td><input class="obt_marks" type="text" name="in_ai" value="<?=$rows['in_ai']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Software Architecture</td>
                    <td><input class="obt_marks" type="text" name="in_sa" value="<?=$rows['in_sa']?>"></td>
                    <td>20</td>
                </tr>
                
            </table>

	        </div>

	        <div class="practical details">
	        	
		        	<h2 class="sem">
		            Semester VII</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Digital Signal Processing </td>
                    <td><input class="obt_marks" type="text" name="p_dsp" value="<?=$rows['p_dsp']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Cryptography and System Security</td>
                    <td><input class="obt_marks" type="text" name="p_css" value="<?=$rows['p_css']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Artificial Intelligence II</td>
                    <td><input class="obt_marks" type="text" name="p_ai" value="<?=$rows['p_ai']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Software Architecture</td>
                    <td><input class="obt_marks" type="text" name="p_sa" value="<?=$rows['p_sa']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Project I </td>
                    <td><input class="obt_marks" type="text" name="p_prj1" value="<?=$rows['p_prj1']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Network Threats and Attacks Laboratory</td>
                    <td><input class="obt_marks" type="text" name="p_ntal" value="<?=$rows['p_ntal']?>"></td>
                    <td>50</td>
                </tr>
            </table>

	        </div>

	        <div class="theory details">
	        	
		        	<h2 class="sem">
		            Semester VII</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Digital Signal Processing </td>
                    <td><input class="obt_marks" type="text" name="te_dsp" value="<?=$rows['te_dsp']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Cryptography and System Security</td>
                    <td><input class="obt_marks" type="text" name="te_css" value="<?=$rows['te_css']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Artificial Intelligence II</td>
                    <td><input class="obt_marks" type="text" name="te_ai" value="<?=$rows['te_ai']?>"></td>
                    <td>80</td>
                </tr>
                <tr>
                    <td>Software Architecture</td>
                    <td><input class="obt_marks" type="text" name="te_sa" value="<?=$rows['te_sa']?>"></td>
                    <td>80</td>
                </tr>
            </table>

	        </div>

	     </div>


	     <!--Sem VIII end here -->

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
		            Semester VIII</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Data Warehouse and Mining </td>
                    <td><input class="obt_marks" type="text" name="in_dwm" value="<?=$rows['in_dwm']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Human Machine Interaction </td>
                    <td><input class="obt_marks" type="text" name="in_hmi" value="<?=$rows['in_hmi']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Parallel and distributed Systems</td>
                    <td><input class="obt_marks" type="text" name="in_pds" value="<?=$rows['in_pds']?>"></td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Digital Forensics </td>
                    <td><input class="obt_marks" type="text" name="in_df" value="<?=$rows['in_df']?>"></td>
                    <td>20</td>
                </tr>
                
            </table>
	        </div>

	        <div class="practical detailed">
	      
		           <h2 class="sem">
		            Semester VIII</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Data Warehouse and Mining </td>
                    <td><input class="obt_marks" type="text" name="p_dwm" value="<?=$rows['p_dwm']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Human Machine Interaction </td>
                    <td><input class="obt_marks" type="text" name="p_hmi" value="<?=$rows['p_hmi']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Parallel and distributed Systems</td>
                    <td><input class="obt_marks" type="text" name="p_pds" value="<?=$rows['p_pds']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Digital Forensics </td>
                    <td><input class="obt_marks" type="text" name="p_df" value="<?=$rows['p_df']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Project II </td>
                    <td><input class="obt_marks" type="text" name="p_prj2" value="<?=$rows['p_prj2']?>"></td>
                    <td>50</td>
                </tr>
                <tr>
                    <td>Cloud Computing Laboratory</td>
                    <td><input class="obt_marks" type="text" name="p_ccl" value="<?=$rows['p_ccl']?>"></td>
                    <td>50</td>
                </tr>
            </table>
	        </div>

	        <div class="theory detailed">
	        	
		           <h2 class="sem">
		            Semester VIII</h2> 
		            
		            <table class="marks" >
                <tr>
                    <th>Subject</th>
                    <th>Obtained Marks.</th>
                    <th>Out of Marks(total)</th>
                </tr>
                <tr>
                    <td>Data Warehouse and Mining </td>
                    <td><input class="obt_marks" type="text" name="te_dwm" value="<?=$rows['te_dwm']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Human Machine Interaction </td>
                    <td><input class="obt_marks" type="text" name="te_hmi" value="<?=$rows['te_hmi']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Parallel and distributed Systems</td>
                    <td><input class="obt_marks" type="text" name="te_pds" value="<?=$rows['te_pds']?>"></td>
                    <td>75</td>
                </tr>
                <tr>
                    <td>Digital Forensics</td>
                    <td><input class="obt_marks" type="text" name="te_df" value="<?=$rows['te_df']?>"></td>
                    <td>75</td>
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