<table class = 'table'> 
    <tr class = 'table-active'>
        <th>ID</th>
        <th>Loại</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    <?php foreach ($items as $row) :?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['name']?></td>
        <td>
          <a href= "index.php?controller=category&action=getEdit&id=<?php echo $row['id']?>">Edit</a>
        </td>
        <td>
          <a style = 'color:red;' onclick = "return confirm('Are you sure?')";  href= "index.php?controller=category&action=delete&id=<?php echo $row['id']?>">Delete</a>
        </td>
        <td>
          <a href= "index.php?controller=category&action=getView&id=<?php echo $row['id']?>">View</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<form class="row g-3" action = "index.php?controller=category&action=getCreate" method = "POST">
  <div class="col-auto">
    <input type="submit" class="btn btn-primary mb-3" value = "Create">
  </div>
</form>
<?php // include_once 'View/Pagination/Pagination.php';?>