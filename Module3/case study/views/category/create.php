<form action="index.php?controller=products&action=create" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Tên Sản Phẩm</label>
        <input type="text" class="form-control" name="name" placeholder="name">
    </div>
    <div class="mb-3">
        <label class="form-label">Mã Hàng</label>
        <input type="text" class="form-control" name="category_id" placeholder="category_id">
    </div>
    <div class="mb-3">
        <label class="form-label">Thương Hiệu</label>
        <input type="text" class="form-control" name="trademark" placeholder="trademark">
    </div>
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name="price" placeholder="price">
    </div>
    <div class="mb-3">
        <label class="form-label">image</label>
        <input type="file" class="form-control" name="img_patch" placeholder="image">
    </div>
    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Create</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=staff&action=index'">Cancel</button>
</form>