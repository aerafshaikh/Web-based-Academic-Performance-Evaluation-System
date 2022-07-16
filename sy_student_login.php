<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SY Student Login</title>
    <script>
      src = "https://kit.fontawesome.com/4e7da428f4.js";
      crossorigin = "anonymous";
    </script>
    <link rel="stylesheet" href="css/student_login.css" />
  </head>
  <body>
  <header>
        <div class="header">
        <ol> 
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
        </ol>
          <ul> 
          <a href="student_login_main.html">Previous Page</a>
          </ul>
        </div>
    </header>
      
    <form class="box" action="sy_student_login_php.php" method="POST">
    <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/512/201/201818.png">
      <h1>Second Year Student Login</h1>

       <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>
      <input type="text" name="seat_no" placeholder="Seat Number" />
      <!--<input type="password" name="" placeholder="Password" />-->
      <button class="submit-btn">Login</button>
      <!-- <input type="submit" value="Login" /> -->
    </form>
  
  </body>
</html>
