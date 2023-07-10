<form action="index.php?controller=customer&action=update&id=<?php echo $row['id']?>" method="post">
    <div class="mb-3">
        <label class="form-label">Tên Khách Hàng</label>
        <input type="text" class="form-control" name = "name" placeholder = "<?php echo $row['name']?>" value = "<?php echo $row['name']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Tuổi</label>
        <input type="text" class="form-control" name = "age" placeholder = "<?php echo $row['age']?>" value = "<?php echo $row['age']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="text" class="form-control" name = "email" placeholder = "<?php echo $row['email']?>" value = "<?php echo $row['email']?>">
    </div>
    <div class="mb-3">
        <label class="form-label">Địa Chỉ</label>
        <input type="text" class="form-control" name = "address" placeholder = "<?php echo $row['address']?>" value = "<?php echo $row['address']?>">
    </div>
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Edit</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=customer&action=index'">Cancel</button>
</form>        	