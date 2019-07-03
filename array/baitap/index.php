<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bai tap</title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lobster&display=swap"> -->
</head>
<body>
    <div class="container">
        <?php
            require_once 'ListProduct.php';
            foreach($list as $product):
        ?>
            <div class="product">
                <div class="image">
                    <img src="<?=$product['image']?>">
                </div>
                <div class="info">
                    <p><strong><?= $product['name']?></strong></p>
                    <ul>
                        <li>Tặng thêm 1 năm bảo hành</li>
                        <li>Tặng thêm 1 năm bảo hành</li>
                        <li class="promotion">Khuyến mãi</li>
                        <li>Tặng thêm 1 năm bảo hành</li>
                        <li>Tặng thêm 1 năm bảo hành</li>
                    </ul>
                </div>
                <div class="name-price">
                    <p class="name"> <?= $product['name']?> </p>
                    <p class="price"> <?=number_format($product['price'])?> ₫ </p>
                    <p class="price"> <?=number_format($product['price'], 4, ',', '.')?> ₫ </p>
                </div>
            </div>
        <?php endforeach?>
    </div>
</body>
</html>