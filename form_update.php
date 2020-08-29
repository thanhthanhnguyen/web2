<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['btnLuu'])){
    include_once(__DIR__.'/dbconnect.php');
    $httt_ten = $_POST['txt_httt_ten'];
    $sql = <<<EOT
    UPDATE hinhthucthanhtoan
    SET httt_ten =N'$httt_ten'
    WHERE httt_ma = $idmuonsua;
EOT;
   mysqli_query($conn, $sql);
    
}
    
    ?>
    <h1>Sửa hình thức thanh toán<h1>
    <form name="frmSua" id="frmSua" method="post" action="">
    <table border="1">
        <tr>
        <td>Mã Thanh Toán</td>
        <td>Tên hình Thức Thanh Toán</td>
        <td>Hành động</td>
        </tr>
        <tr>
            <td>
                <input type="text" name="txt_httt_ten" id="txt_httt_ten" value="<?php echo $htttRow['httt_ma'];?>"/>
            </td>
            <td>
                <input type="submit" name="btnLuu" id="btnLuu" value="Lưu"/>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>