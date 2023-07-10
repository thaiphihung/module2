<form action="index.php?controller=order&action=update&id=<?php echo $_GET['id']?>" method="post">
<div class="mb-3">
        <label class="form-label">Ngày đặt hàng</label>
        <input type="date" class="form-control" name="order_date" placeholder="<?php echo $row['order_date']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Số Lượng</label>
        <input type="text" class="form-control" name="quantity" placeholder="<?php echo $row['quantity']?>">
    </div>
    <label class="form-label">Khách Hàng</label>
    <select name="customer_id" class="form-control">
                <?php foreach ($customers as $customer) : ?>
                    <option value="<?php echo $customer['id']; ?>"><?php echo $customer['name']; ?></option>
                <?php endforeach; ?>
            </select>
    <div class="mb-3">
        <label class="form-label">Tổng Đơn</label>
        <input type="text" class="form-control" name="total" placeholder="<?php echo $row['total']?>">
    </div>
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Edit</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=product&action=index'">Cancel</button>
</form>        	