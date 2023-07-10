<form action="index.php?controller=category&action=store" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label class="form-label">Tên</label>
        <input type="text" class="form-control" name="name" placeholder="name">
    </div>
    <button type="submit" class="btn btn-primary" onclick="return confirm('Are you sure?')">Create</button>
    <button type="button" class="btn btn-primary ml-4" onclick="return window.location = 'index.php?controller=category&action=index'">Cancel</button>
</form>