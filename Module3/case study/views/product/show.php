
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<!-- <table class="table">
    <tr class="table-dark">
        <th scope="col">Ảnh</th>
    </tr>
    <tr>
        <td><img class="rounded float-start" style = 'width:120px;height:100px' src= "../<?php echo $row['anh'];?>"></td>
    <tr class="table-dark">
        <th scope="col">Mô tả</th>
    </tr>
    <tr>
        <td><?// echo $row['mota']; ?> </td>
    </tr>
</table> -->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-12">
                <h1 class = "text-center"><?php echo $row['name']?></h1>
                <blockquote class="blockquote"><?php echo $row['mota']?></blockquote>
                <div class="card" style="width: 60rem;">
                    <img src="<?php echo $row['image']?>" class="card-img-top" alt="...">
                    <div class="card-body" style="height: 5rem; text-align: center;">
                        <p class="card-text" ><?php echo $row['name']?></p>
                    </div>
                </div>
                <p><img src="<?php // echo $row['Img_patch']?>"></p>
                <p><?php // echo $row['Content']?></p>
                <p><?php // echo $row['Content']?></p>
                <blockquote class="blockquote">
                    Post by Admin ON <?php // echo $row['Create_date']?>
                </blockquote>
            </div>
        </div>
    </div>
</main>
</body>
</html>