<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacted Person's List</title>
    <link rel="stylesheet" type="text/css" href="css/contact_person.css">
</head>
<body>

<header>
    <div class="header">
      <ol>
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
      </ol>
      <ul>
        <li><a href="admin_login_main.html"><u>Previous Page</u></a></li>
      </ul>
    </div>
  </header>
      <?php
            $con=mysqli_connect('localhost','root','','apes');
            $sql="SELECT * FROM `contact`";
            $run=mysqli_query($con,$sql);
            if(mysqli_num_rows($run)>0)
                {
        ?>



    <table>
        <tr id="header">
            <th>Sr No.</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Year</th>
            <th>E-mail</th>
            <th>Subject</th>
            <th>Delete</th>
        </tr>
        <?php
            $i = 0;
        
                while($row=mysqli_fetch_assoc($run))
                    {
                        $i++;
        ?>
        <tr>
            <td><?=$i ?></td>
            <td><?php  echo $row['first_name'].'<br>'; ?></td>
            <td><?php  echo $row['last_name'].'<br>'; ?></td>
            <td><?php  echo $row['section'].'<br>'; ?></td>
            <td><?php  echo $row['Email'].'<br>'; ?></td>
            <td><?php  echo $row['msg'].'<br>'; ?></td>
            <td>
                <a href="contact_del.php?id=<?=$row['id']?>" 
                    class="delete">Delete</a>
            </td>
        </tr>
        <?php    
        }
    }

?>
    </table>


</body>

</html>