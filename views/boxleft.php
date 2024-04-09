<div class="boxleft" style="margin-top: 53px;">
                  <!-- ======================================== GIÁ===================================== -->
                    <!-- <div class="price">
                        <h6>Mức giá</h6>
                        <form action="" class="chu">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Dưới 500,000 VNĐ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">500,000 VNĐ - 1,000,000 VNĐ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">1,000,000 VNĐ - 1,500,000 VNĐ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">1,500,000 VNĐ - 2,000,000 VNĐ</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Dưới 2,000,000 VNĐ</label>
                            </div>
                        </form>
                    </div> -->
              
                    <!-- ======================================= SIZE====================================== -->
                    <!-- <div class="size">
                        <h6>Kích thước</h6>
                        <form action="" class="kichthuoc">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 35</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 36</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 37</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 38</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 39</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 40</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 41</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 42</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">Size 43</label>
                            </div>
                        </form>
                    </div> -->
              
                    <!-- ========================================== SẢN PHẨM HOT ========================================= -->
                    <div class="sphot">
                        <h6>10 Sản phẩm HOT</h6>
                        <div>
                            <?php
                                foreach ($product_top10 as $sp) {
                                    extract($sp);
                                    $link_product="index.php?act=product_detail&product_id=".$product_id;
                                    $img=$GLOBALS['path_img'].$image;
                                    echo '<a href="'.$link_product.'" class="hot">
                                                <img src="'.$img.'" class="img-thumbnail" alt="...">
                                                <span>'.$name.'</span>
                                            </a>';
                                }
                            ?>
                            <!-- <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a>
                            <a href="" class="hot">
                              <img src="views/image/anh1.jpg" class="img-thumbnail" alt="...">
                              <span>Nike dunk low cacao wow</span>
                            </a> -->
                        </div>
                    </div>
                </div>
