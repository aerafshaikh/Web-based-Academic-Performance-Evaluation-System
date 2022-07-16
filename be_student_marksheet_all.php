<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BE Performance Report</title>
    <link rel="stylesheet" type="text/css" href="css/student_marksheet_all.css">
    <script type="text/javascript"></script>
</head>
<body>
<div class="header">
      <ol>
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
      </ol>
      <ul>
      <a href="be_student_login.php">Logout</a> 
      </ul>
    </div>
  </header>

   <?php

    session_start();
     include('fy_stud_add_data.php');
     $seat_no = 'seat_no';

     $sql = "SELECT * FROM be_stud_data WHERE seat_no='".$_SESSION['seat_no']."'";
     $result1 = mysqli_query($con,$sql);

     while ($row = mysqli_fetch_array($result1))
      {
         echo ("<h3>Name : <b> ".$row['first_name']." ".$row['last_name']." </b></h3> ");
         echo "<h3>Seat Number : <b> ".$row['seat_no']." </b></h3> ";
     }


    ?>


    <h3>Course : <b>BE in Comps</b></h3>
   <h3>Select Semester : </h3>
      
      <div class="semlist">
         <select id="sem">
            <option disabled="" selected="">--Select--</option>
            <option value="sem1" >SEM VII</option>
            <option value="sem2">SEM VIII</option>
         </select>
        </div>

<!--SEMESTER V -->
<?php

$count = 1;
$count1 = 1;

$seat_no='seat_no';
 $sql2="SELECT * FROM `be_stud_data` WHERE seat_no='".$_SESSION['seat_no']."'";
$run2=mysqli_query($con,$sql2);
 
 if(mysqli_num_rows($run2)>0)
{
$data2=mysqli_fetch_assoc($run2);
?>

<div class="sem1 detail">
      <div class="tit">
         <h2 align="center">SEMESTER VII</h2>
      </div>
         <table border="2" align="center">
         	<tr>
         	    <th colspan="15">Subject</th>
         	</tr>
         	<tr>
         		<th colspan="3">DSP</th>
         		<th colspan="3">CSS</th>
         		<th colspan="3">SA</th>
         		<th colspan="3">AI</th>
         		<th colspan="1">NTAL</th>
				<th colspan="1">Project 1</th>				
         	</tr>
         	<tr>
         		<!--DSP-->
         		<th>Int</th>
         		<th>Theory</th>
               <th>Pract</th>
         		<!--CSS-->
         		<th>Int</th>
         		<th>Theory</th>
               <th>Pract</th>
         		<!--SA-->
         		<th>Int</th>
         		<th>Theory</th>
               <th>Pract</th>
         		<!--AI-->
         		<th>Int</th>
         		<th>Theory</th>
               <th>Pract</th>
         		<!--NTAL-->
         		<th>Pract</th>
				<!--Prj1-->
         		<th>Pract</th>
         	</tr>
         	<tr>
         		<!--DSP-->
         		<td><?php echo $data2['in_dsp'];?></td>
               <?php
                  if ($data2['in_dsp']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_dsp'];?></td>
               <?php
                  if ($data2['te_dsp']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_dsp'];?></td>
               <?php
                  if ($data2['p_dsp']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--CSS-->
         		<td><?php echo $data2['in_css'];?></td>
               <?php
                  if ($data2['in_css']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_css'];?></td>
               <?php
                  if ($data2['te_css']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_css'];?></td>
               <?php
                  if ($data2['p_css']>=20) 
                  {
                     $count++;
                  }
               ?>
			   <!--sa-->
         		<td><?php echo $data2['in_sa'];?></td>
               <?php
                  if ($data2['in_sa']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_sa'];?></td>
               <?php
                  if ($data2['te_sa']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_sa'];?></td>
               <?php
                  if ($data2['p_sa']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--ai-->
         		<td><?php echo $data2['in_ai'];?></td>
               <?php
                  if ($data2['in_ai']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_ai'];?></td>
               <?php
                  if ($data2['te_ai']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_ai'];?></td>
               <?php
                  if ($data2['p_ai']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--ntal-->
         		<td><?php echo $data2['p_ntal'];?></td>
               <?php
                  if ($data2['p_ntal']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--prj1-->
         		<td><?php echo $data2['p_prj1'];?></td>
               <?php
                  if ($data2['p_prj1']>=20) 
                  {
                     $count++;
                  }
               ?>
         	</tr>
            <tr>
               <!--IP-->
               <td colspan="2"><?php echo $total1=$data2['in_dsp']+$data2['te_dsp']; ?></td>
               <td></td>
               <!--CSS-->
               <td colspan="2"><?php echo $total2=$data2['in_css']+$data2['te_css']; ?></td>
               <td></td>
			   <!--SA-->
               <td colspan="2"><?php echo $total3=$data2['in_sa']+$data2['te_sa']; ?></td>
               <td></td>
               <!--AI-->
               <td colspan="2"><?php echo $total4=$data2['in_ai']+$data2['te_ai']; ?></td>
               <td></td>
               <!--NTAL-->
               <td colspan="1"></td>
               
               <!--PRJ1--->
               <td colspan="1"></td>
                 
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total1+$data2['p_dsp']+$total2+$data2['p_css']+$total3+$data2['p_sa']+$total4+$data2['p_ai']+$data2['p_ntal']+$data2['p_prj1'] ; ?>/750</td>
            </tr>
            <tr>
               <th>Grade</th>
               <td colspan="13">
                   <?php
                  if ($all>700 && $count==14) 
                  {
                     echo "O";
                  }
                  elseif ($all>650 && $count==14) 
                  {
                     echo "A+";
                  }
                  elseif ($all>600 && $count==14) 
                  {
                     echo "A";
                  }
                  elseif ($all>550 && $count==14) 
                  {
                     echo "B+";
                  }
                  elseif ($all>500 && $count==14) 
                  {
                     echo "B";
                  }
                  elseif ($all>450 && $count==14) 
                  {
                     echo "C+";
                  }
                  elseif ($all>400 && $count==14) 
                  {
                     echo "C";
                  }
                  elseif ($all>350 && $count==14) 
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
                  if ($count==14) 
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

<!-- SEMESTER VI -->

<div class="sem2 detail">
   <div class="tit">
      <h2 align="center">SEMESTER VIII</h2>
   </div>     
         <table border="2" align="center">
            <tr>
                <th colspan="15">Subject</th>
            </tr>
            <tr>
               <th colspan="3">DWM</th>
               <th colspan="3">HMI</th>
               <th colspan="3">PDS</th>
               <th colspan="3">DF</th>
               <th colspan="1">CCL</th>   
			   <th colspan="1">Project 2</th>  
            </tr>
            <tr>
               <!--DWM-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--HMI-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--PDS-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--DF-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--CCL-->
			   <th>Pract</th>
			   <!--Prj2-->
			   <th>Pract</th>
			   
            </tr>
            <tr>
               <!--dwm-->
               <td><?php echo $data2['in_dwm'];?></td>
               <?php
                  if ($data2['in_dwm']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_dwm'];?></td>
               <?php
                  if ($data2['te_dwm']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_dwm'];?></td>
               <?php
                  if ($data2['p_dwm']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--hmi-->
               <td><?php echo $data2['in_hmi'];?></td>
               <?php
                  if ($data2['in_hmi']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_hmi'];?></td>
               <?php
                  if ($data2['te_hmi']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_hmi'];?></td>
               <?php
                  if ($data2['p_hmi']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--pds-->
               <td><?php echo $data2['in_pds'];?></td>
               <?php
                  if ($data2['in_pds']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_pds'];?></td>
               <?php
                  if ($data2['te_pds']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_pds'];?></td>
               <?php
                  if ($data2['p_pds']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--df-->
               <td><?php echo $data2['in_df'];?></td>
               <?php
                  if ($data2['in_df']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_df'];?></td>
               <?php
                  if ($data2['te_df']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_df'];?></td>
               <?php
                  if ($data2['p_df']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--ccl-->
				<td><?php echo $data2['p_ccl'];?></td>
               <?php
                  if ($data2['p_ccl']>=20) 
                  {
                     $count1++;
                  }
               ?>
			   <!--prj2-->
				<td><?php echo $data2['p_prj2'];?></td>
               <?php
                  if ($data2['p_prj2']>=20) 
                  {
                     $count1++;
                  }
               ?>
            </tr>
            <tr>
               <!--IP-->
               <td colspan="2"><?php echo $total6=$data2['in_dwm']+$data2['te_dwm']; ?></td>
               <td></td>
               <!--DE-->
               <td colspan="2"><?php echo $total7=$data2['in_hmi']+$data2['te_hmi']; ?></td>
               <td></td>
               <!--DM-->
               <td colspan="2"><?php echo $total8=$data2['in_pds']+$data2['te_pds']; ?></td>
               <td></td>
               <!--CS-->
               <td colspan="2"><?php echo $total9=$data2['in_df']+$data2['te_df']; ?></td>
               <td></td>
                 
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total6+$data2['p_dwm']+$total7+$data2['p_hmi']+$total8+$data2['p_pds']+$total9+$data2['p_df']+$data2['p_ccl']+$data2['p_prj2'] ; ?>/750</td>
            </tr>
            <tr>
               <th>Grade</th>
               <td colspan="14">
                  <?php
                  if ($all>700 && $count1==14) 
                  {
                     echo "O";
                  }
                  elseif ($all>650 && $count1==14) 
                  {
                     echo "A+";
                  }
                  elseif ($all>600 && $count1==14) 
                  {
                     echo "A";
                  }
                  elseif ($all>550 && $count1==14) 
                  {
                     echo "B+";
                  }
                  elseif ($all>500 && $count1==14) 
                  {
                     echo "B";
                  }
                  elseif ($all>450 && $count1==14) 
                  {
                     echo "C+";
                  }
                  elseif ($all>400 && $count1==14) 
                  {
                     echo "C";
                  }
                  elseif ($all>350 && $count1==14) 
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
                  if ($count1==14) 
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
