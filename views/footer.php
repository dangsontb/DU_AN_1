<footer class="mt-5">
                <div class="container text-center">
                    <div class="row align-items-start">
                      <div class="col chinhsach">
                        <h4>Hỗ Trợ Khách Hàng</h4>
                        <p>Email: duan1shn@fpt.edu.vn</p>
                        <p> Hotline: 0123456789</p>
                        <p>Địa chỉ: Cổng số 1, Tòa nhà FPT Polytechnic, <br>
                        13 phố Trịnh Văn Bô, phường Phương Canh,<br> quận Nam Từ Liêm, TP Hà Nội</p>
                      </div>
                      <div class="col chinhsach">
                        <h4>Hướng Dẫn</h4>
                        <p>Hướng dẫn mua hàng</p>
                        <p>Phương thức thanh toán</p>
                        <p>Chính Sách Vận Chuyển</p> 
                        <p>Chính sách đổi trả</p>
                      </div>
                      <div class="col chinhsach">
                        <h4>Tài khoản của bạn</h4>
                        <p>Cập nhật tài khoản</p>
                        <p>Giỏ hàng</p>
                        <p>Lịch sử giao dịch</p>
                        <p>Kiểm tra đơn hàng</p>
                      </div>
                    </div>
                </div>
        </footer>

 
</body>
<script>
    // $(document).ready(function(){
        //   var active = location.search; 
        //   $('#select-filter option[value="'+active+'"]').attr('selected','selected');
        // })
        
       function changeFilter() {
          // alert("HHHHHHH")
          
          var value = document.querySelector('#select-filter').value;
          
          //alert(value);
          if(value!=0){
            var url = "http://localhost/du_an_1/index.php" + value;
            // alert(url);
            window.location.href =  url; 
          }else{
            alert('Hãy lọc sản phẩm');
          }
        }
    </script>
</html>