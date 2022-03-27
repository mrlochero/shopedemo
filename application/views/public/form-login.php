
<head>
    <title> SHOP LOC </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/shopedemo/assets/responsive/girds.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/main.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/base.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/normalize.css">

</head>
<!-- auth form-register -->
<div class="auth-form-all">
    <div class="auth-form">
        <form class="auth-form__container" action="/shopedemo/form/login" method="post">
            <!-- auth-form__header-->
            <div class="auth-form__header" >
                <h3 class="auth-form__dk"> Đăng nhập</h3>
                <a href="/shopedemo/form/register" class="auth-form__dn">Đăng ký</a>
            </div>
            <!-- auth-form__body-->
            <div class="auth-form__body" >
                <div class="auth-form__group">
                    <input name="user_name" type="text" class="form__group-input" placeholder="Tên Đăng Nhập" required="">
                </div>
                <div class="auth-form__group">
                    <input name="password" type="password" class="form__group-input" placeholder="Mật khẩu" required="">
                </div>
            </div>
            <!-- RULES-->
            <div class="auth-form__rules">
                <p class="form__rules-text">
                    Bằng việc đăng ký bạn đã đồng ý với SHOP LOC về
                    <a href="#" class="rules-text_link">Điều khoản</a> &
                    <a href="#" class="rules-text_link">Dịch vụ</a>
                </p>
            </div>
            <!-- control-->
            <div class="auth-form__controls">
                <a class="btn form__controls-back" href="/shopedemo">TRỞ LẠI</a>
                <input name="submit_gui" type="submit" value="ĐĂNG NHẬP" class="btn btn--primary form__controls-dk ">
            </div>
        </form>
        <!-- socials -->
        <div class="auth-form__socials">
            <a  class="btn btn--with-icon form__socials__fb"">
            <i class="fab fa-facebook-square form__socials-icon"></i>
            Kết nối với facebook
            </a>
            <a  class="btn btn--with-icon form__socials__gg ">
                <i class="fab fa-google form__socials-icon"></i>
                Kết nối với google
            </a>
        </div>
    </div>
</div>

<?php
include_once 'footer.php';
?>

