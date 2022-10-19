<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
    <link rel="stylesheet" href="../../content/css/product.css">
    <style>
        form {
            display: flex;
            flex-wrap: wrap;
            margin-right: 300px
        }

        .form-group {
            flex: 0 0 100%;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="row">
        <form action="index.php" method="POST">
            <div class="form-group">
                <label for="">Ten Loai Hang</label>
                <input type="text" name="loai_hang">
            </div>
            <div class="form-group">
                <button type="submit" name="btn_insert" class="btn">Add</button>
            </div>
        </form>
    </div>
    <div class="row">
        <a href="index.php?btn_list" class="btn">list</a>
    </div>
</body>

</html>