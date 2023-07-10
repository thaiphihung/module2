<?php
// Ket noi voi database
class Personnel
{
    public static function paginate()
    {
        global $conn;
        $sql = "SELECT * FROM `nhansu`";
        if (isset($_GET["s"])) {
            $s = isset($_GET["s"]) ? $_GET["s"] : "";
            $conditions = [];

            if (!empty(trim($s))) {
                $conditions[] = "(nhansu.name LIKE '%$s%' OR nhansu.location LIKE '%$s%' OR nhansu.location LIKE '%$s%' OR nhansu.branch LIKE '%$s%' OR nhansu.working_date LIKE '%$s%')";
            }

            $conditionsString = implode(" OR ", $conditions);

            $sql = "SELECT * FROM `nhansu`";

            if (!empty($conditionsString)) {
                $sql .= " WHERE $conditionsString";
            }

            $sql .= " ORDER BY nhansu.id DESC";
        } else {
            $s = "";
            $sql = "SELECT * FROM `nhansu`";
        }
        // BẮT ĐẦU Phân trang
        $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $limit = 3;
        // Tổng số phần tử
        $sql_count = $sql;
        $stmt = $conn->query($sql_count);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $total_records = $stmt->fetchAll();
        $total_records = count($total_records);
        $total_pages = ceil($total_records / $limit);
        // KẾT THÚC Phân trang
        // start = (current_page - 1) * limit
        $start = ($current_page - 1) * $limit;
        $sql .= " LIMIT $start, $limit";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        $return = [
            'rows' => $rows,
            'total_pages' => $total_pages,
        ];
        // Trả về cho Model
        return $return;
    }

    // lay ta ca du lieu
    public static function all()
    {
        global $conn;
        $sql = "SELECT * FROM `nhansu`";


        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $rows = $stmt->fetchAll();
        // Tra ve cho Model
        return $rows;
    }

    // lay chi tiet 1 du lieu
    public static function find($id)
    {
        global $conn;
        $sql = "SELECT * FROM `nhansu` WHERE id = $id";
        $stmt = $conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $row = $stmt->fetch();
        return $row;
    }
    public static function create()
    {
        global $conn;
        $sql = "SELECT * FROM `nhansu`";
        $stmt = $conn->query($sql);
        $row = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $row;
    }

    // Them moi du lieu
    public static function store($data)
    {
        global $conn;
        $name = $data['name'];
        $location = $data['location'];
        $branch = $data['branch'];
        $age = $data['age'];
        $working_date = $data['working_date'];
        $wage = $data['wage'];

        $sql = "INSERT INTO `nhansu` 
            ( `name`, `location`, `branch`,`age`,`working_date`,`wage`) 
            VALUES 
            ('$name','$location','$branch','$age','$working_date','$wage')";
        //Thuc hien truy van
        $conn->exec($sql);
        return true;
    }

    // Cap nhat du lieu
    public static function update($id, $data)
    {
        global $conn;
        $name = $data['name'];
        $location = $data['location'];
        $branch = $data['branch'];
        $age = $data['age'];
        $working_date = $data['working_date'];
        $wage = $data['wage'];

        $sql = "UPDATE `nhansu` SET `name` = :name, `location` = :location, `branch` = :branch,`age` = :age,`working_date` = :working_date,`wage` = :wage WHERE `id` = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':location', $location);
        $stmt->bindParam(':branch', $branch);
        $stmt->bindParam(':age', $age);
        $stmt->bindParam(':working_date', $working_date);
        $stmt->bindParam(':wage', $wage);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return true;
    }

    //Xoa du lieu
    public static function delete($id)
    {
        global $conn;
        $sql = "DELETE FROM `nhansu` WHERE `id` = $id";
        // Thuc thi SQL
        $conn->exec($sql);
        return true;
    }
}