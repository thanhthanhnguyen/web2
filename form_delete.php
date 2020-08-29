<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include_once(__DIR__.'/dbconnect.php');
    $idmuonxoa = $_GET['idmuonxoa'];
    $sql = <<<EOT
    SELECT httt_ma AS MaThanhToan, httt_ten AS TenThanhToan FROM `hinhthucthanhtoan`
EOT;
    $result = mysqli_query($conn, $sql);
    $data =[];
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
    $data[] = array(
        'ma' => $row['MaThanhToan'],
        'ten' =>$row['TenThanhToan'],
    );
}
    
    ?>
    <h1>Xóa hình thức thanh toán<h1>
    <table border="1">
        <tr>
        <th>Mã TT</th>
        <th>Tên TT</th>
        <th>Hành Động</th>
        </tr>
        <?php foreach($data as $httt): ?>
        <tr>
            <td><?= $httt['ma'] ?></td>
            <td><?= $httt['ten'] ?></td>
            <td>
                <a href="xulyformdelete.php?idmuonxoa=<?= $httt['ma'] ?>">Xóa</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>