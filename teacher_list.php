
<?php include "teacher_list_php.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's List</title>
    <link rel="stylesheet" type="text/css" href="css/teacher_list.css">
</head>
<body>

<header>
    <div class="header">
    <ol> 
    <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
    </ol>
      <ul> 
      <li><a href="teacher.html">Previous Page</a></li>
      </ul>
    </div>
</header>

          
        

    <?php if(mysqli_num_rows($result)){ ?>


    <table>
        <tr id="header">
            <th>Sr. No</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Address</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Qualification</th>
            <th>Department</th>
            <th>Update or Delete</th>
        </tr>
        
            <?php 
            $i = 0;
            while ($rows = mysqli_fetch_assoc($result)) {
             $i++;
            

            ?>
        <tr>
            <td><?=$i?></td>
            <td><?=$rows['first_name']?> </td>
            <td><?=$rows['last_name']?> </td>
            <td><?=$rows['address']?></td>
            <td><?=$rows['Email']?></td>
            <td><?=$rows['phoneNumber']?> </td>
            <td><?=$rows['qualification']?></td>
            <td><?=$rows['dept']?></td>
            <td>
			
                <a href="update.php?id=<?=$rows['id']?>"
				    class="update">Update</a>
				&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp	
					
					
				<a href="delete.php?id=<?=$rows['id']?>" 
                    class="delete">Delete</a>
                
            </td>
        </tr>
         <?php } ?>

    </table>
    <?php } ?>

</body>

</html>