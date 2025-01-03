<?php
// الحصول على البريد الإلكتروني من الرابط
$email = isset($_GET['email']) ? $_GET['email'] : '';

// إذا لم يكن البريد الإلكتروني موجودًا، قم بتحويل المستخدم إلى صفحة التسجيل
if (empty($email)) {
    header("Location: signup.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مرحبًا بك في موقعنا!</title>
    <link rel="stylesheet" href="STYLES.css">
    <style>
        /* الخلفية */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #fafafa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: #262626;
        }

        /* الحاوية الرئيسية */
        .welcome-container {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
            padding: 40px;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        /* تأثير الظهور */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(-30px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* عنوان الصفحة */
        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            font-weight: 600;
            color: #3897f0; /* لون مشابه للإنستغرام */
            letter-spacing: 1px;
            text-shadow: 0px 2px 5px rgba(56, 151, 240, 0.5); /* إضافة تأثير اللمعة */
            transition: text-shadow 0.3s ease;
        }

        /* تغيير اللمعة عند مرور الماوس */
        h1:hover {
            text-shadow: 0px 4px 10px rgba(56, 151, 240, 0.8); /* زيادة اللمعة عند hover */
        }

        /* النص الرئيسي */
        p {
            font-size: 1.1em;
            margin-bottom: 20px;
            line-height: 1.6;
            color: #262626;
        }

        /* اسم المستخدم */
        .email {
            font-size: 1.4em;
            font-weight: bold;
            color: #3897f0; /* تغيير لون البريد الإلكتروني إلى الأزرق */
            margin-bottom: 30px;
            text-shadow: 0px 1px 4px rgba(56, 151, 240, 0.3); /* إضافة لمعة خفيفة */
        }

        /* الزر */
        .btn-home {
            display: inline-block;
            padding: 14px 40px;
            font-size: 1.1em;
            background-color: #3897f0;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            text-transform: uppercase;
            font-weight: 600;
            box-shadow: 0px 2px 8px rgba(56, 151, 240, 0.3); /* إضافة ظل خفيف للزر */
        }

        /* تأثير على الزر عند المرور عليه */
        .btn-home:hover {
            background-color: #4c97f7;
            transform: translateY(-4px);
            box-shadow: 0px 6px 15px rgba(56, 151, 240, 0.5); /* زيادة الظل عند hover */
        }

        .btn-home:active {
            transform: translateY(2px);
        }
        /* تأثير التلميعات على البريد الإلكتروني */
        .glowing-email {
            font-size: 1.2em; /* حجم الخط */
            font-weight: bold; /* جعل النص سميك */
            color: #3897f0; /* اللون الأزرق مثل لون البريد الإلكتروني في Instagram */
            text-align: center; /* محاذاة النص إلى الوسط */
            letter-spacing: 1px; /* المسافة بين الحروف */
            animation: glowing-email 1.5s ease-in-out infinite; /* إضافة تأثير التلميعات */
}

/* التأثير اللامع */
@keyframes glowing-email {
    0% {
        text-shadow: 0 0 5px #3897f0, 0 0 10px #3897f0, 0 0 15px #3897f0, 0 0 20px #3897f0, 0 0 25px #3897f0, 0 0 30px #3897f0, 0 0 35px #3897f0;
    }
    50% {
        text-shadow: 0 0 10px #3897f0, 0 0 20px #3897f0, 0 0 30px #3897f0, 0 0 40px #3897f0, 0 0 50px #3897f0, 0 0 60px #3897f0, 0 0 70px #3897f0;
    }
    100% {
        text-shadow: 0 0 5px #3897f0, 0 0 10px #3897f0, 0 0 15px #3897f0, 0 0 20px #3897f0, 0 0 25px #3897f0, 0 0 30px #3897f0, 0 0 35px #3897f0;
    }
}


    </style>
</head>
<body>
    <div class="welcome-container">
        <h1>مرحبًا بك في موقعنا!</h1>
        <p>تم إنشاء حسابك بنجاح.</p>
        
        <p class="email"><?php echo htmlspecialchars($email); ?></p>
        <a href="login.php" class="btn-home">الذهاب إلى صفحة تسجيل الدخول</a>
    </div>
</body>
</html>
