<?php
$db = mysqli_connect('localhost','root','','apes');

$sql = "SELECT * FROM sy_stud_data ";

$result = mysqli_query($db,$sql);


