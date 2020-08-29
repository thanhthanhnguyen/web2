<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$conn = mysqli_connect('127.0.0.1','root','','qlnv') or die('Xin loi database khong ket noi duoc.');
$conn->query("SET NAMES 'utf8mb4'");
$conn->query("SET CHARACTER SET UTF8MB4");
$conn->query("SET SESSION collation = 'utf8mb4_unicode_ci'");
?>
</body>
</html>
