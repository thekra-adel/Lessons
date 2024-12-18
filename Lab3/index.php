<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>إرسال البيانات باستخدام POST</h2>
    <form method="POST" action="process.php">
        <label for="name">اسمك:</label>
        <input type="text" id="name" name="name" required>
        <input type="submit" value="إرسال">
    </form>
    
    
    <h2>نموذج باستخدام GET</h2>
    <form method="get" action="process.php">
        <label for="username">اسم المستخدم:</label>
        <input type="text" id="username" name="username">
        <input type="submit" value="إرسال">
    </form>
    
    
    
</body>
</html>