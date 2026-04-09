<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <title>森林野外求生冒險營報名</title>
    <style>
        body {
            background-color: Beige;
            font-family: "Microsoft JhengHei", sans-serif;
            line-height: 1.6;
            margin: 40px;
        }
        table {
            width: 90%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: white;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #ddd;
        }
        .notice {
            color: red;
            font-weight: bold;
        }
        .form-section {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

    <header style="text-align: center;">
        <h1>2026 森林野外求生冒險營</h1>
        <p><b>活動日期：2026年07月15日 (三) 至 07月17日 (五)</b></p>
        <img src="camp.jpg" width="30%" alt="森林求生營地">
    </header>

    <hr>

    <article>
        <p>歡迎來到冒險者的天堂！在這裡你將學習到 <b>野外取火</b>、<b>陷阱製作</b> 與 <b>求生方位辨識</b>。</p>
        <p class="notice">※ 注意：報名截止日期為 2026年06月30日，名額有限！</p>

        <h3>三天兩夜冒險時程表</h3>
        <table>
            <thead>
                <tr>
                    <th>日期</th>
                    <th>時間</th>
                    <th>活動名稱</th>
                    <th>課程細節</th>
                    <th>備註</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td rowspan="3">Day 1<br>07/15</td>
                    <td>09:00 - 12:00</td>
                    <td>叢林生存導論</td>
                    <td>環境評估與求生方位辨識實作</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13:30 - 16:30</td>
                    <td><i>基礎紮營實作</i></td>
                    <td>帳篷選址、防雨棚架設練習</td>
                    <td></td>
                </tr>
                <tr>
                    <td>19:00 - 21:00</td>
                    <td>星空定位</td>
                    <td>利用星座辨識北方與導航</td>
                    <td>需視天氣狀況</td>
                </tr>
                <tr>
                    <td rowspan="3">Day 2<br>07/16</td>
                    <td>08:30 - 12:00</td>
                    <td>野外取火術</td>
                    <td>鑽木取火、打火石使用技巧</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13:30 - 17:00</td>
                    <td>陷阱製作</td>
                    <td>繩結應用與小型求生陷阱原理</td>
                    <td>實務操作</td>
                </tr>
                <tr>
                    <td>19:00 - 20:30</td>
                    <td>營火談心</td>
                    <td>野外急救案例分享與應變</td>
                    <td></td>
                </tr>
                <tr>
                    <td rowspan="2">Day 3<br>07/17</td>
                    <td>09:00 - 12:00</td>
                    <td>全能求生競賽</td>
                    <td>綜合應用三天所學技能進行分組挑戰</td>
                    <td></td>
                </tr>
                <tr>
                    <td>13:30 - 15:00</td>
                    <td>無痕山林與拔營</td>
                    <td>環境復原、心得分享與頒發結業證書</td>
                    <td></td>
                </tr>
            </tbody>
        </table>

        <p>建議攜帶物品：</p>
        <ul>
            <li>個人急救藥品</li>
            <li>耐髒衣物</li>
            <li>防蚊液與手電筒</li>
            <li>健保卡</li>
        </ul>
    </article>

    <hr>

    <section class="form-section">
        <h2>報名表資訊</h2>
        <form action="process.php" method="POST">
            姓名：<input type="text" placeholder="您的姓名" name="nName" required><br><br>

            性別：
            <label><input type="radio" name="mGender" value="男"> 男</label>
            <label><input type="radio" name="mGender" value="女"> 女</label><br><br>

            居住城市：
            <select name="nCity[]">
                <option value="Taipei">台北市</option>
                <option value="NewTaipei">新北市</option>
                <option value="Keelung">基隆市</option>
                <option value="Taoyuan">桃園市</option>
                <option value="HsinchuC">新竹市</option>
                <option value="Hsinchu">新竹縣</option>
                <option value="Yilan">宜蘭縣</option>
                <option value="Miaoli">苗栗縣</option>
                <option value="Taichung" selected>台中市</option>
                <option value="Changhua">彰化縣</option>
                <option value="Nantou">南投縣</option>
                <option value="Yunlin">雲林縣</option>
                <option value="ChiayiC">嘉義市</option>
                <option value="Chiayi">嘉義縣</option>
                <option value="Tainan">台南市</option>
                <option value="Kaohsiung">高雄市</option>
                <option value="Pingtung">屏東縣</option>
                <option value="Hualien">花蓮縣</option>
                <option value="Taitung">台東縣</option>
                <option value="Penghu">澎湖縣</option>
                <option value="Kinmen">金門縣</option>
                <option value="Matsu">馬祖縣</option>
            </select>
            <br><br>

            感興趣的求生技能：
            <label><input type="checkbox" name="mInterest[]" value="取火"> 取火</label>
            <label><input type="checkbox" name="mInterest[]" value="方位"> 辨識方位</label>
            <label><input type="checkbox" name="mInterest[]" value="急救"> 急救</label>
            <br><br>

            聯絡 Email：<input type="email" name="mEmail" required><br><br>

            <input type="submit" value="送出報名">
            <input type="reset" value="重新填寫">
        </form>
    </section>

</body>
</html>