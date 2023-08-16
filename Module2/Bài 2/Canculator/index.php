<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
     $num1 = $_POST['num1'] ?? '';
     $operator = $_POST['operator'] ?? '';
     $num2 = $_POST['num2'] ?? '';

     $result = '';
     if ($num2 == 0 && $operator === '/') {
         $error = 'Không thể chia cho 0';
     } elseif ($num1 == '' || $num2 == '') {
         $error = 'Vui lòng nhập đầy đủ các giá trị';
     } else {
         switch ($operator) {
             case '+':
                 $result = $num1 + $num2;
                 break;
             case '-':
                 $result = $num1 - $num2;
                 break;
             case '*':
                 $result = $num1 * $num2;
                 break;
             case '/':
                 $result = $num1 / $num2;
                 break;
             default:
                 $error = 'Phép toán không hợp lệ';
         }
     }
     
     ?>
     
     <form action="" method="POST">
         <label for="num1">Số thứ nhất:</label><br>
         <input type="number" id="num1" name="num1" value="<?= htmlspecialchars($num1) ?>" /><br>
         <label for="operator">Phép toán:</label><br>
         <select id="operator" name="operator">
             <option value="+" <?= $operator === '+' ? 'selected' : '' ?>>Cộng</option>
             <option value="-" <?= $operator === '-' ? 'selected' : '' ?>>Trừ</option>
             <option value="*" <?= $operator === '*' ? 'selected' : '' ?>>Nhân</option>
             <option value="/" <?= $operator === '/' ? 'selected' : '' ?>>Chia</option>
         </select><br>
         <label for="num2">Số thứ hai:</label><br>
         <input type="number" id="num2" name="num2" value="<?= htmlspecialchars($num2) ?>" /><br><br>
         <button type="submit">Tính toán</button><br><br>
         <label for="result">Kết quả:</label><br />
      <input type="number" id="result" name="result" value="<?php echo $result ?>" />
     </form>
     <?php if (isset($error)):  ?>
         <span style="color: red"><?= $error ?></span><br><br>
     <?php endif; ?>
</body>
</html>