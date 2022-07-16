<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TY Performance Report</title>
    <link rel="stylesheet" type="text/css" href="css/student_marksheet_all.css">
    <script type="text/javascript"></script>
</head>
<body>
<div class="header">
      <ol>
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
      </ol>
      <ul>
      <a href="ty_student_login.php">Logout</a>
      </ul>
    </div>
  </header>

   <?php

    session_start();
     include('fy_stud_add_data.php');
     $seat_no = 'seat_no';

     $sql = "SELECT * FROM ty_stud_data WHERE seat_no='".$_SESSION['seat_no']."'";
     $result1 = mysqli_query($con,$sql);

     while ($row = mysqli_fetch_array($result1))
      {
         echo ("<h3>Name : <b> ".$row['first_name']." ".$row['last_name']." </b></h3> ");
         echo "<h3>Seat Number : <b> ".$row['seat_no']." </b></h3> ";
     }


    ?>


    <h3>Course : <b>BE Comps</b></h3>
   <h3>Select Semester : </h3>
      
      <div class="semlist">
         <select id="sem">
            <option disabled="" selected="">--Select--</option>
            <option value="sem1" >SEM V</option>
            <option value="sem2">SEM VI</option>
         </select>
        </div>

<!--SEMESTER V -->
<?php

$count = 0;
$count1 = 0;

$seat_no='seat_no';
 $sql2="SELECT * FROM `ty_stud_data` WHERE seat_no='".$_SESSION['seat_no']."'";
$run2=mysqli_query($con,$sql2);
 
 if(mysqli_num_rows($run2)>0)
{
$data2=mysqli_fetch_assoc($run2);
?>

<div class="sem1 detail">
      <div class="tit">
         <h2 align="center">SEMESTER V</h2>
      </div>
         <table border="2" align="center">
         	<tr>
         	    <th colspan="15">Subject</th>
         	</tr>
         	<tr>
         		<th colspan="3">TCS</th>
         		<th colspan="3">SE</th>
         		<th colspan="3">CN</th>
         		<th colspan="3">DWM</th>
         		<th colspan="3">IP</th>   
         	</tr>
         	<tr>
         		<!--TCS-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--SE-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--CN-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--DWM-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--OC1-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         	</tr>
         	<tr>
         		<!--TCS-->
         		<td><?php echo $data2['in_tcs'];?></td>
               <?php
                  if ($data2['in_tcs']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_tcs'];?></td>
               <?php
                  if ($data2['te_tcs']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_tcs'];?></td>
               <?php
                  if ($data2['p_tcs']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--SE-->
         		<td><?php echo $data2['in_se'];?></td>
               <?php
                  if ($data2['in_se']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_se'];?></td>
               <?php
                  if ($data2['te_se']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_se'];?></td>
               <?php
                  if ($data2['p_se']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--CN-->
         		<td><?php echo $data2['in_cn'];?></td>
               <?php
                  if ($data2['in_cn']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_cn'];?></td>
               <?php
                  if ($data2['te_cn']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_cn'];?></td>
               <?php
                  if ($data2['p_cn']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--DWM-->
         		<td><?php echo $data2['in_dwm'];?></td>
               <?php
                  if ($data2['in_dwm']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_dwm'];?></td>
               <?php
                  if ($data2['te_dwm']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_dwm'];?></td>
               <?php
                  if ($data2['p_dwm']>=20) 
                  {
                     $count++;
                  }
               ?>
         		<!--OC1-->
         		<td><?php echo $data2['in_ip'];?></td>
               <?php
                  if ($data2['in_ip']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_ip'];?></td>
               <?php
                  if ($data2['te_ip']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_ip'];?></td>
               <?php
                  if ($data2['p_ip']>=20) 
                  {
                     $count++;
                  }
               ?>
         	</tr>
            <tr>
               <!--TCS-->
               <td colspan="2"><?php echo $total1=$data2['in_tcs']+$data2['te_tcs']; ?></td>
               <td></td>
               <!--SE-->
               <td colspan="2"><?php echo $total2=$data2['in_se']+$data2['te_se']; ?></td>
               <td></td>
               <!--CN-->
               <td colspan="2"><?php echo $total3=$data2['in_cn']+$data2['te_cn']; ?></td>
               <td></td>
               <!--DWM-->
               <td colspan="2"><?php echo $total4=$data2['in_dwm']+$data2['te_dwm']; ?></td>
               <td></td>
               <!--OC1-->
               <td colspan="2"><?php echo $total5=$data2['in_ip']+$data2['te_ip']; ?></td>
               <td></td>    
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total1+$data2['p_tcs']+$total2+$data2['p_se']+$total3+$data2['p_cn']+$total4+$data2['p_dwm']+$total5+$data2['p_ip'] ; ?>/750</td>
            </tr>
            <tr>
               <th>Grade</th>
               <td colspan="14">
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
               <td colspan="15">
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
      <h2 align="center">SEMESTER VI</h2>
   </div>     
         <table border="2" align="center">
            <tr>
                <th colspan="15">Subject</th>
            </tr>
            <tr>
               <th colspan="3">SPCC</th>
               <th colspan="3">CSS</th>
               <th colspan="2">MC</th>
               <th colspan="3">AI</th>
               <th colspan="2">IOT</th> 
			   <th colspan="1">SBLC</th> 			   
            </tr>
            <tr>
               <!--SPCC-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--CSS-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--MC-->
               <th>Int</th>
               <th>Ext</th>
              
               <!--AI-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--IOT-->
               <th>Int</th>
               <th>Ext</th>
			   <!--SBLC-->
               <th>Pract</th>
            </tr>
            <tr>
               <!--SPCC-->
               <td><?php echo $data2['in_spcc'];?></td>
               <?php
                  if ($data2['in_spcc']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_spcc'];?></td>
               <?php
                  if ($data2['te_spcc']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_spcc'];?></td>
               <?php
                  if ($data2['p_spcc']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--css-->
               <td><?php echo $data2['in_css'];?></td>
               <?php
                  if ($data2['in_css']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_css'];?></td>
               <?php
                  if ($data2['te_css']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_css'];?></td>
               <?php
                  if ($data2['p_css']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--MC-->
               <td><?php echo $data2['in_mc'];?></td>
               <?php
                  if ($data2['in_mc']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_mc'];?></td>
               <?php
                  if ($data2['te_mc']>=30) 
                  {
                     $count1++;
                  }
               ?>
               
               <!--AI-->
               <td><?php echo $data2['in_ai'];?></td>
               <?php
                  if ($data2['in_ai']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_ai'];?></td>
               <?php
                  if ($data2['te_ai']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_ai'];?></td>
               <?php
                  if ($data2['p_ai']>=20) 
                  {
                     $count1++;
                  }
               ?>
               <!--iot-->
               <td><?php echo $data2['in_iot'];?></td>
               <?php
                  if ($data2['in_iot']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_iot'];?></td>
               <?php
                  if ($data2['te_iot']>=30) 
                  {
                     $count1++;
                  }
               ?>
              
			   <!--sblc-->
			   <td><?php echo $data2['p_sblc'];?></td>
               <?php
                  if ($data2['p_sblc']>=20) 
                  {
                     $count1++;
                  }
               ?>
            </tr>
            <tr>
               <!--SPCC-->
               <td colspan="2"><?php echo $total6=$data2['in_spcc']+$data2['te_spcc']; ?></td>
               <td></td>
               <!--CSS-->
               <td colspan="2"><?php echo $total7=$data2['in_css']+$data2['te_css']; ?></td>
               <td></td>
               <!--MC-->
               <td colspan="2"><?php echo $total8=$data2['in_mc']+$data2['te_mc']; ?></td>
               
               <!--AI-->
               <td colspan="2"><?php echo $total9=$data2['in_ai']+$data2['te_ai']; ?></td>
               <td></td>
               <!--iot-->
               <td colspan="2"><?php echo $total10=$data2['in_iot']+$data2['te_iot']; ?></td>
               <td></td>    
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total6+$data2['p_spcc']+$total7+$data2['p_css']+$total8+$total9+$data2['p_ai']+$total10+$data2['p_sblc'] ; ?>/750</td>
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
