<form action="index.php?controller=product&action=store" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label">Tên Sản Phẩm</label>
            <input type="text" class="form-control" name="name" placeholder="">
            <?php if (isset($errors['name'])) : ?>
            <div class="text-danger"><?php echo $errors['name']; ?></div>
        <?php endif; ?>
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
            <?php if (isset($errors['trademark'])) : ?>
            <div class="text-danger"><?php echo $errors['trademark']; ?></div>
        <?php endif; ?>
        </div>
        <div class="mb-3">
            <label class="form-label">Giá</label>
            <?php if (isset($errors['price'])) : ?>
                <div class="text-danger"><?php echo $errors['price']; ?></div>
            <?php endif; ?>
            <input type="text" class="form-control" name="price" placeholder="">
        </div>
        <div class="mb-3">
            <label class="form-label">image</label>
            <input type="file" class="form-control" name="image" placeholder="">
        </div>
        <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Create</button>
        <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=product&action=index'">Cancel</button>
</form>