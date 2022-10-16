<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .user-container {
            width: 30%;
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            height: 100vh;
            background-color: #fff;
            z-index: 9999;
            box-shadow: 0 0 20px rgba(48, 46, 77, 0.15);
            display: flex;
            justify-content: center;
            align-items: center;
            transform: scaleX(0);
            transform-origin: right;
            transition: all 300ms ease;
            opacity: 0;
        }

        .user-container .user-close-icon {
            position: absolute;
            top: 0;
            left: 0;
            font-size: 24px;
            cursor: pointer;
            transition: all 200ms ease;
            padding: 12px 24px;
        }

        .user-container .user-close-icon:hover {
            transform: translateX(12px);
        }

        .user-container.active {
            transform: scaleX(1);
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="user-container">
        <div class="user-close-icon">
            <i class="fa-solid fa-arrow-right"></i>
        </div>
        <?php
        if (isset($_SESSION['user'])) {
            require 'dang-nhap-info.php';
        } else {
            $ma_kh = get_cookie("ma_kh");
            $mat_khau = get_cookie("mat_khau");
            require 'dang-nhap-form.php';
        }
        ?>
    </div>
    <script>
        const userContainer = document.querySelector('.user-container'),
            userCloseIcon = document.querySelector('.user-close-icon'),
            userIcon = document.querySelector('.user-icon')
        body = document.querySelector('body')

        let getStatus = localStorage.getItem("showForm");
        if (getStatus && getStatus === "active") {
            userContainer.classList.add('active');
        }

        userIcon.addEventListener("click", () => {
            userContainer.classList.toggle("active");
            if (userContainer.classList.contains("active")) {
                localStorage.setItem("showForm", "active");
            }
        })

        userCloseIcon.addEventListener('click', () => {
            userContainer.classList.toggle('active');
            if (!userContainer.classList.contains('active')) {
                localStorage.setItem("showForm", "");
            }
        })

        const loginForm = document.querySelector('.login-form'),
            loginBtn = document.querySelector('.login-form button')
        loginForm.onsubmit = (e) => {
            e.preventDefault()
        }
        loginBtn.onclick = () => {
            const xhr = new XMLHttpRequest(); // create new XML Object
            xhr.open("POST", "../tai-khoan/dang-nhap.php?btn_login", true);
            xhr.onload = () => {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status == 200) {
                        let data = xhr.response;
                        alert(data)
                        location.reload()
                    }
                }
            };
            let formData = new FormData(loginForm); //create new formData
            xhr.send(formData); //send formData to PHP
        };
    </script>
</body>

</html>