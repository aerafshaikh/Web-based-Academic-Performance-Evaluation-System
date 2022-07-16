<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>

    <style>

        body {
            background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),url(background.png);
            background-size: cover;
            
        }

        .login_page {
            background-color: rgba(232, 236, 232, 0.836);;
            position: absolute;
            top: 45%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 450px;
            height: 350px;
            border-radius: 10px;
        }

        .form {
            padding: 0 40px;
            box-sizing: border-box;

        }

        .Login_form {
            position: relative;
            margin: 30px auto;

        }

        .username input {
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            margin-bottom: 20px;
            margin-top: 10px;
        }



        .Password input {
            width: 100%;
            padding: 0 5px;
            height: 40px;
            font-size: 16px;
            margin-top: 10px;
        }

        .btn {
            margin-top: 25px;
            width: 100px;
            height: 30px;
            margin-left: 135px;
        }

        .btn:hover {
            background-color: antiquewhi    

        }
    </style>
</head>

<body>
    <div class="login_page">
        <h1 style="text-align: center;">Teacher Login</h2>
            <div class="form">
                <form class="Login_form">
                    <div class="username">
                        <label style="font-family: Sans-serif;">Username</label>
                        <input type="username" required>

                    </div>
                    <div class="Password">
                        <label style="font-family:Sans-serif; ">Password</label>
                        <input type="password" required>

                    </div>
                    <button class="btn">Login</button>

                </form>
            </div>

    </div>
</body>

</html>