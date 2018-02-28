<?php

use App\Core\Token;

require __DIR__ . '/../app/init.php';

if (isPost() && isset($_POST['csrf_token']) && Token::check($_POST['csrf_token'])) {
    unset($_POST['csrf_token']);

    $data = $_POST;

    $data['created_at'] = getCreateTime();

    if ($message->save($data)) {
        echo json_encode($data);
    }

} else {
    die('not access.');
}