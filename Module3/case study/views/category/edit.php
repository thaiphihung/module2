<form action="index.php?controller=category&action=update&id=<?php echo $row['id']?>" method="post">
    <div class="mb-3">
        <label class="form-label">Tên</label>
        <input type="text" class="form-control" name="name" placeholder="name" value="<?php echo $row['name']?>">
    </div>
    <button type="submit" class="btn btn-primary" onclick = "return confirm('Are you sure?')">Edit</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=category&action=index'">Cancel</button>
</form>        	