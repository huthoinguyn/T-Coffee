<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            display: flex;
            flex-wrap: wrap;
        }

        .form-group {
            flex: 0 0 100%;
            max-width: 100%;
        }
    </style>
</head>

<body>
    <div class="row">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Ma KH</label>
                <input type="text" name="ma_kh">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="ho_ten">
            </div>
            <div class="form-group">
                <label for="">MK</label>
                <input type="text" name="mat_khau">
            </div>
            <div class="form-group">
                <label for="">Kich Hoat</label>
                <input type="text" name="kich_hoat">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="hinh">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email" name="email" />
            </div>
            <div class="form-group">
                <label for="">Vai tro</label>
                <input type="text" name="vai_tro">
            </div>
            <div class="form-group">
                <button type="submit" name="btn_insert">Add</button>
            </div>
        </form>
    </div>
    <div class="row">
        <a href="index.php?btn_list" class="btn">list</a>
    </div>
</body>

</html>