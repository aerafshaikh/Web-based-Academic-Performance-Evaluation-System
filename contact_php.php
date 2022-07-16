<?php
if(isset($_POST['submit']))
{
    
    $con=mysqli_connect('localhost','root','','apes');

    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $section=$_POST['section'];
    $Email=$_POST['Email'];
    $msg=$_POST['msg'];

    $sql = "INSERT INTO contact(first_name, last_name, section, Email, msg) VALUES ('$first_name','$last_name','$section','$Email','$msg')";
    $run=mysqli_query($con,$sql);
    if($run)
    {
      header("Location: contact.php?error= Thankyou for contacting us..!!");
      exit();
    }
}

?>