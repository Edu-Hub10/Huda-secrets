<?php
// استقبال البيانات من النموذج
$fullname = $_POST['fullname'];
$user_email = $_POST['username'];
$user_password = $_POST['password'];

// حفظ البيانات في ملف نصي
$file = fopen("users.txt", "a");
fwrite($file, "Full Name: $fullname, Email: $user_email, Password: $user_password\n");
fclose($file);

// رسالة تأكيد التسجيل
echo "<h2 style='color: white; text-align: center;'>Registration Successful!</h2>";
echo "<p style='color: white; text-align: center;'>Thank you for registering, $fullname. <a href='index.html' style='color: #007BFF;'>Go back to the registration page</a></p>";
?>

