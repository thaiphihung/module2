<?php
    // Ket noi voi database
    class Orderdetail {
        // lay ta ca du lieu
        public static function all(){
            global $conn;
            // $sql = "SELECT orderdetails.*, products.product_name AS tensp, orders.customer_id AS tenkh FROM orderdetails
            // JOIN products ON orderdetails.product_id = products.id
            // JOIN orders ON orderdetails.order_id = orders.id";

            $sql = "SELECT order_details.*, products.name AS tensp, orders.customer_id AS tenkh, customers.customer_name AS tenkhachhang
            FROM order_details
            JOIN products ON order_details.product_id = products.id
            JOIN orders ON order_details.order_id = orders.id
            JOIN customers ON orders.customer_id = customers.id";
    
            $stmt = $conn->query($sql);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $rows = $stmt->fetchAll(); 
            // Tra ve cho Model
            return $rows;
        }

        // lay chi tiet 1 du lieu
        public static function find($id) {
            global $conn;
            $sql = "SELECT order_details.*, products.product_name AS tensp, orders.customer_id AS tenkh, customers.customer_name AS tenkhachhang
                    FROM order_details
                    JOIN products ON order_details.product_id = products.id
                    JOIN orders ON order_details.order_id = orders.id
                    JOIN customers ON orders.customer_id = customers.id
                    WHERE orders.id = :id"; // Lọc theo ID của đơn hàng
        
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id', $id); // Gán giá trị cho tham số :id
            $stmt->execute();
        
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            return $row;
        }

        // Them moi du lieu
        public static function store($data){
           
            global $conn;
            $name = $data['order_id'];
            $sanpham = $data['product_id'];
            $status = $data['status'];
            $ship_date = $data['ship_date'];
         

$sql = "INSERT INTO `order_details`
(`order_id`, `product_id`, `status`, `ship_date`)
VALUES
('$name', '$sanpham', '$status', '$ship_date')";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;
        }
        
        // Cap nhat du lieu
        public static function update( $id, $data){
            global $conn;
            $name = $data['customer_id'];
            $sanpham = $data['product_id'];
            $status = $data['status'];
            $ship_date = $data['ship_date'];
            $sql = "UPDATE `order_details` SET `customer_id` = '$name', `product_id` = '$sanpham', `status` = '$status', `ship_date` = '$ship_date' WHERE `id` = $id";
            //Thuc hien truy van
            $conn->exec($sql);
            return true;

        }

        //Xoa du lieu
        public static function delete($id){
            global $conn;
            $sql = "DELETE FROM order_details WHERE id = $id";
            // Thuc thi SQL
            $conn->exec($sql);
            return true;
        }
    }