<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $message = $_POST["message"];
    file_put_contents("data.txt", $message . "\n", FILE_APPEND);
}
header("Location: index.php");
exit;
?>
