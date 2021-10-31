<?php
header('Content-type: text/html; charset=utf-8');

$name = $_GET['name'];

printf('Hello %s', htmlspecialchars($name, ENT_QUOTES, 'UTF-8'));