<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./styles/login.css">
</head>

<body>
    <main>

        <div class="login-box-container">

            <div class="form-header">
                <div class="iau-logo-container">
                    <img class="iau-logo" src="./images/graduation.webp" alt="iau-logo">
                </div>

                <div>
                    <p class="form-header-p">ورود به سامانه</p>
                </div>
            </div>

            <form class="login-form" action="index.php" method="post">
                <div class="username-input-c">
                    <label for="username">
                        نام کاربری
                    </label>

                    <input type="text" name="username" id="username" required maxlength="15" pattern="\d{5,15}" placeholder="کد پرسنلی" >
                </div>

                <div class="password-input-c">
                    <label for="password">
                        رمز عبور
                    </label>

                    <input type="password" name="password" id="password" required minlength="8" maxlength="15" pattern="\d{5,15}" placeholder="کد ملی">
                </div>

                <div class="submit-button-c">
                    <button name="login" value="Login" type="submit">ورود</button>
                </div>
            </form>

        </div>

    </main>
</body>

</html>

<?php
    // echo"hello world!";

?>