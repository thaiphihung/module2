</form>
<table class = 'table'> 
    <tr class = 'table-active'>
        <th>ID</th>
        <th>Ảnh</th>
        <th>Tên Sản Phẩm</th>
        <th>Mã Hàng</th>
        <th>Thương Hiệu</th>
        <th>Giá</th>
    </tr>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['image']?></td>
        <td><?php echo $row['name']?></td>
        <td><?php echo $row['category_id']?></td>
        <td><?php echo $row['trademark']?></td>
        <td><?php echo $row['price']?></td>
        <td>
            <a href= "index.php?controller=staff&action=getEdit&ID=<?php echo $row['ID']?>">Edit</a>
            <a style = 'color:red;' onclick = "return confirm('Are you sure?')";  href= "index.php?controller=staff&action=deleteID&ID=<?php echo $row['ID']?>">Delete</a>
            <!-- <a href= "index.php?action=getView&ID=<?php echo $row['ID']?>">View</a> -->
        </td>
    </tr>
</table>