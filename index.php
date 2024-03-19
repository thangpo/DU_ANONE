<?php
// require tất cả các file commons
require_once './commons/env.php';
require_once './commons/helper.php';
require_once './commons/connect-db.php';
//require tất cả các file trong controler và models
//.....
require_file(PATH_CONTROLLER);
require_file(PATH_MODEL);


// điều hướng   
$act = $_GET['act'] ?? '/';
match ($act) {
    '/' => index(),
    'user-detail' => userDetail($_GET['id']),
};

require_once './commons/disconnect-db.php';
