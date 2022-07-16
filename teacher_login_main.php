<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher's Page</title>
    <link rel="stylesheet" href="css/teacher_login_main.css" />
</head>
<body>
<header>
        <div class="header">
        <ol> 
        <li>ACADEMIC PERFORMANCE EVALUATION SYSTEM</li>
        </ol>
          <ul> 
          <li><a href="teacher_login.php"><u>Signout</u></a></li>
          </ul>
        </div>
    </header>
	<div class="container">
  <img src="https://i.pinimg.com/originals/19/46/9a/19469aed7f222d6009f48158a682bb9c.png">
  <h2 style="text-align:center">WELCOME TEACHER</h2>
  <div class="t_lgn login">
            <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/512/476/476761.png">
            <button onclick="myOnClickFn()" > View Student's List </button>
        </div>
        <script>
            function myOnClickFn() {
                document.location.href = "view_students_list.html";
            }
        </script>

        <div class="s_lgn login">
            <img style="width: 100px;" src="https://cdn-icons-png.flaticon.com/512/4727/4727424.png">
            <button onclick="studentClickFn()"> Add Student Marks </button>
        </div>

        <script>
            function studentClickFn() {
                document.location.href = "add_student_marks.html";
            }
        </script>
    </div>

</body>
</html>