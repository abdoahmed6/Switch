<?php
$bot_token = "توكن البوت الخاص بك هنا";
$chat_id = "@Switch_10";  // أو يمكن أن يكون معرف الدردشة الخاص بك
$file_path = "account-video1.mp4";  // مسار الفيديو المراد إرساله

$url = "https://api.telegram.org/bot$bot_token/sendVideo";

$post_fields = [
    'chat_id' => $chat_id,
    'video' => new CURLFile($file_path)
];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
$response = curl_exec($ch);
curl_close($ch);
?>
