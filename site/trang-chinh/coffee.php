<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .coffee-container {
            width: 100%;
            display: flex;
        }

        .coffee-container .cate-wrap {
            padding: 24px;
            max-width: 20%;
            flex: 0 0 30%;
        }

        .coffee-container .cate-wrap ul {
            width: 100%;
        }

        .coffee-container .cate-wrap ul a {
            display: block;
            width: 100%;
            font-size: 18px;
            pointer-events: all;
        }

        .coffee-container .content-wrap {
            max-width: 80%;
            flex: 0 0 70%;
        }
    </style>
</head>

<body>
    <div class="coffee-container">
        <div class="cate-wrap">
            <div class="row">
                <h3 class="title">
                    Categories
                </h3>
            </div>
            <div class="row">
                <ul>
                    <li><a href="index.php?coffee">All</a></li>
                    <?php
                    require '../../dao/loai.php';
                    $loais = loai_select_all();
                    foreach ($loais as $loai) {
                        extract($loai)
                    ?>
                        <li><a href="index.php?coffee&ma_loai=<?= $ma_loai ?>"><?= $ten_loai ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="content-wrap">
            <div class="row">
                <?php require '../hang-hoa/liet-ke.php' ?>
            </div>
        </div>
    </div>
</body>

</html>