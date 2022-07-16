<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SY Performance Report</title>
    <link rel="stylesheet" type="text/css" href="css/student_marksheet_all.css">
    <script type="text/javascript"> </script>
</head>
<body>
<div class="header">
      <ol>
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
      </ol>
      <ul>
      <a href="sy_student_login.php">Logout</a>
      </ul>
    </div>
  </header>

    <?php

    session_start();
     include('fy_stud_add_data.php');
     $seat_no = 'seat_no';

     $sql = "SELECT * FROM sy_stud_data WHERE seat_no='".$_SESSION['seat_no']."'";
     $result1 = mysqli_query($con,$sql);

     while ($row = mysqli_fetch_array($result1))
      {
         echo ("<h3>Name : <b> ".$row['first_name']." ".$row['last_name']." </b></h3> ");
         echo "<h3>Seat Number : <b> ".$row['seat_no']." </b></h3> ";
     }


    ?>


    <h3>Course : <b>B.E Comps</b></h3>
   <h3>Select Semester : </h3>
      
      <div class="semlist">
         <select id="sem">
            <option disabled="" selected="">--Select--</option>
            <option value="sem1" >SEM III</option>
            <option value="sem2">SEM IV</option>
         </select>
        </div>

<!--SEMESTER III -->
<?php

$count = 0;
$count1 = 0;

$seat_no='seat_no';
 $sql2="SELECT * FROM `sy_stud_data` WHERE seat_no='".$_SESSION['seat_no']."'";
$run2=mysqli_query($con,$sql2);
 
 if(mysqli_num_rows($run2)>0)
{
$data2=mysqli_fetch_assoc($run2);
?>

<div class="sem1 detail">
      <div class="tit">
         <h2 align="center">SEMESTER III</h2>
      </div>
         <table border="2" align="center">
         	<tr>
         	    <th colspan="17">Subject</th>
         	</tr>
         	<tr>
         		<th colspan="2">EMATHS3</th>
         		<th colspan="3">DSGT</th>
         		<th colspan="3">DS</th>
         		<th colspan="3">DLCA</th>
         		<th colspan="3">CG</th>
				<th colspan="1">JAVA</th>  				
         	</tr>
         	<tr>
         		<!--EMATHS3-->
         		<th>Int</th>
         		<th>Ext</th>
               
         		<!--DSGT-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--DS-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--DLCA-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--CG-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
			   <!--Java-->
				<th>Pract</th>
         	</tr>
         	<tr>
         		<!--EMATHS3-->
         		<td><?php echo $data2['in_emaths3'];?></td>
               <?php
                  if ($data2['in_emaths3']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_emaths3'];?></td>
               <?php
                  if ($data2['te_emaths3']>=30) 
                  {
                     $count++;
                  }
               ?>
         		

         		<!--DSGT-->
         		<td><?php echo $data2['in_dsgt'];?></td>
               <?php
                  if ($data2['in_dsgt']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_dsgt'];?></td>
               <?php
                  if ($data2['te_dsgt']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_dsgt'];?></td>
               <?php
                  if ($data2['p_dsgt']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--DS-->
         		<td><?php echo $data2['in_ds'];?></td>
               <?php
                  if ($data2['in_ds']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_ds'];?></td>
               <?php
                  if ($data2['te_ds']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_ds'];?></td>
               <?php
                  if ($data2['p_ds']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--DLCA-->
         		<td><?php echo $data2['in_dlca'];?></td>
               <?php
                  if ($data2['in_dlca']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_dlca'];?></td>
               <?php
                  if ($data2['te_dbms']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_dlca'];?></td>
               <?php
                  if ($data2['p_dlca']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--CG-->
         		<td><?php echo $data2['in_cg'];?></td>
               <?php
                  if ($data2['in_cg']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_cg'];?></td>
               <?php
                  if ($data2['te_cg']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_cg'];?></td>
               <?php
                  if ($data2['p_cg']>=20) 
                  {
                     $count++;
                  }
               ?>
			   
			   <!--Java-->
				<td><?php echo $data2['p_java'];?></td>
               <?php
                  if ($data2['p_java']>=20) 
                  {
                     $count++;
                  }
               ?>
         	</tr>
            <tr>
               <!--EMATHS3-->
               <td colspan="2"><?php echo $total1=$data2['in_emaths3']+$data2['te_emaths3']; ?></td>
               
               <!--DSGT-->
               <td colspan="2"><?php echo $total2=$data2['in_dsgt']+$data2['te_dsgt']; ?></td>
               <td></td>
               <!--DS-->
               <td colspan="2"><?php echo $total3=$data2['in_ds']+$data2['te_ds']; ?></td>
               <td></td>
               <!--DLCA-->
               <td colspan="2"><?php echo $total4=$data2['in_dlca']+$data2['te_dlca']; ?></td>
               <td></td>
               <!--CG-->
               <td colspan="2"><?php echo $total5=$data2['in_cg']+$data2['te_cg']; ?></td>
               <td></td>   
				 			   
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="15"><?php echo $all=$total1+$total2+$data2['p_dsgt']+$total3+$data2['p_ds']+$total4+$data2['p_dlca']+$total5+$data2['p_cg']+$data2['p_java']; ?>/750</td>
            </tr>
            <tr>
               <th>Grade</th>
               <td colspan="15">
                  <?php
                  if ($all>700 && $count==15) 
                  {
                     echo "O";
                  }
                  elseif ($all>650 && $count==15) 
                  {
                     echo "A+";
                  }
                  elseif ($all>600 && $count==15) 
                  {
                     echo "A";
                  }
                  elseif ($all>550 && $count==15) 
                  {
                     echo "B+";
                  }
                  elseif ($all>500 && $count==15) 
                  {
                     echo "B";
                  }
                  elseif ($all>450 && $count==15) 
                  {
                     echo "C+";
                  }
                  elseif ($all>400 && $count==15) 
                  {
                     echo "C";
                  }
                  elseif ($all>350 && $count==15) 
                  {
                     echo "D";
                  }
                  else
                  {
                     echo "F";
                  }
               ?>
               </td>
            </tr>
            <tr>
               <td colspan="16">
                  <?php
                  if ($count==15) 
                  {
                     echo "Successfull..!!";;
                  }
                  else
                  {
                     echo "Unsuccessfull..!!";
                  }
               ?>
               </td>
            </tr>
            <tr>
            <div class="pbtn">
               <td colspan="16">
                  <form>
                     <input type="button" value="Print" onclick="document.title='seatno_name'; window.print()" />
                  </form>
            </div>
               </td>

            </tr>
         </table>
</div>

<!-- SEMESTER IV -->

<div class="sem2 detail">
   <div class="tit">
      <h2 align="center">SEMESTER IV</h2>
   </div>     
         <table border="2" align="center">
            <tr>
                <th colspan="17">Subject</th>
            </tr>
            <tr>
               <th colspan="2">EMATHS4</th>
               <th colspan="3">AOA</th>
               <th colspan="3">DMS</th>
               <th colspan="3">OS</th>
               <th colspan="3">MP</th>
			   <th colspan="1">PYTHON</th>			   
            </tr>
            <tr>
               <!--EMATHS4-->
               <th>Int</th>
               <th>Ext</th>
              
               <!--AA-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--DMS-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--OS-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--MP-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
			   <!--PYTHON-->
				<th>Pract</th> 			   
            </tr>
            <tr>
               <!--EMATHS4-->
               <td><?php echo $data2['in_emaths4'];?></td>
               <?php
                  if ($data2['in_emaths4']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_emaths4'];?></td>
               <?php
                  if ($data2['te_emaths4']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <!--AA-->
               <td><?php echo $data2['in_aoa'];?></td>
               <?php
                  if ($data2['in_aoa']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_aoa'];?></td>
               <?php
                  if ($data2['te_aoa']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_aoa'];?></td>
               <?php
                  if ($data2['p_aoa']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--DMS-->
               <td><?php echo $data2['in_dbms'];?></td>
               <?php
                  if ($data2['in_dbms']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_dbms'];?></td>
               <?php
                  if ($data2['te_dbms']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_dbms'];?></td>
               <?php
                  if ($data2['p_dbms']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--OS-->
               <td><?php echo $data2['in_os'];?></td>
               <?php
                  if ($data2['in_os']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_os'];?></td>
               <?php
                  if ($data2['te_os']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_os'];?></td>
               <?php
                  if ($data2['p_os']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--MP-->
               <td><?php echo $data2['in_mp'];?></td>
               <?php
                  if ($data2['in_mp']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_mp'];?></td>
               <?php
                  if ($data2['te_mp']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_mp'];?></td>
               <?php
                  if ($data2['p_mp']>=20) 
                  {
                     $count1++;
                  }
               ?>
			   <!--PYTHON-->
			    <td><?php echo $data2['p_python'];?></td>
               <?php
                  if ($data2['p_python']>=20) 
                  {
                     $count1++;
                  }
               ?>


            </tr>
            <tr>
               <!--EMATHS4-->
               <td colspan="2"><?php echo $total6=$data2['in_emaths4']+$data2['te_emaths4']; ?></td>
              
               <!--AA-->
               <td colspan="2"><?php echo $total7=$data2['in_aoa']+$data2['te_aoa']; ?></td>
               <td></td>
               <!--DMS-->
               <td colspan="2"><?php echo $total8=$data2['in_dbms']+$data2['te_dbms']; ?></td>
               <td></td>
               <!--OS-->
               <td colspan="2"><?php echo $total9=$data2['in_os']+$data2['te_os']; ?></td>
               <td></td>
               <!--MP-->
               <td colspan="2"><?php echo $total10=$data2['in_mp']+$data2['te_mp']; ?></td>
               <td></td>    
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total6+$total7+$data2['p_aoa']+$total8+$data2['p_dbms']+$total9+$data2['p_os']+$total10+$data2['p_mp']+$data2['p_python'] ; ?>/750</td>
            </tr>
            <tr>
               <th>Grade</th>
               <td colspan="14">
                   <?php
                  if ($all>700 && $count1==15) 
                  {
                     echo "O";
                  }
                  elseif ($all>650 && $count1==15) 
                  {
                     echo "A+";
                  }
                  elseif ($all>600 && $count1==15) 
                  {
                     echo "A";
                  }
                  elseif ($all>550 && $count1==15) 
                  {
                     echo "B+";
                  }
                  elseif ($all>500 && $count1==15) 
                  {
                     echo "B";
                  }
                  elseif ($all>450 && $count1==15) 
                  {
                     echo "C+";
                  }
                  elseif ($all>400 && $count1==15) 
                  {
                     echo "C";
                  }
                  elseif ($all>350 && $count1==15) 
                  {
                     echo "D";
                  }
                  else
                  {
                     echo "F";
                  }
               ?>  
               </td>
            </tr>
            <tr>
               <td colspan="15">
                  <?php
                  if ($count1==15) 
                  {
                     echo "Successfull..!!";;
                  }
                  else
                  {
                     echo "Unsuccessfull..!!";
                  }
               ?>
               </td>
            </tr>
            <tr>
               <td colspan="15">
                  <form>
                     <input type="button" value="Print" onclick="document.title='seatno_name'; window.print()" />
                  </form>
               </td>

            </tr>
         </table>
</div>

<?php
         }
         ?>

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
</script>
</body>
</html>
