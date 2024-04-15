  <!-- main -->
      <main class="container-fluid">
           <h5 style="margin-top: 40px;">Bảng điều khiển</h5>
          <div class="container text-center item">
               <div class="row">
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #725FF0; font-weight: 700;">Tổng doanh thu(Ngày)</p>
                              <span><?=  number_format($doanh_thu_ngay) ?></span>
                         </div>
                         <div class="dola">
                              <p>$</p>
                         </div>
                    </div>

                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #FFB949; font-weight: 700;">Tổng doanh thu(Tuần)</p>
                              <span><?=  number_format($doanh_thu_tuan)?></span>
                         </div>
                         <div class="dola">
                              <p>$</p>
                         </div>
                    </div>
                    
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #2AB476; font-weight: 700;">Tổng doanh thu(Tháng)</p>
                              <span><?=  number_format(doanh_thu_1_thang())?></span>
                         </div>
                         <div class="dola">
                              <p>$</p>
                         </div>
                    </div>

                    <div class="col bong doanhthu1" >
                         <div class="price">
                              <p style="color: #2254A2; font-weight: 700;">Tổng doanh thu(Năm)</p>
                              <span><?=  number_format(doanh_thu_1_nam())?></span>
                         </div>
                         <div class="dola">
                              <p>$</p>
                         </div> 
                    </div>
               </div>
          </div>

          <div class="container text-center item">
               <div class="row">
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #725FF0; font-weight: 700;">Tổng đơn</p>
                              <span><?=  number_format(total_order())?></span>
                         </div>
                         <div class="logo">
                              <i class="fas fa-book fa-sm" style="color:  #424f66;"></i>
                         </div>
                    </div>

                   
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #2AB476; font-weight: 700;">Tổng số nhãn hiệu</p>
                              <span><?=  number_format(total_brand())?></span>
                         </div>
                         <div class="logo">
                              <i class="fab fa-product-hunt fa-sm" style="color: #424f66;"></i>
                         </div>
                    </div>
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #2AB476; font-weight: 700;">Tổng mẫu mã</p>
                              <span><?=  number_format(total_product())?></span>
                         </div>
                         <div class="logo">
                              <i class="fab fa-product-hunt fa-sm" style="color: #424f66;"></i>
                         </div>
                    </div>

                    <div class="col bong doanhthu1" >
                         <div class="price">
                              <p style="color: #2254A2; font-weight: 700;">Loại hàng</p>
                              <span><?=  number_format(total_category())?></span>
                         </div>
                         <div class="logo">
                              <i class="fas fa-shopping-bag fa-sm" style="color: #424f66;"></i>
                         </div> 
                    </div>
               </div>
          </div>
          <div class="container text-center item">
               <div class="row">
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #FFB949; font-weight: 700;">Tổng khách hàng</p>
                              <span><?=  number_format(total_customer())?></span>
                         </div>
                         <div class="logo">
                              <i class="fas fa-user fa-sm" style="color: #424f66;"></i>
                         </div>
                    </div>
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #725FF0; font-weight: 700;">Số lượng sản phẩm đã bán</p>
                              <span><?=  number_format(total_product_order())?></span>
                         </div>
                         <div class="logo">
                              <i class="fas fa-book fa-sm" style="color:  #424f66;"></i>
                         </div>
                    </div>

                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #FFB949; font-weight: 700;">Tồn kho</p>
                              <span><?=  number_format(Number_of_goods_in_stock())?></span>
                         </div>
                         <div class="logo">
                              <i class="fas fa-user fa-sm" style="color: #424f66;"></i>
                         </div>
                    </div>
                    
                   

                    <div class="col bong doanhthu1" >
                         <div class="price">
                              <p style="color: #2254A2; font-weight: 700;">Tổng số bình luận</p>
                              <span><?=  number_format(total_comment())?></span>
                         </div>
                         <div class="logo">
                         <i class="fas fa-comment fa-sm" style="color: #424f66;"></i>
                         </div> 
                    </div>
               </div>
          </div>
      </main>
    </div>
</body>
</html>
<style>
.item{
     margin-top: 30px;
}
.doanhthu{
     display: flex;
     justify-content: space-between;
     margin-right: 20px;
     height: 110px;
}
.doanhthu1{
     display: flex;
     justify-content: space-between;
     margin-right: 12px;
}
.price p{
     padding-top: 16px;
     padding-bottom: 10px;
}
.price span{
     padding-bottom: 28px;
}
.price{
     position: relative;
}
.price span{
     position: absolute;
     left: 0px;
     bottom: 3px;
     font-weight: 500;
     color: gray;
}
.dola{
     margin-top: 20px;
     font-size: 30px;
     font-weight: 700;
     color: gray;

}
.bong{
     box-shadow: -1px 1px 10px 0px  rgb(190, 190, 190);
}
.logo{
     margin-top: 12px;
     font-size: 40px;
     margin-bottom: 12px;
}
</style>