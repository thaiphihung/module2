<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">STT</th>
      <th scope="col">Tên Nhân Sự</th>
      <th scope="col">Vị Trí</th>
      <th scope="col">Chi Nhánh</th>
      <th scope="col">Tuổi</th>
      <th scope="col">Ngày Làm Việc</th>
      <th scope="col">Lương</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row"><?= $r['id'];?></th>
      <td><?= $r['name'];?></td>
      <td><?= $r['location'];?></td>
      <td><?= $r['branch'];?></td>
      <td><?= $r['age'];?></td>
      <td><?= $r['working_date'];?></td>
      <td><?= $r['wage'];?></td>
    </tr>
  </tbody>
</table>
<a type="button" href="index.php" class="btn btn-secondary">BACK</a>