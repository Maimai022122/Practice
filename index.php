<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
</head>
<body>
    <h1>掲示板</h1>
    <form action="post.php" method="POST">
        <input type="text" name="message" placeholder="メッセージを入力" required>
        <button type="submit">投稿</button>
    </form>

    <h2>投稿一覧</h2>
    <?php
        // 投稿データを読み込んで表示
        if (file_exists("data.txt")) {
            $lines = file("data.txt", FILE_IGNORE_NEW_LINES);
            foreach ($lines as $line) {
                echo "<p>" . htmlspecialchars($line, ENT_QUOTES, "UTF-8") . "</p>";
            }
        }
    ?>
</body>
</html>

