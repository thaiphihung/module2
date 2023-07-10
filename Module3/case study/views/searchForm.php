<?php
$search = isset($_REQUEST['search']) ? $_REQUEST['search'] : '';
?>
<form action="index.php" method="get" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
    <input type="hidden" name="controller" value='<?php echo $controller; ?>'>
    <input type="hidden" name="action" value='search'>
    <div class="input-group">
        <input type="search" class="form-control bg-light border-0 small" placeholder="Search" name='search' value='<?= $search ?>'>
        <div class="input-group-append">
            <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                </svg>
            </button>
        </div>
    </div>
</form>