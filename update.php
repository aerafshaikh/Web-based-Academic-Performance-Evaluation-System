<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Teacher</title>
    <link rel="stylesheet" href="css/add_teacher.css" />
</head>
<body>

<header>
    <div class="header">
    <ol> 
    <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
    </ol>
      <ul> 
      <li><a href="teacher_list.php">Previous Page</a></li>
      </ul>
    </div>
</header>


    
    <div class="regform">
        <h1>Update Teacher</h1>
    </div>
    
    <div class="main">

        <form action="update_php.php" method="POST">
            <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
				<?php	
			
			if (isset($_GET['id']))
			{
				$con = mysqli_connect('localhost','root','','apes');
	            		
					 	function validate($data)
					 	{
					        $data = trim($data);
					        $data = stripslashes($data);
					        $data = htmlspecialchars($data);
					        return $data;
						}

						$id = validate($_GET['id']);
			$id = $_GET["id"];
			$sql = "select * from teacher_data where id=".$id;
			
			$res = mysqli_query($con,$sql);
			 
			$result = array();

					while($row = mysqli_fetch_array($res))
				{ 
					$first_name = $row['first_name']; 
					$last_name= $row['last_name'];
					$address = $row['address'];
					$Email = $row['Email']; 
					$phoneNumber= $row['phoneNumber'];
					$qualification = $row['qualification'];
					$dept = $row['dept'];
					$password= $row['username_pass'];
					
				}
			}
			
		?>

            <div id="name">
                <h2 class="name">
                Name </h2>
                <input class="firstname" type="text" name="first_name" value= "<?php echo $first_name; ?>" required=""><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name" value="<?php echo $last_name; ?>" required=""><br>
                <label class="lastlabel">last name</label>
            </div>
            
            <h2 class="name">
            Address </h2>
            <input class="address" type="text" name="address" value= "<?php echo $address; ?>" required="">
           
            <h2 class="name">
            Email</h2>
            <input class="email" type="email" name="Email" value= "<?php echo $Email; ?>" required="">
    
            <h2 class="name"> Phone</h2>
            <input class="number" type="text" name="phoneNumber" value="<?php echo $phoneNumber; ?>" required="" maxlength="10">
            <label class="phone-number">Phone Number</label>

            <h2 class="name">Qualification</h2>
            <input class="address" type="text" name="qualification" value="<?php echo $qualification; ?>" required="">

            <h2 class="name"> Department</h2>
            <input class="address" type="text" name="dept" value="<?php echo $dept; ?>" placeholder="" required="">

            <h2 class="name">Password</h2> 
            <input class="firstname" type="Password" name="username_pass" value="<?php echo $password; ?>" required=""><br>
            

            <button type="submit" name="submit" >Update Teacher</button>


        </form>
    </div>



</body>
</html>