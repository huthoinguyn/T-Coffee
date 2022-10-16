<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .info-container {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .info-container .title {
            width: 100%;
            text-align: center;
        }

        .user-info {
            width: 100%;
            padding: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .user-img {
            max-width: 120px;
            flex: 0 0 120px;
            overflow: hidden;
        }

        .user-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .logout {
            width: 100%;
            display: block;
            text-align: center;
            color: red;
        }
    </style>
</head>

<body>
    <div class="info-container">
        <div class="row">
            <h2 class="title">User Infomation</h2>
        </div>
        <div class="row">
            <div class="user-info">
                <div class="user-img">
                    <img src="../../content/images/users/hinh1.jpg" alt="">
                </div>
                <div class="user-content">
                    <h3 class="name">Le Tan Tai</h3>
                </div>
                <div class="row">
                    <a class="logout" href="../tai-khoan/dang-nhap.php?btn_logoff">Log out</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>