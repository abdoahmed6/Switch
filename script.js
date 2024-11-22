// التبديل بين الوضع المظلم والفاتح
document.querySelector('.theme-toggle').addEventListener('click', function() {
    document.body.classList.toggle('dark-mode');
    document.body.classList.toggle('light-mode');
});

// إظهار أو إخفاء الحسابات
function toggleAccounts() {
    const accountsList = document.getElementById('accounts-list');
    accountsList.style.display = (accountsList.style.display === 'none' || accountsList.style.display === '') ? 'block' : 'none';
}

// وظيفة زر الشراء
function buyAccount(video) {
    // توجيه المستخدم إلى قناة التليجرام الخاصة بك
    window.open('https://t.me/Switch_10', '_blank'); // رابط تليجرام الخاص بك

    // إرسال الفيديو إلى تليجرام عبر الملف PHP
    fetch('send-video.php', {
        method: 'POST',
        body: new FormData(),
    })
    .then(response => response.json())
    .then(data => {
        alert('تم إرسال الفيديو إلى تليجرام!');
    })
    .catch(error => {
        alert('حدث خطأ أثناء إرسال الفيديو');
    });
}
