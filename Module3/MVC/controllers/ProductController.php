<?php
    include_once 'models/ProductModel.php';
class ProductController{
    public function index(){
        $items = Product::all();
        include_once 'views/products/index.php';
    }
    public function show(){
        $id = $_REQUEST['id'];
        $item = Product::find( $id );
        include_once 'views/products/show.php';
    }
    public function create(){
        include_once 'views/products/create.php';
    }
    public function store(){
        $data = [
            'key' => $_REQUEST['value']
        ];
        Product::save($data);

        // Chuyen huong ve danh sach
    }
    public function edit(){
        include_once 'views/products/edit.php';
    }
    public function update(){
        $id = $_REQUEST['id'];
        $data = [
            'key' => $_REQUEST['value']
        ];
        Product::update($id,$data);

        // Chuyen huong ve danh sach
    }
    
    public function destroy(){
        $id = $_REQUEST['id'];
        Product::delete($id);

        // Chuyen huong ve danh sach
    }
}