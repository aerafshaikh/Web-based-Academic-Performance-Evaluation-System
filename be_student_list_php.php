<?php
$db = mysqli_connect('localhost','root','','apes');

$sql = "SELECT * FROM be_stud_data ";

$result = mysqli_query($db,$sql);
?>