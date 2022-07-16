<?php
if(isset($_GET['id']))
{
	$db = mysqli_connect('localhost','root','','apes');
	 function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id']);

	$sql = "DELETE FROM teacher_data
	        WHERE id=$id";
   $result = mysqli_query($db, $sql);
   if ($result) {
	 $status = "Record Deleted Successfully";
        header("location: teacher_list.php?status=".$status);
} 
else{
	$status = "Error in Deletion of Record";
	header("location: edit_faculty.php?status=".$status);
}
}
?>