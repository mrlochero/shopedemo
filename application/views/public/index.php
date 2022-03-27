<!DOCTYPE html>
<html lang="en">

<head>
    <title> SHOP LOC </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/shopedemo/assets/responsive/girds.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/main.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/base.css">
    <link rel="stylesheet" href="/shopedemo/assets/css/normalize.css">
    <link rel="stylesheet" href="/shopedemo/assets/font/fontawesome/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

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
                <!--category-->
                <div class="col l-2">
                    <nav class="category">
                        <h3 class=" category__heading">
                            <i class="fas fa-list category__icon"></i>
                            Danh mục
                        </h3>

                        <ul class="category-ul">
                            <li class="category-li">
                                <a href="#" class="category-li__link category-li--active">Trang điểm mặt</a>
                            </li>
                            <li class="category-li">
                                <a href="#" class="category-li__link ">Trang điểm môi</a>
                            </li>
                            <li class="category-li">
                                <a href="#" class="category-li__link">Trang điểm mắt</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!--Home-filter-->
                <div class="col l-10">
                    <div class="home-filter">
                        <span class="home-filter-lable">Sắp xếp theo</span>
                        <bttuon class="btn filter-lable-btn">Phổ biến</bttuon>
                        <bttuon class="btn filter-lable-btn btn--primary">Mới nhất</bttuon>
                        <bttuon class="btn filter-lable-btn">Bán chạy</bttuon>
                        <div class="select-input">
                            <span class="select-input__label">Giá́</span>
                            <i class="fas fa-angle-down select-input__icon"></i>
                        </div>
                        <div class="home-filter__paginate">
                                <span class="home-filter__pag_num">
                                    <span class="home-filter__pag_cur">1</span>/14
                                </span>
                            <div class="home-filter__pag_control">
                                <a href="#" class="home-filter__pag_btn">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                                <a href="#" class="home-filter__pag_btn">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>

                    <div class="home-product">
                        <div class="row home-product-row">
                            <!--                                item-san-pham-->
                            <?php foreach ($data as $item) { ?>
                                <div class="l-2-4 home-product-col">
                                    <a class="home-product-item" href="/shopedemo/sanpham/<?= $item['id'] ;?>">
                                        <div class="home-product-item__img"
                                             style="background-image: url(<?= $item['img_sp']; ?>)"></div>
                                        <h4 class="home-product-item__name"> <?= $item['name']; ?></h4>
                                        <div class="home-product-item__price">
                                            <span class="home-product-item__price-old"><?= $item['price']; ?></span>
                                            <span class="home-product-item__price-current"><?= $item['price_sale']; ?></span>
                                        </div>
                                        <div class="home-product-item__action">
                                            <span class="">
<!--                                                active : ẩn hiện-->
                                                <i class="fas fa-heart item__action-icon-heart-1 active "></i>
                                                <i class="far fa-heart item__action-icon-heart-2 "></i>
                                            </span>
                                            <div class="home-product-item__star">
                                                <i class="fas fa-star product-item__star-icon product-item__star-icon-gold"></i>
                                                <i class="fas fa-star product-item__star-icon product-item__star-icon-gold"></i>
                                                <i class="fas fa-star product-item__star-icon product-item__star-icon-gold"></i>
                                                <i class="fas fa-star product-item__star-icon product-item__star-icon-gold"></i>
                                                <i class="fas fa-star product-item__star-icon"></i>
                                            </div>
                                        </div>
                                        <div class="home-product-item__origin">
                                            <span class="home-product-item__brand">Whoo</span>
                                            <span class="home-product-item__origin__name"><?= $item['xuat_xu']; ?></span>
                                        </div>
                                        <div class="home-product-item__favorite">
                                            <i class="fas fa-check"></i>
                                            <span>Yêu thích</span>
                                        </div>
                                        <div class="home-product-item__sale">
                                            <span class="home-product-item__sale-1"><?= $item['sale']; ?>%</span>
                                            <span class="home-product-item__sale-2">GIẢM</span>
                                        </div>

                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                        <ul class="pagination pagination-margin">
                            <li class="pagination-item">
                                <a class="pagination-item__link">
                                    <i class="fas fa-angle-left"></i>
                                </a>
                            </li>
                            <?php
                                for ($i = 1; $i <= $counts; $i++){ ?>
                            <li class="pagination-item ">
                                <a href="/shopedemo/home/<?= $i;?>" class="pagination-item__link "><?= $i; ?></a>
                            </li>
                            <?php }?>
                            <li class="pagination-item">
                                <a class="pagination-item__link">
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <?php
        include_once 'footer.php';
        ?>

        <script>
            $(document).ready(function ()
            {
                $('.pagination-item__link').on('click', function (){

                    $(this).addClass('pagination-item__link-active');
                    $('.pagination-item__link').not(this).removeClass('pagination-item__link-active');
            })
            });
        </script>
        <pre>
            <?php print_r($data2); ?>
        </pre>
    </div>
</body>