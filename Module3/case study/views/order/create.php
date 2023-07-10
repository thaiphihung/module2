<form action="index.php?controller=order&action=store" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Ngày đặt hàng</label>
        <input type="date" class="form-control" name="order_date" placeholder="">
    </div>
    <div class="mb-3">
        <label class="form-label">Số Lượng</label>
        <input type="text" class="form-control" name="quantity" placeholder="">
    </div>
    <label class="form-label">Khách Hàng</label>
    <select name="customer_id" class="form-control">
                <?php foreach ($customers as $customer) : ?>
                    <option value="<?php echo $customer['id']; ?>"><?php echo $customer['name']; ?></option>
                <?php endforeach; ?>
            </select>
    <div class="mb-3">
        <label class="form-label">Tổng Đơn</label>
        <input type="text" class="form-control" name="total" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Create</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=product&action=index'">Cancel</button>
</form>