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
		$sql = "SELECT * FROM fy_stud_data WHERE id=$id";
	    $result = mysqli_query($db, $sql);

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

		$seat_no		= validate($_POST['seat_no']);
		$in_emaths1 	= validate($_POST['in_emaths1']);
		$in_ephy1		= validate($_POST['in_ephy1']);
		$in_echem1 		= validate($_POST['in_echem1']);
		$in_emech 		= validate($_POST['in_emech']);
		$in_bee 		= validate($_POST['in_bee']);

		$p_ephy1 		= validate($_POST['p_ephy1']);
		$p_echem1 		= validate($_POST['p_echem1']);
		$p_emech 		= validate($_POST['p_emech']);
		$p_bee 			= validate($_POST['p_bee']);
		$p_workshop1	= validate($_POST['p_bee']);

		$te_emaths1 	= validate($_POST['te_emaths1']);
		$te_ephy1 		= validate($_POST['te_ephy1']);
		$te_echem1 		= validate($_POST['te_echem1']);
		$te_emech 		= validate($_POST['te_emech']);
		$te_bee 		= validate($_POST['te_bee']);

		$in_emaths2 	= validate($_POST['in_emaths2']);
		$in_ephy2		= validate($_POST['in_ephy2']);
		$in_echem2 		= validate($_POST['p_echem2']);
		$in_egraph 		= validate($_POST['in_egraph']);
		$in_c 		    = validate($_POST['in_c']);

		$p_ephy2 		= validate($_POST['p_ephy2']);
		$p_echem2 		= validate($_POST['p_echem2']);
		$p_egraph 	 	= validate($_POST['p_egraph']);
		$p_c 			= validate($_POST['p_c']);
		$p_workshop2 	= validate($_POST['p_workshop2']);

		$te_emaths2 	= validate($_POST['te_emaths2']);
		$te_ephy2 		= validate($_POST['te_ephy2']);
		$te_echem2 		= validate($_POST['te_echem2']);
		$te_egraph 		= validate($_POST['te_egraph']);
		$te_c 			= validate($_POST['te_c']);

		$id 		= validate($_POST['id']);

		$sql = "UPDATE fy_stud_data SET seat_no='$seat_no', in_emaths1='$in_emaths1',in_ephy1='$in_ephy1',in_echem1='$in_echem1',in_emech='$in_emech',in_bee='$in_bee',p_echem1='$p_echem1',p_ephy1='$p_ephy1',p_emech='$p_emech',p_bee='$p_bee',p_workshop1='$p_workshop1',te_emaths1='$te_emaths1',te_ephy1='$te_ephy1',te_echem1='$te_echem1',te_emech='$te_emech',te_bee='$te_bee',in_emaths2='$in_emaths2',in_ephy2='$in_ephy2',in_echem2='$in_echem2',in_egraph='$in_egraph',in_c='$in_c',p_ephy2='$p_ephy2',p_echem2='$p_echem2',p_egraph 	='$p_egraph',p_c='$p_c',p_workshop2='$p_workshop2',te_emaths2='$te_emaths2',te_ephy2='$te_ephy2',te_echem2='$te_echem2',te_egraph='$te_egraph',te_c='$te_c' WHERE seat_no='$seat_no'";
		$result2 = mysqli_query($con,$sql);
		if($result2)
		{

			header("Location:fy_student_list.php?error= Student Marks added succefully in the DataBase");
		}

 }