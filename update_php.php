<?php 
$con = mysqli_connect('localhost','root','','apes');
// create a variable
if(isset($_POST))
{
$id=(int)$_POST['id'];
$firstname 		= $_POST['first_name'];
$lastname 		= $_POST['last_name'];
$address		= $_POST['address'];
$Email 			= $_POST['Email'];
$phoneNumber	= $_POST['phoneNumber'];
$qualification  = $_POST['qualification'];
$dept			= $_POST['dept'];
$password 		= $_POST['username_pass'];
$regname="/^[a-zA-Z ]*$/";
$regmob="/^\d{10}$/";

//Execute the query
if(empty($firstname) || empty($lastname) || empty($address) || empty($Email) || empty($phoneNumber) || empty($qualification)  || empty($dept) || empty($password))
	{
		$status = "Empty field are not allowed";
        header("location: teacher_list.php?status=".$status);
	}	
	elseif(!preg_match($regname,$firstname,$lastname)){
		$status = "Only letters and white space allowed";
        header("location: teacher_list.php?status=".$status);
	}
	elseif(!preg_match($regmob,$phoneNumber)){
		$status = "Enter valid Mobile Number";
        header("location: teacher_list.php?status=".$status);
	}
	elseif(!preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/',$Email)){
		$status = "Enter valid Email Id.";
        header("location: teacher_list.php?status=".$status);
	}
	else{
$sql = "UPDATE teacher_data SET firstname='$first_name',lastname='$last_name',address='$address', phoneNumber='$phoneNumber', Email='$Email', qualification='$qualification', dept='$dept', password='$username_pass' WHERE id='$id'";
mysqli_query($con,$sql);


if(mysqli_affected_rows($con) > 0){
	$status = "Information updated Sucessfully";
    header("location: teacher_list.php?status=".$status);
	} else {
	$status = "Error in updating Information";
    header("location: teacher_list.php?status=".$status);
	}
        }
}

?>
