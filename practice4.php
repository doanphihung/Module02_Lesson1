<?php
$dictionary = array("hello"=>"xin chào",
                    "how"=>"thế nào",
                    "book"=>"quyển vở",
                    "computer"=>"máy tính");
$flag = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Thực hành] Ứng dụng Từ điển đơn giản</title>
    <style>
        input[type=text] {
            width: 300px;
            font-size: 16px;
            border: 2px solid #ccc;
            border-radius: 4px;
            padding: 12px 10px 12px 10px;
        }
        #submit {
            border-radius: 2px;
            padding: 10px 32px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <h2>Từ Điển Anh - Việt</h2>
<form method="post" action="">
    <input type="text" name="search" placeholder="Nhập từ cần tìm"/>
    <input type = "submit" id = "submit" value = "Tìm"/>
</form>
<?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchword = $_POST["search"];
    foreach($dictionary as $word => $description) {
        if($word == $searchword){
            echo "Từ: " . $word . ". <br/>Nghĩa của từ: " . $description;
            echo "<br/>";
            $flag = 1;
        }
    }
    if($flag == 0){
        echo "<h1 style= 'color:pink' >Khong tim thay </h1>";
    }
} ?>
</body>
</html>
