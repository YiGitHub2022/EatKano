<?php
$link = new mysqli('localhost', 'xingye', 'kano520xingye112', 'kano');
mysqli_set_charset($link, 'utf8');
if ($link->connect_error) {
    die("连接失败: " . $conn->connect_error);
}