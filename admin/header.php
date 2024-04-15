<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container"> 
        <header class="mt-1">
            <h1 class="alert alert-primary "><a class="nav-link text-primary" href="#">Website Admin</a></h1>
            <nav class="navbar navbar-expand-lg bg-dark  rounded-2 " >
                <div class="container-fluid ">       
                    <div class="collapse navbar-collapse " id="navbarNavDropdown">
                        <ul class="nav navbar-nav   ">
                            
                            <li class="nav-item  ">
                                <a class="nav-link text-light " aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?act=list_category">Danh mục</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?act=list_brand">Thương hiệu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?act=list_product">Sản phẩm</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?act=list_user">Khách hàng</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?act=list_comment">Bình luận</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?act=list_bill">Đơn hàng</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?act=list_property">Thuộc tính</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link text-light" href="index.php?act=best_selling_brand">Thống kê</a>
                            </li>
                        </ul>
                    </div>
                </div>
                
            </nav>
            <p class="d-inline-flex gap-1 m-2">
                <a class="btn btn-secondary"  href="../index.php"  aria-controls="collapseExample">
                    Quay về trang giao diện
                </a>
            </p>
        </header>

      