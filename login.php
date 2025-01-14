<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>
</head>

<body>
    <div id="login-page" class="view-port">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container ">
                <a class="navbar-brand mx-auto order-0" href="index.php">
                    <img src="assets/img/edmodo.png" alt="" class="ed-logo">
                </a>
            </div>
        </nav>
        <div class="page-content container ">
            <h3>
                <span>Welcome back! Log into your Edmodo account</span>
            </h3>
            <div class="auth-form-validation-error-container"><div></div></div>
            <div class="sso-actions-container">
                <div class="sso-buttons">
                    <div class="sso-button-group">
                        <div class="sso-login-button btn btn-light qa-test-google_drive-login-btn ">
                            <div class="sso-login-icon-container">
                                <div class="google-sso-login-icon"></div>
                            </div>
                            <div class="sso-provider-name">
                                <span>Continue with Google</span>
                            </div>
                        </div>
                    </div>
                    <div class="sso-button-group">
                        <div class="sso-login-button btn btn-light qa-test-office_365-login-btn ">
                            <div class="sso-login-icon-container">
                                <div class="office365-sso-login-icon "></div>
                            </div>
                            <div class="sso-provider-name"><span>Continue with Microsoft</span></div>
                        </div>
                    </div>
                    <div class="sso-button-group">
                        <div class="sso-login-button btn btn-light qa-test-apple-login-btn ">
                            <div class="sso-login-icon-container">
                                <div class="apple-sso-login-icon"></div>
                            </div>
                            <div class="sso-provider-name"><span>Continue with Apple</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <div class="signup-or-container">
                    <div class="signup-border">
                        <h4 class="my">OR</h4> 
                    </div>

            <!-- phần đăng nhập mới -->
            <div role="group" class="btn-group mt-3  ">
                <button type="button" class="qa-test-recovery-username-btn btn btn-secondary " style="margin-left:150px ;">
                    <span>Username or Email</span>
                </button>
            </div>
            <!-- tạo form đăng nhập gồm tên tk  -->
            <form action="process-login.php" method="post">
                <div class="position-relative form-group"><input name="username" placeholder="Email or Username"
                        type="username" class="qa-test-login-username form-control-lg form-control" value=""></div>
                <div class="position-relative form-group"><input name="password" placeholder="Password" id="password"
                        type="password" class="qa-test-login-password form-control-lg form-control" value=""></div>
                <div class="forgot-password-container text-center"><button type="button"
                        class="qa-test-forgot-password-btn btn btn-link"><span>Forgot password?</span></button></div>
                <button type="submit" name="btnlogin" id="qa-test-lightbox-login"
                    class="btn btn-primary btn-lg" style="margin-left:190px ;"><span >
                        Log In</span>
                    </button>
            </form>
            <div class="mt-5">
                <p>Edmodo is ultimately owned and controlled by NetDragon Websoft Holdings Limited, a public company
                    principally based in Hong Kong with operations in China, traded on the Hong Kong Stock Exchange
                    (HKSE: 777), and ultimately majority owned by Chinese persons located in China.</p>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>