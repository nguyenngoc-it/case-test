<?php
require __DIR__."/vendor/autoload.php";

use App\Controller\Chanel\ChanelController;
$dbconnect= new \App\Model\DBConnect();
$controller= new ChanelController();
$page= isset($_REQUEST['page'])?$_REQUEST['page']:null;
include_once 'app/View/backend/layouts/header.php';
try {
    switch ($page){
        case 'create-product':
            $controller->createProduct();
            break;
        case 'delete-product':
            $controller->deleteProduct();
            break;
        case 'update-product':
            $controller->updateProduct();
            break;
        case 'channel-product':
            $controller->showAllproducts();
            break;
        case 'alaia-product':
            $controller->showAllAlaia();
            break;
        case 'burbery-product':
            $controller->showBurbery();
            break;
        case 'afnan-product':
            $controller->showAllAfnan();
            break;
        case 'calvin-product':
            $controller->showCalvin();
            break;
        default:
            $controller->showAllproducts();
    }
}catch (Exception $exception){
    $exception->getMessage();
}
include_once 'app/View/backend/layouts/footer.php';