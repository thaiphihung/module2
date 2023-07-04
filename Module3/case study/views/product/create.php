<form action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Tên Sản Phẩm</label>
        <input type="text" class="form-control" name="name" placeholder="">
    </div>
    <label class="form-label">Danh Mục</label>
    <select name="category_id" class="form-control">
                <?php foreach ($categories as $category) : ?>
                    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
                <?php endforeach; ?>
            </select>
    <div class="mb-3">
        <label class="form-label">Thương Hiệu</label>
        <input type="text" class="form-control" name="trademark" placeholder="">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name="price" placeholder="">
    </div>
    <div class="mb-3">
        <label class="form-label">image</label>
        <input type="file" class="form-control" name="image" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Create</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=staff&action=index'">Cancel</button>
</form>