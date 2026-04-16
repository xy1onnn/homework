<?php
session_start();
// 清除所有 Session 變數
session_unset();
// 銷毀 Session
session_destroy();

// 登出後導回登入頁面
header("Location: index.php");
exit();
?>
