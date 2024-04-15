  <!-- main -->
      <main class="container-fluid">
           <h5 style="margin-top: 40px;">Bảng điều khiển</h5>
          <div class="container text-center item">
               <div class="row">
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #725FF0; font-weight: 700;">Tổng doanh thu(Ngày)</p>
                              <span>0đ</span>
                         </div>
                         <div class="dola">
                              <p>$</p>
                         </div>
                    </div>

                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #FFB949; font-weight: 700;">Tổng doanh thu(Tuần)</p>
                              <span>0đ</span>
                         </div>
                         <div class="dola">
                              <p>$</p>
                         </div>
                    </div>
                    
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #2AB476; font-weight: 700;">Tổng doanh thu(Tháng)</p>
                              <span>0đ</span>
                         </div>
                         <div class="dola">
                              <p>$</p>
                         </div>
                    </div>

                    <div class="col bong doanhthu1" >
                         <div class="price">
                              <p style="color: #2254A2; font-weight: 700;">Tổng doanh thu(Năm)</p>
                              <span>0đ</span>
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
                              <span>0</span>
                         </div>
                         <div class="logo">
                              <i class="fas fa-book fa-sm" style="color:  #424f66;"></i>
                         </div>
                    </div>

                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #FFB949; font-weight: 700;">Tổng khách hàng</p>
                              <span>0</span>
                         </div>
                         <div class="logo">
                              <i class="fas fa-user fa-sm" style="color: #424f66;"></i>
                         </div>
                    </div>
                    
                    <div class="col doanhthu bong">
                         <div class="price">
                              <p style="color: #2AB476; font-weight: 700;">Tổng sản phẩm</p>
                              <span>0</span>
                         </div>
                         <div class="logo">
                              <i class="fab fa-product-hunt fa-sm" style="color: #424f66;"></i>
                         </div>
                    </div>

                    <div class="col bong doanhthu1" >
                         <div class="price">
                              <p style="color: #2254A2; font-weight: 700;">Tổng loại sản phẩm</p>
                              <span>0</span>
                         </div>
                         <div class="logo">
                              <i class="fas fa-shopping-bag fa-sm" style="color: #424f66;"></i>
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