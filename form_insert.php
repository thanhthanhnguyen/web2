<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Insert</title>
</head>
<body>
    <?php 
       
        if(isset($_POST['btnLuuDL'])){
            include_once(__DIR__.'/dbconnect.php');
            $httt_ten = $_POST['txtThemMoi'];
            $sql = "INSERT INTO `hinhthucthanhtoan`(httt_ten) VALUES('$httt_ten');";
            mysqli_query($conn,$sql);
        }
    ?>
        <form method="post" action="" name="frmThemMoi" id="frmThemMoi">
        <table>
        <tr>
        <td>Ten hinh thuc thanh toan</td>
        <td>
        <input type="text" name="txtThemMoi" id="txtThemMoi"/>
        </td>
        <td>
        <input type="submit" name="btnLuuDL" id="btnLuuDL" value="Them"/>
        </td>
        </tr>
        </table>
        </form>
</body>
</html>