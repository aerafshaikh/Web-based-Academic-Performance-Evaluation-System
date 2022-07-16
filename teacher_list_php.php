<?php
$db = mysqli_connect('localhost','root','','apes');

$sql = "SELECT * FROM teacher_data ORDER BY first_name ";

$result = mysqli_query($db,$sql);
