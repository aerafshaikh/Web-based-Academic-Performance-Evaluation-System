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
		$sql = "SELECT * FROM ty_stud_data WHERE id=$id";
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
		
		$in_tcs 	= validate($_POST['in_tcs']);
		$in_se		= validate($_POST['in_se']);
		$in_cn 		= validate($_POST['in_cn']);
		$in_dwm 	= validate($_POST['in_dwm']);
		$in_ip 		= validate($_POST['in_ip']);

		
		$p_se 		= validate($_POST['p_se']);
		$p_cn 		= validate($_POST['p_cn']);
		$p_dwm 		= validate($_POST['p_dwm']);
		$p_ip 		= validate($_POST['p_ip']);
		$p_pce 		= validate($_POST['p_pce']);

		$te_tcs 	= validate($_POST['te_tcs']);
		$te_se 		= validate($_POST['te_se']);
		$te_cn 		= validate($_POST['te_cn']);
		$te_dwm 	= validate($_POST['te_dwm']);
		$te_ip 		= validate($_POST['te_ip']);

		$in_spcc 	= validate($_POST['in_spcc']);
		$in_css		= validate($_POST['in_css']);
		$in_mc 		= validate($_POST['in_mc']);
		$in_ai 		= validate($_POST['in_ai']);
		$in_iot 	= validate($_POST['in_iot']);

		$p_spcc 	= validate($_POST['p_spcc']);
		$p_css 		= validate($_POST['p_css']);
		$p_ai 		= validate($_POST['p_ai']);
		$p_sblc 	= validate($_POST['p_sblc']);

		$te_spcc 	= validate($_POST['te_spcc']);
		$te_css 	= validate($_POST['te_css']);
		$te_mc 		= validate($_POST['te_mc']);
		$te_ai 		= validate($_POST['te_ai']);
		$te_iot 	= validate($_POST['te_iot']);

		$id 		= validate($_POST['id']);

		$sql = "UPDATE  ty_stud_data SET seat_no='$seat_no', in_tcs='$in_tcs', in_se='$in_se', in_cn='$in_cn',in_dwm='$in_dwm', in_ip='$in_ip', p_se='$p_se', p_cn='$p_cn', p_dwm='$p_dwm', p_ip='$p_ip', p_pce='$p_pce',te_tcs='$te_tcs', te_se='$te_se', te_cn='$te_cn',te_dwm='$te_dwm',te_ip='$te_ip',in_spcc='$in_spcc',in_css='$in_css',in_mc='$in_mc',in_ai='$in_ai',in_iot='$in_iot',p_spcc='$p_spcc',p_css='$p_css',p_ai='$p_ai',p_sblc='$p_sblc',te_spcc='$te_spcc',te_css='$te_css',te_mc='$te_mc',te_ai='$te_ai',te_iot='$te_iot' WHERE seat_no='$seat_no'";

		$result2 = mysqli_query($con,$sql);
		if($result2)
		{

			header("Location:ty_student_list.php?error= Studentt Marks added succefully in the DataBase");
		}

 }
 