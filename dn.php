<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./Image/lms-learning-management-system-concept-with-big-vector-27335395.jpg">
    <link rel="stylesheet" href="./bootrap/bootstrap.min.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/all.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/fontawesome.css">
    <link rel="stylesheet" href="./bootrap/fontawesome-free-5.15.3-web/css/fontawesome.min.css">
    <link rel="stylesheet" href="./CSS/header_footer.css">
    <script src="./bootrap/fontawesome-free-5.15.3-web/js/all.js"></script>
    <script src="./bootrap/JS/jquery.min.js"></script>
    <script src="./bootrap/JS/popper.min.js"></script>
    <script src="./bootrap/JS/bootstrap.min.js"></script>
</head>

<body>
    <?php include_once './View/header.php'; ?>
    <div style="display:flex;justify-content:center;align-items:center;" class="m-3">
        <div style="margin:auto;">
            <div class="card">
                <div class="card-block">
                    <h2 class="card-header text-center">Hệ Thống Học Tập Trực Tuyến</h2>
                    <div class="card-body">
                        <div class="row justify-content-md-center">
                            <div class="col-md-6">
                                <form class="mt-3" action="https://lms.iuh.edu.vn/login/index.php" method="post" id="login">
                                    <input id="anchor" type="hidden" name="anchor" value="">
                                    <script>
                                        document.getElementById('anchor').value = location.hash;
                                    </script>
                                    <input type="hidden" name="logintoken" value="AhQnbWBwF3vzHCmEl4I8ZozT8ditGGT1">
                                    <div class="form-group">
                                        <label for="username" class="sr-only">
                                            Tên tài khoản
                                        </label>
                                        <input type="text" name="username" id="username" class="form-control" value="" placeholder="Tên tài khoản" autocomplete="username">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="sr-only">Mật khẩu</label>
                                        <input type="password" name="password" id="password" value="" class="form-control" placeholder="Mật khẩu" autocomplete="current-password">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block mt-3" id="loginbtn">Đăng nhập</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include_once './View/footer.php'; ?>


</body>

</html>