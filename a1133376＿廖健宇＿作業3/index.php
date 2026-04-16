<?php
session_start();

// 預設的三種角色帳號密碼 
$users = [
    'student123' => ['password' => 'pw123', 'role' => '學生'],
    'teacher123' => ['password' => 'pw123', 'role' => '教師'],
    'admin123'   => ['password' => 'pw123', 'role' => '管理者']
];

$error_msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    // 驗證帳號密碼
    if (isset($users[$user_id]) && $users[$user_id]['password'] == $password) {
        // 1. 設定 Session (儲存角色與ID)
        $_SESSION['user_id'] = $user_id;
        $_SESSION['role'] = $users[$user_id]['role'];
        
        // 2. 設定 Cookie (儲存使用者 ID，設定存活時間為 1 小時)
        setcookie("user_id", $user_id, time() + 3600, "/");
        
        // 登入成功，導向主頁
        header("Location: dashboard.php");
        exit();
    } else {
        $error_msg = "帳號或密碼錯誤！";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>系統登入</title>
</head>
<body>
    <h2>網頁程式設計 - 作業3 登入</h2>
    <p>測試帳號: student123, teacher123, admin123 (密碼皆為 pw123)</p>
    
    <span style="color:red;"><?php echo $error_msg; ?></span>
    
    <form method="POST" action="index.php">
        使用者 ID: <input type="text" name="user_id" required><br><br>
        密碼: <input type="password" name="password" required><br><br>
        <input type="submit" value="登入">
    </form>
</body>
</html>
