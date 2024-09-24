<!DOCTYPE html>
<html>
<head>
    <title>新しい問い合わせが登録されました</title>
</head>
<body>
    <h1>タイトル: {{ $contact->title }}</h1>
    <p>質問者: {{ $contact->name }}</p>
    <p>メッセージ: {{ $contact->body }}</p>
</body>
</html>
