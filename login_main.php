<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
        src="https://kit.fontawesome.com/4e7da428f4.js"
        crossorigin="anonymous"
      </script>
      <link rel="stylesheet" href="css/login_main.css" />
    <title>Login</title>
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
    <div class="container">
        <h2 style="text-align:center">LOGIN</h2>
        <div class="t_lgn login">
            <img style="width: 100px;" src="https://i.pinimg.com/originals/19/46/9a/19469aed7f222d6009f48158a682bb9c.png">
            <button onclick="myOnClickFn()"> Teacher Login </button>
        </div>

        <script>
            function myOnClickFn() {
                document.location.href = "teacher_login.php";
            }
        </script>

        <div class="s_lgn login">
            <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/512/201/201818.png">
            <button onclick="studentClickFn()"> Student Login </button>
        </div>

        <script>
            function studentClickFn() {
                document.location.href = "student_login_main.html   ";
            }
        </script>

        <div class="a_lgn login">
            <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png">
            <button onclick="adminClickFn()"> Admin Login </button>
        </div>
        <script>
            function adminClickFn() {
                document.location.href = "admin_login.php   ";
            }
        </script>
    </div>
</body>
</html>