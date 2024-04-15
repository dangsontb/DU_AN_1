<?php
$count = countcart();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoes Fashion</title>
    <link rel="stylesheet" href="./views/css2/style.css">
    <link rel="stylesheet" href="views/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fleur+De+Leah&family=Noto+Sans+Display:ital,wght@0,100..900;1,100..900&family=Oxanium:wght@200..800&family=Playball&family=Roboto:wght@300;700&display=swap" rel="stylesheet">
                    <!-- font chữ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>


</style>
<body>
        <header>
          <!-- =========================================================== NAVBAR ============================================================ -->
            <div class="dieuhuong">
                <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgb(243, 243, 243);">
                    <div class="logo">
                        <a class="navbar-brand d-flex" href="index.php">
                          <img src="views/image/logo1.jpg" alt="" width="100">
                          <span style="font-family: Oxanium, sans-serif; font-weight: 800; padding-top: 34px;">Shoes Fashion</span>
                        </a>
                    </div>
                    <div class="container-fluid menu">
                      <a class="navbar-brand fs-6" href="index.php">Trang chủ</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse " id="navbarScroll">
                        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-6 text-body-emphasis" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">Danh mục</a>
                                <ul class="dropdown-menu">
                                    <?php 
                                        foreach ($list_category as $category) {
                                            extract($category);
                                            $link_category="index.php?act=sanpham&idcate=".$cate_id;
                                            echo '<li>
                                                    <a class="dropdown-item fs-6" href="'.$link_category.'">'.$cate_name.'</a>
                                                </li>';
                                        }
                                    ?>
                                    <!-- <li><a class="dropdown-item fs-6" href="">Air Jocdan</a></li>
                                    <li><a class="dropdown-item fs-6" href="">Air Force</a></li>
                                    <li><a class="dropdown-item fs-6" href="">Nike Dunk Low Retro</a></li> -->
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-6 text-body-emphasis" href="" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Thương hiệu
                                </a>
                                <ul class="dropdown-menu">
                                    <?php
                                        foreach ($list_brand as $brand) {
                                            extract($brand);
                                            $link_brand="index.php?act=sanpham_brand&idbrand=".$brand_id;
                                            echo'
                                                <li>
                                                    <a class="dropdown-item fs-6" href="'.$link_brand.'">'.$brand_name.'</a>
                                                </li>
                                            ';
                                            # code...
                                        }
                                    ?>
                                    <!-- <li><a class="dropdown-item fs-6" href="">Action</a></li>
                                    <li><a class="dropdown-item fs-6" href="">Another action</a></li>
                                    <li><a class="dropdown-item fs-6" href="">Something else here</a></li> -->
                                </ul>
                            </li>

                            <li class="nav-item">
                                 <a class="nav-link text-black" href="index.php?act=gioithieu">Giới thiệu</a>
                            </li>
                        </ul>
                        <form action="?act=keyword" method="post" class="d-flex" role="search">
                          <input name="keyw" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
<button class="btn btn-outline-success" name="submit"  type="submit"><i class="fas fa-search"></i></button>
                        </form>
                      </div>
                    </div>
                    <div class="d-flex icon" >
                        <li class="nav-item dropdown" style="list-style: none; ">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user fa-lg" style="color: black;"></i>
                            </a>
                            <ul class="dropdown-menu" style="width: 50px;">
                                <?php 
                                if(isset($_SESSION['user'])){
                                    extract($_SESSION['user']);
                                ?>
                                    <?php if($role==1){ ?>
                                        <li><a class="dropdown-item" href="admin/index.php">Trang Admin</a></li>    
                                    <?php } ?>

                                    <li><a class="dropdown-item" href="index.php?act=change_password">Đổi mật khẩu</a></li>
                                    <li><a class="dropdown-item" href="index.php?act=logout">Thoát</a></li>
                                    <li><a class="dropdown-item" href="index.php?act=order_history">Lịch sử </a></li>
                                    
                                    <?php }else{?>
                                        <li><a class="dropdown-item" href="index.php?act=form_login">Đăng nhập</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=signup">Đăng kí</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=forgot_password">Quên mật khẩu</a></li>
                                
                                    <?php } ?>
                            </ul>
                        </li>
                        <li style="list-style: none;">
                            <a class="nav-link gh" href="index.php?act=viewcart" style="padding:0px 5px 0px 12px;">
                                <i class="fas fa-cart-plus fa-lg"></i> 
                                <span class="item-count rounded-circle sl"><?= $count ?></span>
                            </a>
                        </li>
                    </div>
                </nav>
            </div>
<style>


</style>
<?php
    if ( (isset($_GET['act']))&&($_GET['act']=="viewcart") || (isset($_GET['act']))&&($_GET['act']=="order_history") || (isset($_GET['act']))&&($_GET['act']=="thanhtoan") || (isset($_GET['act']))&&($_GET['act']=="history_order_detail") ) {
?>
           <!-- ========================================================== SLIDESHOW========================================================= -->
<?php }else{?>
    <div>
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="1000">
                <img src="views/image/banner1.jpg" class="d-block w-100 " alt="..." style="height: 550px;">
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                <img src="views/image/banner3.jpg" class="d-block w-100" alt="..." style="height: 550px;">
                </div>
                <div class="carousel-item" data-bs-interval="1000">
                <img src="views/image/banner4.jpg" class="d-block w-100" alt="..." style="height: 550px;">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <?php }?>
</header>