<?php
session_start();


if (!isset($_SESSION['user_id']) || !isset($_SESSION['role'])) {
    // 若未登入，強制導回登入頁
    header("Location: index.php");
    exit();
}

$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>系統主頁</title>
</head>
<body>
    <h2>歡迎登入，<?php echo $_SESSION['user_id']; ?>！</h2>
    <p>您的目前角色權限為：<strong><?php echo $role; ?></strong></p>

    <hr>
    <h3>Session 權限控制測</h3>
    <?php
        // 根據角色顯示不同內容
        if ($role == '管理者') {
            echo "<p style='color:blue;'>這是只有【管理者】看得到的系統後台設定區塊。</p>";
        } elseif ($role == '教師') {
            echo "<p style='color:green;'>這是只有【教師】看得到的學生成績管理區塊。</p>";
        } elseif ($role == '學生') {
            echo "<p style='color:orange;'>這是只有【學生】看得到的課表與作業繳交區塊。</p>";
        }
    ?>

    <hr>
    <h3>Cookie 狀態與操作</h3>
    <?php
        if (isset($_COOKIE['user_id'])) {
            echo "<p>目前 Cookie 中儲存的 ID 為：<b>" . $_COOKIE['user_id'] . "</b></p>";
        } else {
            echo "<p>目前沒有找到 Cookie。</p>";
        }
    ?>
    <form action="delete_cookie.php" method="POST" style="display:inline;">
        <input type="submit" value="刪除 Cookie">
    </form>

    <hr>
    <form action="logout.php" method="POST" style="display:inline;">
        <input type="submit" value="登出系統 (清除 Session)">
    </form>

</body>
</html>
