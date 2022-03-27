<?php
$data = $data[0];
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <title> SHOP LOC </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/shopedemo/assets/responsive/girds.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/main.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/sanpham.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/base.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/normalize.css">
    <link rel="stylesheet" href="/shopedemo/assets/font/fontawesome/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

</head>
<body>
<!--    BEM : Block__element--modifier-->
<div class="app">
    <?php
    include_once 'head.php';
    ?>
    <div class="App_container">
        <div class="grid wide">
            <div class="row">
                <div class="content__Sp">
                        <div class="img__sp" style="background-image: url(<?= $data['img_sp'];?>)">
                        </div>
                        <div class="infor__Sp">
                            <p class="infor__Sp--nameSp"><?= $data['name']; ?></p>
                            <div class="infor__Sp--priceSp">
                                <span class="priceSp__price-old"><?= $data['price']; ?></span>
                                <span class="priceSp__price-current"><?= $data['price_sale']; ?></span>
                                <span class="priceSp__sale"><?= $data['sale']; ?>% Giảm</span>
                            </div>
                            <div class="infor__Sp--shipSp">
                                <div class="Sp--shipSp">
                                    <div class="text-color-grey Sp--shipSp-1">Vận chuyển
                                        <span class="no__ship">
                                            <i class="fas fa-truck"></i><span> Không hỗ trợ</span>
                                        </span>
                                        <span class="has__ship">
                                            <span class="Sp--shipSp-1-1"> <i class="fas fa-truck"></i> Vận chuyển tới </span>
                                        </span>
                                            <span class="Sp--shipSp-1-2 "> Phí Vận chuyển 0đ</span>
                                    </div>
                                    <div class="text-color-grey Sp--shipSp-2"><span>màu sắc</span>
                                        <?php
                                            foreach ($data['color'] as $key => $color){
                                        ?>
                                        <div id="active1" class="block--active shipSp-2-block"><?= $color['name']; ?>
                                             <i class="fas fa-check block--active-icon"></i>
                                        </div>
                                        <?php } ?>
                                    </div>

                                    <div class="text-color-grey Sp--shipSp-3">Size
                                        <?php  foreach($data['size'] as $key => $size){

                                         ?>
                                        <div id="active2" class="block--active text--color-black"> <?= $size['name'] ?>
                                             <i class="fas fa-check block--active-icon"></i>
                                        </div>
                                        <?php } ?>
                                    </div>
                                    <div class="text-color-grey Sp--shipSp-4">
                                        Số Lượng
                                        <div class="Sp--shipSp-4-2">
                                            <div class=" Sp--shipSp-4-nut nut_tru">-</div>
                                            <input class="Sp--shipSp-4-nut Sp--shipSp-4-num" value="1">
                                            <div class="Sp--shipSp-4-nut nut_cong">+</div>
                                            <span class="sl_sp"><?= $data['kho_hang'];?></span><span> Sản Phẩm có sẵn</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="infor__Sp--buySp">
                                <div class="add__cart"><i class="fas fa-cart-plus add__cart-icon"></i>Thêm vào giỏ hàng</div>
                                <div class="buy__now">Mua ngay</div>
                            </div>

                            <div class="infor__Sp--guaranteed"> <i class="fas fa-shield-alt Sp--guaranteed-icon "></i>Shop đảm bảo   <span class="text-color-grey">3 ngày trả hàng/hoàn tiền</span> </div>
                        </div>
                    </div>
            </div>
            <div class="row">
               <div class="motaSp">
                   <div class="motaSp-1">
                       <p class="motaSp-1-1">CHI TIẾT SẢN PHẨM</p>
                   </div>
                   <div class="motaSp-2">
                       <ul>
                           <li> Danh mục <span><?= $data['danh_muc'];?></span> </li>
                           <li> Xuất xứ <span><?= $data['xuat_xu'];?></span></li>
                           <li> Kho hàng <span><?= $data['kho_hang'];?></span></li>
                           <li> Gửi từ <span><?= $data['to_from'];?></span></li>
                           <li> Mẫu <span><?= $data['mau_sp'];?></span></li>
                       </ul>
                   </div>
                   <div class="motaSp-3">
                       <p class="motaSp-3-1">MÔ TẢ SẢN PHẨM</p>
                   </div>
                   <div class="motaSp-4">
                       <p><?= $data['infor_sp'] ;?></p>
                   </div>
               </div>
            </div>
        </div>
    </div>

    <?php
    include_once 'footer.php';
    ?>


</div>
</body>

<script>
    $(document).ready(function (){
        $('.Sp--shipSp-2 .block--active').on('click',function () {
            $(' .Sp--shipSp-2 .block--active').not(this).removeClass('block--active2');
            $(this).toggleClass('block--active2');
        })
        $('.Sp--shipSp-3 .block--active').on('click',function () {
            $(' .Sp--shipSp-3 .block--active').not(this).removeClass('block--active2');
            $(this).toggleClass('block--active2');
        })


        //click add product
        var sl_sp = $('.Sp--shipSp-4-num');
        var val_sp = $('.Sp--shipSp-4-num').val();
        var sl_spmax = $('.sl_sp').text();

        $('.nut_cong').on('click',function (){
            if(val_sp < sl_spmax) {
                sl_sp.val(++val_sp);
            }
        })

        $('.nut_tru').on('click',function (){
            if(val_sp > 0) {
                sl_sp.val(--val_sp);
            }
        })






    })
</script>