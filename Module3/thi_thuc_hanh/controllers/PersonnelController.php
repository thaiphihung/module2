<?php
require_once 'models/Personnel.php';
class PersonnelController
{
    public function index()
    {   $items = Personnel::all();
        $return = Personnel::paginate();
        $items = $return['rows'];
        $total_pages = $return['total_pages'];
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        // Truyền dữ liệu xuống view
        require_once 'views/personnels/index.php';
    }


    // Hien thi form them moi
    public function create()
    {
        Personnel::create();
        require_once 'views/personnels/create.php';
    }
    // Xu ly them moi
    public function store()
    {
        $errors = array();
        // $data = array();

        // Lấy dữ liệu
        $name = isset($_POST['name']) ? $_POST['name'] : '';
        if (empty($name)) {
            $errors['name'] = 'Bạn chưa nhập tên';
        }
        $location = isset($_POST['location']) ? $_POST['location'] : '';
        if (empty($location)) {
            $errors['location'] = 'Bạn chưa nhập vị trí';
        }
        $branch = isset($_POST['branch']) ? $_POST['branch'] : '';
        if (empty($branch)) {
            $errors['branch'] = 'Bạn chưa nhập chi nhánh';
        }
        $age = isset($_POST['age']) ? $_POST['age'] : '';
        if (empty($age)) {
            $errors['age'] = 'Bạn chưa nhập age';
        }
        $working_date = isset($_POST['working_date']) ? $_POST['working_date'] : '';
        if (empty($working_date)) {
            $errors['working_date'] = 'Bạn chưa nhập ngay lam viec';
        }
        $wage = isset($_POST['wage']) ? $_POST['wage'] : '';
        if (empty($wage)) {
            $errors['wage'] = 'Bạn chưa nhập wage';
        }

        if (count($errors) == 0) {
            // Goi model
            Personnel::store($_POST);
            // Chuyen huong ve trang danh sach
            header("Location: index.php?controller=personnel&action=index");
        } else {
            require_once 'views/personnels/create.php';
        }
    }
    // Hien thi form chinh sua
    public function edit()
    {
        $id = $_GET['id'];
        $r = Personnel::find($id);
        // Truyen xuong view
        require_once 'views/personnels/edit.php';
    }
    // Xu ly chinh sua
    public function update()
    {
        $id = $_GET['id'];
        Personnel::update($id, $_POST);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=personnel&action=index");
    }

    // Xoa
    public function destroy()
    {
        $id = $_GET['id'];
        Personnel::delete($id);
        // Chuyen huong ve trang danh sach
        header("Location: index.php?controller=personnel&action=index");
    }
    // Xem chi tiet
    public function show()
    {
        $id = $_GET['id'];
        $r = Personnel::find($id);

        // Truyen xuong view
        require_once 'views/personnels/show.php';
    }
}