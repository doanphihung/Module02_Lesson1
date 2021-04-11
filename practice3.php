<?php
$customerlist = array(
    "1" => array("ten" => "Doan Phi Hung",
        "ngaysinh" => "06-10-1997",
        "diachi" => "HN",
        "anh" => "hung111.jpg"),
    "2" => array("ten" => "Doan Phi Hung",
        "ngaysinh" => "06-10-1997",
        "diachi" => "HN",
        "anh" => "hung111.jpg"),
    "3" => array("ten" => "Doan Phi Hung",
        "ngaysinh" => "06-10-1997",
        "diachi" => "HN",
        "anh" => "hung111.jpg"),
    "4" => array("ten" => "Doan Phi Hung",
        "ngaysinh" => "06-10-1997",
        "diachi" => "HN",
        "anh" => "hung111.jpg"),
);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Hiển thị danh sách khách hàng</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse;
        text-align: center;
    }
</style>
<body>
    <table border="1">
        <caption><h1>Danh sách khách hàng</h1></caption>
        <tr>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php
        foreach($customerlist as $a => $va){
            echo "<tr>";
            echo "<td>".$va['ten']."</td>";
            echo "<td>".$va['ngaysinh']."</td>";
            echo "<td>".$va['diachi']."</td>";
            echo "<td><image src ='".$va['anh']."' width = '60px' height ='60px'/></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
