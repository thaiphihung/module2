<?php
include_once 'hellpers.php';
include_once 'db.php';
// Order
/*
UserController
    index  => GET   => index.php?controller=user&action=index
    show   => GET   => index.php?controller=user&action=show&id=1  
    create => GET   => index.php?controller=user&action=create  
    store  => POST  => index.php?controller=user&action=store  
    edit   => GET   => index.php?controller=user&action=edit&id=1  
    update => POST  => index.php?controller=user&action=update&id=1  
    destroy => GET  => index.php?controller=user&action=destroy&id=1  
ProductController
    index  => GET => index.php?controller=product&action=index
    show   => GET => index.php?controller=product&action=show&id=1
    create => GET => index.php?controller=product&action=create
    store  => POST => index.php?controller=product&action=store
    edit   => GET  => index.php?controller=product&action=edit&id=1
    update => POST => index.php?controller=product&action=update&id=1
    destroy => GET => index.php?controller=product&action=destroy&id=1
OrderController
    index  => GET  => index.php?controller=order&action=index
    show   => GET  => index.php?controller=order&action=show&id=1
    create => GET  => index.php?controller=order&action=create
    store  => POST => index.php?controller=order&action=store
    edit   => GET  => index.php?controller=order&action=edit&id=1
    update => POST => index.php?controller=order&action=update&id=1
    destroy => GET => index.php?controller=order&action=destroy&id=1
*/

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';
$controller = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : 'user';
$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : 'index';

switch ($controller) {
    case 'user':
        include_once 'controllers/UserController.php';
        $objController = new UserController();
        break;
    case 'product':
        include_once 'controllers/ProductController.php';
        $objController = new ProductController();
        break;
    case 'order':
        include_once 'controllers/OrderController.php';
        $objController = new OrderController();
        break;
    default:
        include_once 'controllers/UserController.php';
        $objController = new UserController();
        break;
}

switch ($action) {
    case 'index':
        $objController->index();
        break;
    case 'show':
        $objController->show();
        break;
    case 'create':
        $objController->create();
        break;
    case 'store':
        $objController->store();
        break;
    case 'edit':
        $objController->edit();
        break;
    case 'update':
        $objController->update();
        break;
    case 'destroy':
        $objController->destroy();
        break;
    default:
        # code...
        break;
}

echo '<pre>';
print_r($objController);
echo '</pre>';