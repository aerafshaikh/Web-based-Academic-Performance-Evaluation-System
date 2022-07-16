<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Teacher Login</title>
    <script>
      src = "https://kit.fontawesome.com/4e7da428f4.js";
      crossorigin = "anonymous";
    </script>
    <link rel="stylesheet" href="css/teacher_login.css" />
  </head>
  <body>
  <header>
        <div class="header">
        <ol> 
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
        </ol>
          <ul> 
            <li><a href="main.php">Home</a></li>
            <li class="active"><a href="login_main.php">Login</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
    </header>
    <form class="box" action="teacher_log.php" method="post">
    <img style="width: 100px;" src="https://i.pinimg.com/originals/19/46/9a/19469aed7f222d6009f48158a682bb9c.png">
      <h1>Teacher Login</h1>

      <input type="text" name="email" placeholder="Email_ID"  />
      <input type="password" name="password" placeholder="Password"  />
      <button class="submit-btn">Login</button>
      <!-- <input type="submit" value="Login" /> -->
      
      <?php if (isset($_GET['error'])) { ?>
        <p class="error"><?php echo $_GET['error']; ?></p>
      <?php } ?>

    </form>
    <div class="loginpage">
        <a href="login_main.php">Back to Login Page</a>
    </div>
  </body>
</html>
