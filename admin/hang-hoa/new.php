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
            <input type="text" name="product_name">
        </div>
        <div class="form-group">
            <label for="">Product Price</label>
            <input type="text" name="product_price">
        </div>
        <div class="form-group">
            <label for="">Product Sale</label>
            <input type="text" name="product_sale">
        </div>
        <div class="form-group">
            <label for="">Product Image</label>
            <input type="file" name="hinh">
        </div>
        <div class="form-group">
            <label for="">Product Description</label>
            <textarea type="text" name="product_desc"></textarea>
        </div>
        <div class="form-group">
            <label for="">Product Speacial</label>
            <input type="text" name="product_special">
        </div>
        <div class="form-group">
            <label for="">Product Category</label>
            <select type="text" name="product_special">
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