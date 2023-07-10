<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Cập nhật thông tin nhân sự
        </div>
        <div class="card-body">
            <div class="col-12">
                <form method="post" action="index.php?action=update&id=<?= $r['id']; ?>">
                    <input type="hidden" name="id" value="<?php echo $r['id']; ?>" />
                    <div class="mb-3">
                        <label class="form-label">Tên</label>
                        <input type="text" value="<?php echo $r['name']; ?>" name="name" class="form-control">
                        <?php if (isset($errors['name'])) : ?>
                            <p class="text-danger"><?php echo $errors['name'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Vị trí</label>
                        <input type="text" value="<?php echo $r['location']; ?>" class="form-control" name="location">
                        <?php if (isset($errors['location'])) : ?>
                            <p class="text-danger"><?php echo $errors['location	'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chi Nhánh</label>
                        <input type="text" value="<?php echo $r['branch']; ?>" class="form-control" name="branch">
                        <?php if (isset($errors['branch'])) : ?>
                            <p class="text-danger"><?php echo $errors['branch'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tuổi</label>
                        <input type="text" value="<?php echo $r['age']; ?>" class="form-control" name="age">
                        <?php if (isset($errors['age'])) : ?>
                            <p class="text-danger"><?php echo $errors['age'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ngày làm việc</label>
                        <input type="date" value="<?php echo $r['working_date']; ?>" class="form-control" name="working_date">
                        <?php if (isset($errors['working_date'])) : ?>
                            <p class="text-danger"><?php echo $errors['working_date'] ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Lương</label>
                        <input type="text" value="<?php echo $r['wage']; ?>" class="form-control" name="wage">
                        <?php if (isset($errors['wage'])) : ?>
                            <p class="text-danger"><?php echo $errors['wage'] ?></p>
                        <?php endif; ?>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Sửa</button>
                    <a type="button" href="index.php" class="btn btn-secondary">Hủy</a>
                </form>
            </div>
        </div>
    </div>
</div>