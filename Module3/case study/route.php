
<?php
// Ket noi voi DB
require_once 'db.php';
// Client gui yeu cau den  ProductController, toi PT index, de lay toan bo du lieu ra

/*
    index.php?controller=product&action=index
    index.php?controller=product&action=create
    index.php?controller=product&action=edit&id=5
    index.php?controller=product&action=show&id=5

    index.php?controller=customer&action=index
    */
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller = isset($_GET['controller']) ? $_GET['controller'] : 'customer';
switch ($controller) {
    case 'category':
        require_once 'controllers/CategoryController.php';
        $objController = new CategoryController();
        break;
    case 'product':
        require_once 'controllers/ProductController.php';
        $objController = new ProductController();
        break;
    case 'customer':
        require_once 'controllers/CustomerController.php';
        $objController = new CustomerController();
        break;
    case 'order':
        require_once 'controllers/OrderController.php';
        $objController = new OrderController();
        break;
}
if (!empty($objController)) {
    switch ($action) {
        case 'index':
            $objController->index();
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
        case 'show':
            $objController->show();
            break;
        case 'destroy':
            $objController->destroy();
            break;
        case 'search':
            $objController->search();
            break;
        default:
            # code...
            break;
    }
}
?>
