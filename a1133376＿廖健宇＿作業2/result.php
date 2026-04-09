<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>報名結果</title>
    <style>
        body { background-color: Beige; font-family: sans-serif; padding: 40px; }
        .result-box { background: white; padding: 20px; border: 1px solid #333; }
    </style>
</head>
<body>
    <div class="result-box">
        <h2>報名資料確認</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "姓名：" . htmlspecialchars($_POST['nName']) . "<br>";
            echo "性別：" . htmlspecialchars($_POST['mGender'] ?? '未填') . "<br>";
            echo "城市：" . htmlspecialchars($_POST['nCity']) . "<br>";
            
            echo "感興趣技能：";
            if (!empty($_POST['mInterest'])) {
                echo implode(", ", $_POST['mInterest']);
            } else {
                echo "未勾選";
            }
            echo "<br>";
            
            echo "Email：" . htmlspecialchars($_POST['mEmail']) . "<br>";
            echo "<hr>";
            echo "<p>資料已成功送出。</p>";
        } else {
            echo "非法存取頁面";
        }
        ?>
        <a href="login.php">返回登入頁</a>
    </div>
</body>
</html>
