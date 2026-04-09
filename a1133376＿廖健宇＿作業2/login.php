<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>活動報名登入</title>
    <style>
        body { background-color: Beige; font-family: sans-serif; text-align: center; padding-top: 50px; }
        .login-box { display: inline-block; padding: 20px; border: 1px solid #ccc; background: white; }
        .error { color: red; margin-bottom: 10px; }
    </style>
</head>
<body>
    <div class="login-box">
        <h2>系統登入</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $username = $_POST['username'];
            $password = $_POST['password'];

            // 範例帳密：admin / 1234
            if ($username === "admin" && $password === "1234") {
                header("Location: index.php");
                exit;
            } else {
                echo "<p class='error'>登入失敗，請檢查帳號密碼</p>";
            }
        }
        ?>
        <form method="POST" action="">
            帳號：<input type="text" name="username" required><br><br>
            密碼：<input type="password" name="password" required><br><br>
            <input type="submit" value="登入">
        </form>
    </div>
</body>
</html>
