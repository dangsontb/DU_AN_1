<?php
    
    function add_product(){
        if(isset($_POST['themmoi']) && $_POST['themmoi']){
            $name = $_POST['name'] ;
            $price = $_POST['price'] ;
            $image = $_FILES['image']['name'] ;
            
            $description = $_POST['description'] ;
            $sale = $_POST['sale'] ;
            $create_at = $_POST['create_at'] ;
            $view = $_POST['view'] ;
            $cate_id  = $_POST['cate_id'] ;
            $brand_id  = $_POST['brand_id'] ;
            // $image_description = $_FILES['img_product']['name'] ;
            $image_tail = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            // $image_description_tail = strtolower(pathinfo($image, PATHINFO_EXTENSION));
            $tails = ['png','jpg','jpeg','pdf'];
        
            $target_dir = "../uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $error =[];
        
            if(!empty($name)){
                $product_by_name = product_select_name($name);
                if(is_array($product_by_name)){
                    $error['name'] =" Tên sản phẩm đã tồn tại !" ;
                }
                if(strlen($name) > 255 ) $error['name'] = "Tên phải ngắn hơn 255 ký tự";
            }else{
                $error['name'] ="Nhập tên sản phẩm !"  ;
            }
            if(!empty($price)){
                if($price < 0 ) $error['price'] = "Giá phải lớn hơn 0";
            }else{
                $error['price'] = "Nhập giá sản phẩm" ;
            }
        
            if(!empty($image)){
                if(!in_array($image_tail, $tails)  && filesize($image) > 8192){
                    $error['image'] = "Phải là ảnh  và kích thước nhỏ hơn 1mb";
                }
            }else{
                $error['image'] = "Vui lòng chọn ảnh";
            }
        
            if(empty($description)){
                $error['description'] = "Nhập mô tả" ;
            }
        
            if(empty($brand_id)){
                $error['brand'] = "Chọn thương hiệu" ;
            }
            
            if(empty($cate_id)){
                $error['cate'] =  "Chọn danh mục";
            }
        
            if(!empty($sale) ){
                if($sale < 1 && $sale > 99 ){
                    $error['sale'] = "Giảm giá phải lớn hơn và nhỏ hơn 100";
                }
            }else{
                $error['sale'] = "Nhập giảm  giá";
            }
        
            if(!empty($view) ){
                if($view < 1){
                    $error['view'] = "View phải lớn hơn 0";
                }
            }else{
                $error['view'] = "Nhập view";
            }
        
            if(empty($create_at)){
                $error['create_at'] = "Vui lòng chọn ngày" ;
            }
        
            if(empty($error)){
                move_uploaded_file($_FILES['image']['tmp_name'], $target_file);
        
                product_insert($name, $price, $image, $description, $sale, $create_at, $view, $cate_id, $brand_id);
            }
            // if(!empty($image_description)){
            //     if(!in_array($image_description_tail, $tails)  && filesize($image_description) > 8192){
            //         $error['image_description'] = "Phải là ảnh  và kích thước nhỏ hơn 1mb";
            //     }
            // }else{
            //     $error['image_description'] = "Vui lòng chọn ảnh";
            // }
        
        
        }
       
    }

