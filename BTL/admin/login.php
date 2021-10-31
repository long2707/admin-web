
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="./css/main.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-4">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light">Đăng nhập</h3></div>
                                    <div class="card-body-1">
                                        <form method="POST" action="./xu_lu_login.php">
                                            <div class="form-floating mb-3">
                                            <label for="inputEmail">Email address</label>
                                                <input class="form-con" id="inputEmail" type="email"  name="inputEmail" placeholder="name@example.com" />
                                               
                                            </div>
                                            <div class="form-floating mb-3">
                                            <label for="inputPassword">Password</label>
                                                <input class="form-con" id="inputPassword" type="password" name="inputPassword" placeholder="Password" />
                                                
                                            </div>
                                         
                                            <div class="d-flex align-items-center justify-content-center mt-4 mb-0">
                                           
                                            <input class=" btn-primary btn" type="submit" name="btnDangNhap" value="Đăng nhập">
                                            </div>
                                        </form>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright - 2021 Khoa hệ thống thông tin quản lí - BAV</div>
                            <div>
                            <span>12 Chùa Bộc, Đống Đa, Hà Nội</span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
