<script type="text/javascript">
     function status_update(element){
        var value = element.value;
        // alert()
        // alert(value);
        if(value!= ""){
            var url = "http://localhost/du_an_1/admin/index.php?act=update_order&order_id="+value;
            // alert(url);
            window.location.href = url;
        }else{
            alert('Hãy lọc sản phẩm');
          }
     }
    function statusFilter() {
        // alert("HHHHHHH")
        
        var value = document.querySelector('#select-filter').value;
        
        //alert(value);
        if(value!=0){
        var url = "?act=select_bill&status_id=" + value;
        // alert(url);
        window.location.href =  url; 
        }else{
        alert('Hãy lọc sản phẩm');
        }
    }
    function commentFilter(){
        var value = document.querySelector('#select-filter').value;
        if(value!= 0){
            var url = "http://localhost/du_an_1/admin/index.php?act=comment_detail&product_id=".value;
            window.location.href = url;
        }
    }

</script>