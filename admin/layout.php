<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>T-Coffee Admin</title>
    <script src="<?= $CONTENT_URL ?>/js/jquery.min.js" type="text/javascript"></script>
</head>

<body>
    <h1>Admin Panel</h1>
    <nav>
        <?php require 'menu.php'; ?>
    </nav>
    <?php require $VIEW_NAME ?>
</body>

</html>