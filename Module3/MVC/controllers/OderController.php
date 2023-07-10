<?php
include_once 'models/OrderModel.php';
class OrderController{
    public function index(){
        $items = Order::all();
        include_once 'views/orders/index.php';

    }
    public function show(){
        $id = $_REQUEST['id'];
        $item = Order::find( $id );
        include_once 'views/orders/show.php';
    }
    public function create(){
        include_once 'views/orders/create.php';
    }
    public function store(){
        $data = [
            'key' => $_REQUEST['value']
        ];
        Order::save($data);

        // Chuyen huong ve danh sach
    }
    public function edit(){
        include_once 'views/orders/edit.php';

    }
    public function updade(){
        $id = $_REQUEST['id'];
        $data = [
            'key' => $_REQUEST['value']
        ];
        Order::update($id,$data);

        // Chuyen huong ve danh sach
    }
    public function destroy(){
        $id = $_REQUEST['id'];
        Product::delete($id);
    }
}