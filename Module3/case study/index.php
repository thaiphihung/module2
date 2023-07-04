<?php 
    include_once 'include/header.php';
    include_once 'db.php';
    include_once 'controllers/CategoryController.php';
    $controller = isset($_GET['controller'])?$_GET['controller']: "staff";
    $action = isset($_GET['action'])?$_GET['action']: "index" ;
?>
<body id="page-top">
    <div id="wrapper">
        <?php include_once 'include/sidebar.php'?>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <?php include_once 'include/nav.php'?>
                <div class="container-fluid">
                    <?php 
                        include_once 'route.php';
                    ?>
                </div>
            </div>
            <?php include_once 'include/footer.php'?>
        </div>
    </div>