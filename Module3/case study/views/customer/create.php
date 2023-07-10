<form action="index.php?controller=customer&action=store" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Tên Khách Hàng</label>
        <input type="text" class="form-control" name="name" placeholder="">
    </div>
    <div class="mb-3">
        <label class="form-label">Tuổi</label>
        <input type="text" class="form-control" name="age" placeholder="">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name="email" placeholder="">
    </div>
    <div class="mb-3">
        <label class="form-label">Địa Chỉ</label>
        <input type="text" class="form-control" name="address" placeholder="">
    </div>
    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Create</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=customer&action=index'">Cancel</button>
</form>