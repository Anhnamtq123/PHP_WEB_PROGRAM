<?php include './config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= BASE_URL ?>/public/css/style.css">
</head>
<body>
    <div id="wrapper">
        <form id="form-login" action="<?= BASE_URL ?>/login/loginSubmit" method="post">
            <div class="form-group">
                <h1 class="form-heading">Đăng nhập</h1>
                <p class="form-err_<?php echo isset($data["errFlag"])? 'true' : 'false';?>">Thông tin tài khoản không đúng! Mời nhập lại!</p>
                <div class="form-box">
                    <input class="form-input" type="text" name="username" id="username" placeholder="Tên đăng nhập">
                </div>
                <div class="form-box">
                    <input class="form-input" type="password" name="password" id="password" placeholder="Mật khẩu">
                </div>
                <button class="form-submit" type="submit">Đăng nhập</button>
            </div>
        </form>
    </div>
</body>
</html>