<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>2026 森林野外求生冒險營報名</title>
    <style>
        body { background-color: Beige; font-family: sans-serif; margin: 40px; }
        table { width: 100%; border-collapse: collapse; background: white; margin-bottom: 20px; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        .form-container { background: #f9f9f9; padding: 20px; border: 1px solid #ccc; }
    </style>
</head>
<body>
    <h1>2026 森林野外求生冒險營</h1>
    <p>活動日期：2026年07月15日至07月17日</p>
    
    <hr>
    
    <form action="result.php" method="POST" class="form-container">
        <h2>報名表資訊</h2>
        姓名：<input type="text" name="nName" required><br><br>
        
        性別：
        <input type="radio" name="mGender" value="男" id="m"><label for="m">男</label>
        <input type="radio" name="mGender" value="女" id="f"><label for="f">女</label><br><br>
        
        來自哪個城市：
        <select name="nCity">
            <option value="台中市">台中市</option>
            <option value="台北市">台北市</option>
            <option value="高雄市">高雄市</option>
            </select><br><br>
        
        感興趣的求生技能：
        <input type="checkbox" name="mInterest[]" value="取火">取火
        <input type="checkbox" name="mInterest[]" value="方位">方位
        <input type="checkbox" name="mInterest[]" value="急救">急救<br><br>
        
        聯絡 Email：<input type="email" name="mEmail" required><br><br>
        
        <input type="submit" value="送出報名">
    </form>
</body>
</html>
