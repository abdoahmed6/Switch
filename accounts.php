<?php
// استيراد بيانات الحسابات من ملف JSON
$accounts = json_decode(file_get_contents('accounts.json'), true);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>اسوتش</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="dark-mode">
    <header>
        <div class="logo">
            <h1>اسوتش <span>Switch</span></h1>
            <button class="theme-toggle">تبديل الوضع</button>
        </div>
    </header>
    
    <section class="show-accounts">
        <button class="show-btn" onclick="toggleAccounts()">عرض الحسابات</button>
    </section>

    <section class="accounts" id="accounts-list" style="display: none;">
        <?php foreach($accounts as $account): ?>
            <div class="account">
                <!-- عرض صورة الحساب -->
                <img src="<?php echo $account['image']; ?>" alt="صورة الحساب" class="account-image">
                <video controls autoplay loop muted class="account-video">
                    <source src="<?php echo $account['video']; ?>" type="video/mp4">
                    متصفحك لا يدعم تشغيل الفيديو.
                </video>
                <h3><?php echo $account['name']; ?></h3>
                <p>السعر: <?php echo $account['price']; ?></p>
                <button class="buy-btn">شراء</button>
            </div>
        <?php endforeach; ?>
    </section>

    <section class="charge">
        <button class="charge-btn">
            <img src="coin-icon.png" alt="شحن الكوين" class="coin-icon">
            شحن الكوين
        </button>
    </section>

    <footer>
        <p>&copy; 2024 اسوتش</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>
