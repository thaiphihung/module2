<form action="index.php?controller=product&action=update&id=<?php echo $row['id']?>" method="post">
    <div class="mb-3">
        <label class="form-label">Tên Sản Phẩm</label>
        <input type="text" class="form-control" name = "name" placeholder = "<?php echo $row['name']?>" value = "<?php echo $row['name']?>">
    </div>
    <label class="form-label">Danh Mục</label>
    <select name="category_id" class="form-control">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>
            </select>
    <div class="mb-3">
        <label class="form-label">Thương Hiệu</label>
        <input type="text" class="form-control" name = "trademark" placeholder = "<?php echo $row['trademark']?>" value = "<?php echo $row['trademark']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name = "price" placeholder = "<?php echo $row['price']?>" value = "<?php echo $row['price']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Ảnh</label>
        <input type="file" class="form-control" name = "image" placeholder = "<?php echo $row['image']?>" value = "<?php echo $row['image']?>">
    </div>
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Edit</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=product&action=index'">Cancel</button>
</form>        	