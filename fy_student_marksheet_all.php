
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FY Performance Report</title>
    <link rel="stylesheet" type="text/css" href="css/student_marksheet_all.css">
    <script type="text/javascript"></script>
</head>
<body>
<div class="header">
      <ol>
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
      </ol>
      <ul>
      <a href="fy_student_login.php">Logout</a>
      </ul>
    </div>
  </header>

    <?php

    session_start();
     include('fy_stud_add_data.php');
     $seat_no = 'seat_no';

     $sql = "SELECT * FROM fy_stud_data WHERE seat_no='".$_SESSION['seat_no']."'";
     $result1 = mysqli_query($con,$sql);

     while ($row = mysqli_fetch_array($result1))
      {
         echo "<h3>Name : <b> ".$row['first_name']." ".$row['last_name']." </b></h3> ";
         echo "<h3>Seat Number : <b> ".$row['seat_no']." </b></h3> ";
     }


    ?>


    <h3>Course : <b>BE Comps</b></h3>
   <h3>Select Semester : </h3>

      
      <div class="semlist">
         <select id="sem">
            <option disabled="" selected="">--Select--</option>
            <option value="sem1" >SEM I</option>
            <option value="sem2">SEM II</option>
         </select>
        </div>

<!--SEMESTER I -->
<?php

$count = 0;
$count1 = 1;

$seat_no='seat_no';
 $sql2="SELECT * FROM `fy_stud_data` WHERE seat_no='".$_SESSION['seat_no']."'";
$run2=mysqli_query($con,$sql2);
 
 if(mysqli_num_rows($run2)>0)
{
$data2=mysqli_fetch_assoc($run2);
?>




<div class="sem1 detail">
      <div class="tit">
         <h2 align="center">SEMESTER I</h2>
      </div>
         <table border="2" align="center">
         	<tr>
         	    <th colspan="15">Subject</th>     
         	</tr>
         	<tr>
         		<th colspan="2">EMATHS1</th>
         		<th colspan="3">EPHY1</th>
         		<th colspan="3">ECHEM1</th>
         		<th colspan="3">EMECH</th>
         		<th colspan="3">BEE</th>   
				<th colspan="1">BWORKSHOP1</th>
         	</tr>
         	<tr>
         		<!--EMATHS1-->
         		<th>Int</th>
         		<th>Ext</th>
               	<!--EPHY1-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--ECHEM1-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--EMECH-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
         		<!--BEE-->
         		<th>Int</th>
         		<th>Ext</th>
               <th>Pract</th>
			   <!--BW-->
         	  <th>Pract</th>
         	</tr>
         	<tr>
         		<!--EMATHS1-->
         		<td><?php echo $data2['in_emaths1'];?></td>
               <?php
                  if ($data2['in_emaths1']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_emaths1'];?></td>
               <?php
                  if ($data2['te_emaths1']>=30) 
                  {
                     $count++;
                  }
               ?>
         	
        		<!--EPHY1-->
         		<td><?php echo $data2['in_ephy1'];?></td>
               <?php
                  if ($data2['in_ephy1']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_ephy1'];?></td>
               <?php
                  if ($data2['te_ephy1']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_ephy1'];?></td>
               <?php
                  if ($data2['p_ephy1']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--ECHEM1-->
         		<td><?php echo $data2['in_echem1'];?></td>
               <?php
                  if ($data2['in_echem1']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_echem1'];?></td>
               <?php
                  if ($data2['te_echem1']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_echem1'];?></td>
               <?php
                  if ($data2['p_echem1']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--EMECH-->
         		<td><?php echo $data2['in_emech'];?></td>
               <?php
                  if ($data2['in_emech']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_emech'];?></td>
               <?php
                  if ($data2['te_emech']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_emech'];?></td>
               <?php
                  if ($data2['p_emech']>=20) 
                  {
                     $count++;
                  }
               ?>

         		<!--BEE-->
         		<td><?php echo $data2['in_bee'];?></td>
               <?php
                  if ($data2['in_bee']>=10) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['te_bee'];?></td>
               <?php
                  if ($data2['te_bee']>=30) 
                  {
                     $count++;
                  }
               ?>
         		<td><?php echo $data2['p_bee'];?></td>
               <?php
                  if ($data2['p_bee']>=20) 
                  {
                     $count++;
                  }
               ?>
			   	<!--BW1-->
         		<td><?php echo $data2['p_workshop1'];?></td>
               <?php
                  if ($data2['p_workshop1']>=10) 
                  {
                     $count++;
                  }
               ?>

         	</tr>
            <tr>
               <!--EMATHS1-->
               <td colspan="2"><?php echo $total1=$data2['in_emaths1']+$data2['te_emaths1']; ?></td>
               
               <!--EPHY1-->
               <td colspan="2"><?php echo $total2=$data2['in_ephy1']+$data2['te_ephy1']; ?></td>
               <td></td>
               <!--ECHEM1-->
               <td colspan="2"><?php echo $total3=$data2['in_echem1']+$data2['te_echem1']; ?></td>
               <td></td>
               <!--EMECH-->
               <td colspan="2"><?php echo $total4=$data2['in_emech']+$data2['te_emech']; ?></td>
               <td></td>
               <!--BEE-->
               <td colspan="2"><?php echo $total5=$data2['in_bee']+$data2['te_bee']; ?></td>
               <td></td>    
            </tr>

            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total1+$total2+$data2['p_ephy1']+$total3+$data2['p_echem1']+$total4+$data2['p_emech']+$total5+$data2['p_bee']+$data2['p_workshop1']; ?>/750</td>
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

<!-- SEMESTER II -->

<div class="sem2 detail">
   <div class="tit">                                                                                                    
      <h2 align="center">SEMESTER II</h2>
   </div>     
         <table border="2" align="center">
            <tr>
                <th colspan="15">Subject</th>
            </tr>
            <tr>
               <th colspan="2">EMATHS2</th>
               <th colspan="3">EPHY2</th>
               <th colspan="3">ECHEM2</th>
               <th colspan="3">EGRAPH</th>
               <th colspan="3">C</th>
               <th colspan="1">BWORKSHOP2</th>   
            </tr>
            <tr>
               <!--EMATHS2-->
               <th>Int</th>
               <th>Ext</th>
				<!--EPHY2-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--ECHEM2-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--EG-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--CP-->
               <th>Int</th>
               <th>Ext</th>
               <th>Pract</th>
               <!--Workshop2-->
				<th>Pract</th>
            </tr>
            <tr>
               <!--EMATHS2-->
               <td><?php echo $data2['in_emaths2'];?></td>
               <?php
                  if ($data2['in_emaths2']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_emaths2'];?></td>
               <?php
                  if ($data2['te_emaths2']>=30) 
                  {
                     $count1++;
                  }
               ?>
              

               <!--EPHY2-->
               <td><?php echo $data2['in_ephy2'];?></td>
               <?php
                  if ($data2['in_ephy2']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_ephy2'];?></td>
               <?php
                  if ($data2['te_ephy2']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_ephy2'];?></td>
               <?php
                  if ($data2['p_ephy2']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--ECHEM2-->
               <td><?php echo $data2['in_echem2'];?></td>
               <?php
                  if ($data2['in_echem2']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_echem2'];?></td>
               <?php
                  if ($data2['te_echem2']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_echem2'];?></td>
               <?php
                  if ($data2['p_echem2']>=20) 
                  {
                     $count1++;
                  }
               ?>

               <!--EG-->
               <td><?php echo $data2['in_egraph'];?></td>
               <?php
                  if ($data2['in_egraph']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_egraph'];?></td>
               <?php
                  if ($data2['te_egraph']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_egraph'];?></td>
               <?php
                  if ($data2['p_egraph']>=30) 
                  {
                     $count1++;
                  }
               ?>

               <!--CP-->
               <td><?php echo $data2['in_c'];?></td>
               <?php
                  if ($data2['in_c']>=10) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['te_c'];?></td>
               <?php
                  if ($data2['te_c']>=30) 
                  {
                     $count1++;
                  }
               ?>
               <td><?php echo $data2['p_c'];?></td>
               <?php
                  if ($data2['p_c']>=30) 
                  {
                     $count1++;
                  }
               ?>

               <!--BW2-->
				<td><?php echo $data2['p_workshop2'];?></td>
               <?php
                  if ($data2['p_workshop2']>=20) 
                  {
                     $count1++;
                  }
               ?>

            </tr>
            <tr>
               <!--EMATHS2-->
               <td colspan="2"><?php echo $total6=$data2['in_emaths2']+$data2['te_emaths2']; ?></td>
               
               <!--EPHY2-->
               <td colspan="2"><?php echo $total7=$data2['in_ephy2']+$data2['te_ephy2']; ?></td>
               <td></td>
               <!--ECHEM2-->
               <td colspan="2"><?php echo $total8=$data2['in_echem2']+$data2['te_echem2']; ?></td>
               <td></td>
               <!--EG-->
               <td colspan="2"><?php echo $total9=$data2['in_egraph']+$data2['te_egraph']; ?></td>
               <td></td>
               <!--CP-->
               <td colspan="2"><?php echo $total10=$data2['in_c']+$data2['te_c']; ?></td>
			   <td></td>
               <!--PCE1-->
               <td colspan="2"><?php echo $total11=$data2['p_workshop2']; ?></td>
                
            </tr>
            <tr>
               <th>Total Marks</th>
               <td colspan="14"><?php echo $all=$total6+$total7+$data2['p_ephy2']+$total8+$data2['p_echem2']+$total9+$data2['p_egraph']+$total10+$data2['p_c']+$total11 ; ?>/750</td>
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
