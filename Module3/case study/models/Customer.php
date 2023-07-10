<?php
    // Ket noi voi database
    class Customer {
        // lay ta ca du lieu
        public static function paginate(){
            global $conn;
            $sql = "SELECT * FROM `customers`";
// xử lí tìm kiếm
// if( isset( $_GET["s"] )  ){
//     $s1= $_GET["s"];
//     $sql .= " WHERE customers.customer_name LIKE '%$s1%' OR customers.email LIKE '%$s1%' OR customers.address LIKE '%$s1%' OR customers.sdt LIKE '%$s1%'";
// }
// $sql .= " ORDER BY customers.id DESC";
// BAT DAU Phan trang
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$limit = 10;
// Tong so phan tu
$sql_count = $sql;
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$total_records = $stmt->fetchAll();
$total_records = count($total_records);
$total_pages = ceil($total_records / $limit);
// KET THUC Phan trang

 // start = (current_page - 1)*limit
 $start = ($current_page - 1) * $limit;
 $sql .= " LIMIT $start, $limit";

            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            $return = [
                'rows' => $rows,
                'total_pages' => $total_pages,
            ];
            // Tra ve cho Model
            return $return;
        }

        public static function all(){
            global $conn;
            $sql = "SELECT * FROM `customers`ORDER BY customers.id DESC";
            // xử lí tìm kiếm

            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id){
            global $conn;
            $sql = "SELECT * FROM `customers` WHERE id = $id";
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
            return $row;
        }

        // Them moi du lieu
        public static function store($data,){
            global $conn;
            $name = $data['name'];
            $age = $data['age'];
            $email = $data['email'];
            $address = $data['address'];
       
//             $ANH = '';
            
        
           
//         if (isset($_FILES['image']))
//         {
//             if (!$_FILES['image']['error'])
//             {
//               move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['name']);
//               $ANH = '/public/uploads/'.$_FILES['image']['name'];
//             }
// }

$sql = "INSERT INTO `customers`
(`name`, `email`, `address`, `age`)
VALUES
('$name', '$email', '$address', '$age')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data){
            global $conn;
            $name = $data['name'];
            $age = $data['age'];
            $email = $data['email'];
            $address = $data['address'];
            $sql = "UPDATE `customers` SET `name` = '$name', `address` = '$address', `email` = '$email', `age` = '$age' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM customers WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }