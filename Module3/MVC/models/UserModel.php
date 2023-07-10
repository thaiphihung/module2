<?php
class User {
    //Phuong thuc lay tat ca du lieu
    public static function all(){
        global $conn;
        $sql = "SELECT * FROM `danhsachbenhnhan`";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $items = $stmt->fetchAll();
        return $items;
    } 
    // Phuong thuc phan trang
    public static function paginate( $limit = 20 ){
        $items = [];
        return $items;
    }
    // Lay chi tiet ban ghi
    public static function find( $id ){
        $item = null;
        return $item;
    }
    // Luu du lieu
    public static function save($data){

    }
    // Cap nhat du lieu
    public static function update($id,$data){

    }
    // Xoa 1 record
    public static function delete($id){

    }
}