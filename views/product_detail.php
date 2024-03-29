<?php
    if(isset($product_detail_id)){
        extract($product_detail_id);
    }
    // echo "<pre>";
    // print_r($product_detail_id);

    $img = "uploads/". $image;
  
    // echo  $GLOBALS['path_img'];
    $new_price=$price - ( $price *  $sale )/100;

?>
<main role="main" class="container">
    <?php var_dump($product_detail_id); ?>
        <div class="container mt-4">
            <div id="thongbao" class="alert alert-danger d-none face" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="card border border-0">
                <div class="row g-2">
                    <div class="col-6 ">
                        <div class="p-3 text-center">
                            <img src="<?= $img ?>" alt="" width="500" height="400"><br><br>
                        
                            <!-- <p>
                                <img src="" alt="" width="100">
                                <img src="./image/anh1.jpg" alt="" width="100">
                                <img src="./image/anh1.jpg" alt="" width="100">
                                <img src="./image/anh1.jpg" alt="" width="100">
                                <img src="./image/anh1.jpg" alt="" width="100">
                            </p> -->
                        </div>
                        <div>
                            <h4>Mô tả sản phẩm :</h4>
                            <p>
                                <?= $description?>
                                
                            </p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="p-3">
                            <h2 class="product-title">   <?=$name ?><span class="badge text-bg-danger">Mới</span></h2>
                            <p>Thương hiệu: <?= $brand_name ?> </small></p>
                            
                            <h3><strong style="size: 50; color: red;"><?= $price_new = number_format(( $price - ( $price *  $sale )/100)) ?> đ</strong> <small class="text-muted mx-5" >Giá cũ: <s><span class="opacity-50"><?=$price = number_format($price) ?>đ</span></s></small></h3>
                                
                            <br>
                            <span class="border border-danger">
                                <div>
                                    <h4>KHUYẾN MÃI</h4>
                                    <h6>SALE SẬP SÀN - NGÀN ƯU ĐÃI!</h6>
                                    <h6>🎁 Nhập mã VNPAYANTA giảm thêm 30k đơn 500k, 50k đơn 800k, 70k đơn 1.500k (Thanh toán online VNPAY)</h6>
                                    <h6>🔥ĐỒNG GIÁ 99K, 199K, 299K, 399K,…</h6> 
                                    <h6>🔥NEW ARRIVAL: Giảm 100k đơn 1triệu, 300k đơn 2triệu, 600k đơn 3triệu</h6>
                                    <h6>🔥SALE upto 50% hàng trăm sản phẩm</h6>

    
                                </div>

                            </span>
                            <div class="row">
                                <label class="col-2" for="soluong">Size:</label>
                                <?php foreach($sizes as $size) :?>
                                    <input  type="button" class="btn btn-light col-2" name="size" value="<?= $size['size_number'] ?>">
                                <?php endforeach ?>
                            </div>
                            <br>
                            <form action="index.php?act=addtocart" method="post">
                                <div class="form-group"> 
                                    <label for="soluong">Số lượng đặt mua:</label>
                                    <input type="number" value="1" class="form-control" id="soluong" name="soluong" style="width: 25%;">
                                </div><br>


                                <input type="hidden" name="id" value="<?=$product_detail_id['product_id']?>">
                                <input type="hidden" name="tensp" value="<?=$product_detail_id['name']?>">
                                <input type="hidden" name="gia" value="<?=$new_price?>">
                                <input type="hidden" name="hinh" value="<?=$product_detail_id['image']?>">
                                <input type="submit" class="btn btn-danger"  style="width: 600px; height: 50px; text-align: center;" value="Đặt hàng" name="addtocart">
                            </form>
                            
                            
                            <!-- <div class="col-6">
                                <div class="p-3"></div>
                            </div>
                            <div class="col-6">
                                <div class="p-3"></div>
                            </div>  -->
                        </div>
                    </div>       
                </div>
            </div>
            
            <div class="container-fluid my-5">  
                    
                <h2 class="text-success h4 pb-2 mb-4  border-bottom border-success">Bình luận</h2>   
               
                <!-- <div class="card">
                    <div class="card-header">
                        Quote
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p>A well-known quote, contained in a blockquote element.</p>
                        
                        </blockquote>
                    </div>
                </div> -->
                <?php foreach($list_comment as $comment):?>
                    <div><?= $comment['user_name'] ?></div>
                    <span><?= $comment['date'] ?></span>
                    <div><?= $comment['content'] ?></div>
                <?php endforeach?>
                <!-- <div class="w-25 p-3 bg-body-secondary rounded-2">
                    <div class="d-inline-flex p-2 ">
                        I'm an inline flexbox container!aaaaaaaaaaaaaaaaa
                    </div>
                </div> -->

                <form action="index.php?act=comment" method="post">
                    <input type="hidden" name="product_id" value="<?= $product_id?>">
                    <div class="mb-3 mt-3">
                    <label for="comment">Comments:</label>
                    <textarea class="form-control" rows="5" id="comment" name="content"></textarea>
                    </div>
                    <input name="submit" type="submit" class="btn btn-primary" value="Gui binh luan"> 
                </form>
            </div>
            
       
        </div>     
</main>