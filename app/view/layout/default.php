<?php
use Imy\Core\Router;
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Тестовое задание</title>

    <link rel="stylesheet" href="./css/main.css">
    <style>
.container{
    display: inline-flex;
    flex-direction: row;
    justify-content: space-around;
}
/*
#formmMess{
    flex: 1 1 auto;

}

#messagePrint{
    flex: 1 2 auto;
}
*/
    </style>
</head>
<body>
    <? include tpl(strtolower(Router::$route) . '.' . (!empty($tpl) ? $tpl : 'init')); ?>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./js/main.js"></script>
</body>
</html>
