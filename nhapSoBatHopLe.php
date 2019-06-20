<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST">
    <div><input type="number" name="num1"></div>
    <div><input type="number" name="num2"></div>
    <div><input type="submit" value="Nhap"></div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    function checkNumber($num1, $num2)
    {
        if ($num2 == 0) {
            throw new Exception('khong hop le');
        }
        echo "Tong: " . ($num1 + $num2) . "</br>";
        echo "Hieu: " . ($num1 - $num2) . "</br>";
        echo "Tich: " . ($num1 * $num2) . "</br>";
        echo "Thuong: " . ($num1 / $num2);
    }
}
try {
    checkNumber($num1,$num2);

}catch (Exception $e){
    echo 'Message: '.$e->getMessage();
}
?>
</body>
</html>