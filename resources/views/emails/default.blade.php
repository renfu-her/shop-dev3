<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>聯絡我們</title>
</head>
<body>
    <h1>聯絡我們</h1>
    <p>姓名: {{ $name }}</p>
    <p>電子郵件: {{ $email }}</p>
    <p>主題: {{ $subject }}</p>
    <p>電話: {{ $phone }}</p>
    <p>訊息: {{ $content }}</p>
    <p>時間: {{ now() }}</p>
</body>
</html>