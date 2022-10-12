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
    <form action="../hang-hoa/index.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Product Name</label>
            <input type="text" name="ten_hh">
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" name="don_gia">
        </div>
        <div class="form-group">
            <label for="">Product Sale</label>
            <input type="text" name="giam_gia">
        </div>
        <div class="form-group">
            <label for="">Product Image</label>
            <input type="file" name="hinh">
        </div>
        <div class="form-group">
            <label for="">Product Description</label>
            <textarea type="text" name="mo_ta"></textarea>
        </div>
        <div class="form-group">
            <label for="">Product Speacial</label>
            <input type="text" name="dac_biet">
        </div>
        <div class="form-group">
            <label for="">Time</label>
            <input type="text" name="ngay_nhap">
        </div>
        <div class="form-group">
            <label for="">Product Category</label>
            <select type="text" name="loai_hang">
                <option value="ca phe" selected>Ca Phe</option>
                <option value="tra duong">Tra duong</option>
            </select>
        </div>
        <div class="form-group">
            <button type="submit" name="btn_insert">Add</button>
        </div>
    </form>
</body>

</html>