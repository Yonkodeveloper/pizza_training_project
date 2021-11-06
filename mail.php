<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $adress = $_POST['address'];
    $tel = $_POST['tel'];

    $content = $name.' оформил заказ на адрес '.$adress.' Его телефон: '.$tel;

    $succsess = mail('root.localhost', 'Заказ на сайте pizza',$content);

    if ($succsess) {
        http_response_code(200);
        echo 'OK';
    } else {
        http_response_code(403);
        echo 'НЕ ОТПРАВЛЕН';
    }

} else {
    http_response_code(403);
    echo 'Такой запрос не поддерживается';
}

