<?php
// 將 Cookie 的過期時間設定為過去的時間，瀏覽器就會自動刪除它
setcookie("user_id", "", time() - 3600, "/");

// 刪除後導回主頁
header("Location: dashboard.php");
exit();
?>
