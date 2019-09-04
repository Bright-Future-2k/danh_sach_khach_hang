<!doctype html>
<html lang="en">
<style>
    table{
        border-collapse: collapse;
        width: 100px;
    }
    th, td{
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="0">
    <caption><h1>Danh sach khach hang</h1></caption>
    <tr>
        <th>STT</th>
        <th>name</th>
        <th>date of birth</th>
        <th>address</th>
        <th>picture</th>
    </tr>
</table>

<?php
$customerlist = array(
    "1" => array("name" => "Mai Van Hoan",
        "date of birth" => "1983-08-20",
        "address" => "ha noi",
        "picture" => "img.jpg"),
    "2" => array("name" => "Nguyen Van B",
        "date of birth" => "1983-08-19",
        "address" => "hai phong",
        "picture" => "img.jpg"),
    "3" => array("name" => "Mai Van Tam",
        "date of birth" => "1980-01-20",
        "address" => "Quang Ninh",
        "picture" => "img.jpg"),
    "4" => array("name" => "Mai The Hoan",
        "date of birth" => "1999-01-10",
        "address" => "Hue",
        "picture" => "img.jpg"),
);
?>

<?php
foreach ($customerlist as $key => $value){
    echo "<tr>";
    echo "<td>" . $key . "</td>";
    echo "<td>" . $key['name'] . "</td>";
    echo "<td>" . $key['date of birth'] . "</td>";
    echo "<td>" . $key['address'] . "</td>";
    echo "<tr><image src ='".$value['anh']."' width = '60px' height = '60px'/></td>";
}
?>

</body>
</html>