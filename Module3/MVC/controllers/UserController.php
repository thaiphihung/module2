<?php
    include_once 'models/UserModel.php';
    class UserController {
        // Lay toan bo du lieu
        public function index(){
            $items = User::all();
            include_once 'views/danhsachbenhnhan/index.php';
        }
         // Xem chi tiet
        public function show(){
            $id = $_REQUEST['id'];
            $item = User::find( $id );
            include_once 'views/danhsachbenhnhan/show.php';
        }
        // Hien thi form them moi
        public function create(){
            include_once 'views/danhsachbenhnhan/create.php';
        }

        // Xu ly them moi
        public function store(){
            $data = [
                'key' => $_REQUEST['value']
            ];
            User::save($data);

            // Chuyen huong ve danh sach
        }

        // Hien thi form sua
        public function edit(){
            include_once 'views/danhsachbenhnhan/edit.php';
        }

        // Xu ly sua
        public function update(){
            $id = $_REQUEST['id'];
            $data = [
                'key' => $_REQUEST['value']
            ];
            User::update($id,$data);

            // Chuyen huong ve danh sach
        }

        public function destroy(){
            $id = $_REQUEST['id'];
            User::delete($id);

            // Chuyen huong ve danh sach
        }
    }