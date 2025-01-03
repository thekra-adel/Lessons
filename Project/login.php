<?php
//  تضمين ملف الاتصال

require 'pdo.php';

// التحقق من البيانات المدخلة
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // التحقق من أن البريد الإلكتروني صالح
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "البريد الإلكتروني غير صالح!";
    }

    // إذا كانت المدخلات صحيحة
    if (!isset($error)) {
        // التحقق من وجود المستخدم
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // تسجيل الدخول بنجاح
            $success = "تم تسجيل الدخول بنجاح!";
            // يمكنك هنا تحويل المستخدم إلى صفحة أخرى بعد تسجيل الدخول
        } else {
            $error = "البريد الإلكتروني أو كلمة المرور غير صحيحة!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل الدخول</title>
    <link rel="stylesheet" href="STYLES.css">
</head>
<body>
    <div class="form-container">
        <h2>تسجيل الدخول</h2>
        <?php if (isset($error)) { echo "<p class='error'>$error</p>"; } ?>
        <?php if (isset($success)) { echo "<p class='success'>$success</p>"; } ?>

        <form method="POST" action="" id="loginForm">
            <label for="email">البريد الإلكتروني</label>
            <input type="email" id="email" name="email" required>

            <label for="password">كلمة المرور</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">تسجيل الدخول</button>
        </form>

        <p>لا تمتلك حساب؟ <a href="signup.php">إنشاء حساب جديد</a></p>
    </div>

    <script src="script.js"></script>
</body>
</html>
