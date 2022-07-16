<?php
 
 if(isset($_GET['id']))
 {
 	include "fy_stud_add_data.php";


 	function validate($data)
	 	{
	        $data = trim($data);
	        $data = stripslashes($data);
	        $data = htmlspecialchars($data);
	        return $data;
		}

		$id = validate($_GET['id']);
		$sql = "SELECT * FROM sy_stud_data WHERE id=$id";
	    $result = mysqli_query($con, $sql);

	    if (mysqli_num_rows($result) > 0) 
	    {
	    	$row = mysqli_fetch_assoc($result);
	    }
	   
 
 }
 else if(isset($_POST['submit']))
 {
    include "fy_stud_add_data.php";
    function validate($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

		$seat_no	= validate($_POST['seat_no']);
		
		$in_emaths3 = validate($_POST['in_emaths3']);
		$in_dsgt	= validate($_POST['in_dsgt']);
		$in_ds 		= validate($_POST['in_ds']);
		$in_dlca 	= validate($_POST['in_dlca']);
		$in_cg 		= validate($_POST['in_cg']);

		
		$p_ds 		= validate($_POST['p_ds']);
		$p_dlca 	= validate($_POST['p_dlca']);
		$p_cg 		= validate($_POST['p_cg']);
		$p_java 	= validate($_POST['p_java']);

		$te_emaths3 	= validate($_POST['te_emaths3']);
		$te_dsgt 	= validate($_POST['te_dsgt']);
		$te_ds 		= validate($_POST['te_ds']);
		$te_dlca 	= validate($_POST['te_dlca']);
		$te_cg 		= validate($_POST['te_cg']);

		$in_emaths4 = validate($_POST['in_emaths4']);
		$in_aoa		= validate($_POST['in_aoa']);
		$in_dbms 		= validate($_POST['in_dbms']);
		$in_os 		= validate($_POST['in_os']);
		$in_mp 	= validate($_POST['in_mp']);

		$p_java 	= validate($_POST['p_java']);
		$p_aoa 		= validate($_POST['p_aoa']);
		$p_dbms 		= validate($_POST['p_dbms']);
		$p_os 		= validate($_POST['p_os']);
		$p_mp 	= validate($_POST['p_mp']);
		$p_python 	= validate($_POST['p_python']);

		$te_emaths4 	= validate($_POST['te_emaths4']);
		$te_aoa 		= validate($_POST['te_aoa']);
		$te_dbms 		= validate($_POST['te_dbms']);
		$te_os 		= validate($_POST['te_os']);
		$te_mp 	= validate($_POST['te_mp']);

		$id 		= validate($_POST['id']);

		$sql = "UPDATE sy_stud_data SET seat_no='$seat_no', in_emaths3='$in_emaths3', in_dsgt='$in_dsgt', in_ds='$in_ds',in_dlca='$in_dlca', in_cg='$in_cg',  p_ds='$p_ds', p_dlca='$p_dlca', p_cg='$p_cg',te_emaths3='$te_emaths3', te_dsgt='$te_dsgt', te_ds='$te_ds',te_dlca='$te_dlca',te_cg='$te_cg',in_emaths4='$in_emaths4',in_aoa='$in_aoa',in_dbms='$in_dbms',in_cg='$in_os',in_mp='$in_mp',p_java='$p_java',p_aoa='$p_aoa',p_dbms='$p_dbms',p_cg='$p_cg',p_mp='$p_mp',p_python='$p_python',te_emaths4='$te_emaths4',te_aoa='$te_aoa',te_dbms='$te_dbms',te_dbms='$te_dbms',te_os='$te_os',te_mp='$te_mp' WHERE seat_no='$seat_no'";

		$result2 = mysqli_query($con,$sql);
		if($result2)
		{

			header("Location:sy_student_list.php?error= Student Marks added succefully in the DataBase");
		}

 }
 