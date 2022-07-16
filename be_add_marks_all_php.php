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
		$sql = "SELECT * FROM be_stud_data WHERE id=$id";
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
		
		$in_dsp 	= validate($_POST['in_dsp']);
		$in_css		= validate($_POST['in_css']);
		$in_sa 		= validate($_POST['in_sa']);
		$in_ai 		= validate($_POST['in_ai']);
		

		$p_dsp 		= validate($_POST['p_dsp']);
		$p_css 		= validate($_POST['p_css']);
		$p_sa 		= validate($_POST['p_sa']);
		$p_ai 		= validate($_POST['p_ai']);
		$p_ntal 	= validate($_POST['p_ntal']);
		$p_prj1		= validate($_POST['p_prj1']);

		$te_dsp 	= validate($_POST['te_dsp']);
		$te_css 	= validate($_POST['te_css']);
		$te_sa 		= validate($_POST['te_sa']);
		$te_sa 		= validate($_POST['te_sa']);
		$te_ai 		= validate($_POST['te_ai']);
		

		$in_dwm 	= validate($_POST['in_dwm']);
		$in_hmi		= validate($_POST['in_hmi']);
		$in_pds 	= validate($_POST['in_pds']);
		$in_df 		= validate($_POST['in_df']);
		

		$p_dwm 		= validate($_POST['p_dwm']);
		$p_hmi 		= validate($_POST['p_hmi']);
		$p_pds 		= validate($_POST['p_pds']);
		$p_df 		= validate($_POST['p_df']);
		$p_ccl 		= validate($_POST['p_ccl']);
		$p_prj2 		= validate($_POST['p_prj2']);

		$te_dwm 	= validate($_POST['te_dwm']);
		$te_hmi 	= validate($_POST['te_hmi']);
		$te_pds 	= validate($_POST['te_pds']);
		$te_df 		= validate($_POST['te_df']);
		

		$id 		= validate($_POST['id']);

		$sql = "UPDATE  be_stud_data SET seat_no='$seat_no', in_dsp='$in_dsp', in_css='$in_css', in_sa='$in_sa',in_ai='$in_ai', p_dsp='$p_dsp', p_css='$p_css', p_sa='$p_sa', p_ai='$p_ai', p_ntal='$p_ntal',p_prj1='$p_prj1',te_dsp='$te_dsp', te_css='$te_css', te_sa='$te_sa',te_ai='$te_ai',in_dwm='$in_dwm',in_hmi='$in_hmi',in_pds='$in_pds',in_df='$in_df',p_dwm='$p_dwm',p_hmi='$p_hmi',p_pds='$p_pds',p_df='$p_df',p_ccl='$p_ccl',p_prj2='$p_prj2',te_dwm='$te_dwm',te_hmi='$te_hmi',te_pds='$te_pds',te_df='$te_df' WHERE seat_no='$seat_no'";

		$result2 = mysqli_query($con,$sql);
		if($result2)
		{

			header("Location:be_student_list.php?error= Student Marks added succefully in the DataBase");
		}

 }