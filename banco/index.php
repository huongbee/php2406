<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bàn cờ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="banco">
        <?php
            for($y = 1; $y<=8; $y++){
                for($x = 1; $x<=8; $x++){
                    // if(($y + $x) % 2 == 0){
                    //     echo '<div class="white"> </div>';
                    // }
                    if(($y%2==0 && $x%2==0) || ($y%2!=0 && $x%2!=0)){
                        echo '<div class="white"> </div>';
                    }
                    else echo '<div class="black"> </div>';
                }
            }
        
        ?>
    </div>
</body>
</html>