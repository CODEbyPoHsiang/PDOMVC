<?php 

$request = preg_replace("|/*(.+?)/*$|", "\\1", $_SERVER['PATH_INFO']);
$uri = explode('/', $request);

$uri0 = isset($uri[0]);
$uri1 = isset($uri[1]);

require_once "DB/Database.php"; //引入資料庫
require_once "controller/Member.php"; //控制器
require_once "model/MemberModel.php"; //Model 模型

$db = new Database();
$model = new MemberModel($db);
$controller = new Member($model);

if ($uri0 && $uri1 && $uri[0] === 'member' && $uri[1] === 'info') {         // Info//個人資料檢視
    $id = $_GET['id'];
    $controller->info($id);
} elseif ($uri0 && $uri1 && $uri[0] === 'member' && $uri[1] === 'edit') {     // Edit
    $id = $_GET['id'];
    $controller->edit($id);
} elseif ($uri0 && $uri1 && $uri[0] === 'member' && $uri[1] === 'delete') {   // Delete
    $id = $_GET['id'];
    $controller->delete($id);
} elseif ($uri0 && $uri1 && $uri[0] === 'member' && $uri[1] === 'create') {   // Create
    $controller->create();
} elseif ($uri[0] === 'member') {                                             // Index
    $controller->index();
} else {                                                                       // 404
    header('HTTP/1.1 404 Not Found');
    echo '<html><body><h1>404</h1><br><br><h2><center>
    您要查找的頁面不存在，請重新操作!</center></h2></body></html>';
}