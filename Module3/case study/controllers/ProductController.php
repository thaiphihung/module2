<?php

use Controller\Controller;

    require_once 'models/Product.php';
    require_once 'models/Category.php';
    require_once 'controllers/Controller.php';

    class ProductController extends Controller {
        // Hien thi danh sach records => table
        public function index(){
        $return = Product::paginate();   
        $items = $return['rows'];
        $total_pages = $return['total_pages'];
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $successMessage = '';

        if (isset($_GET['success']) && $_GET['success'] == 1) {
            $successMessage = 'Thêm thành công!';
        }

        if (isset($_GET['delete_success']) && $_GET['delete_success'] == 1) {
            $successMessage = 'Xóa thành công!';
        }
        if (isset($_GET['success']) && $_GET['success'] == 2) {
            $successMessage = 'Cập nhật thành công!';
        }
        // Truyen data xuong view
        require_once 'views/product/index.php';
    
    }
        // Hien thi form them moi
        public function create(){
            $categories = Category::all();
            require_once 'views/product/create.php';
        }
        public function store() {
            $error = array();
            // Goi model
            $data = $_POST;
            if (Product::store($data)) {
                // Chuyen huong ve trang danh sach
                $this->redirect("index.php?controller=product&action=index&success=1");
            } else {
                // Truyen loi xuong view
                require_once 'views/product/create.php';
            }
        }
        
        
        // Hien thi form chinh sua
        public function edit(){
            $id = $_GET['id'];
            $row = Product::find($id);
            $categories = Category::all();
            // Truyen xuong view
            require_once 'views/product/edit.php';
        }
    
        // Xu ly chinh sua
        public function update(){
            $id = $_GET['id'];
            $data = $_POST;
            print_r($data);
            if (Product::update($id, $data)) {
                // Chuyen huong ve trang danh sach
                $redirectUrl = "index.php?controller=product&action=index&success=2";
                echo "<script>window.location.href='$redirectUrl';</script>";
                exit();
            } else {
                // Truyen loi xuong view
                $row = Product::find($id);
                require_once 'views/product/edit.php';
            }
        }

        // Xoa
        public function destroy(){
            $id = $_GET['id'];
            Product::delete($id);
            // Chuyen huong ve trang danh sach
            $this->redirect("index.php?controller=product&action=index");
        }
        // Xem chi tiet
        public function show(){
            $id = $_GET['id'];
            $row = Product::find($id);

            // Truyen xuong view
            require_once 'views/product/show.php';
        }
    }