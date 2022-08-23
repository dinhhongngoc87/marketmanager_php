<?php
    include("../../config/config.php");
    
?>




<!-- handle insert category name -->
<?php
    if(isset($_POST['btn_add'])){
        //add
        $prod_name=$prod_img= "";
        $prod_price=$prod_qty=$prod_status=$prod_category =0;
        if (!empty($_POST)) {
            if (isset($_POST['prod_name'])) {
                $prod_name = $_POST['prod_name'];
            }
            if (isset($_POST['prod_price'])) {
                $prod_price = $_POST['prod_price'];
            }
            if (isset($_POST['prod_img'])) {
                $prod_img = $_POST['prod_img'];
            }
            if (isset($_POST['prod_qty'])) {
                $prod_qty = $_POST['prod_qty'];
            }
            if (isset($_POST['prod_status'])) {
                $prod_status = $_POST['prod_status'];
            }
            if (isset($_POST['prod_category'])) {
                $prod_category = $_POST['prod_category'];
            }
            $sql = "INSERT INTO products (prod_name, prod_price, prod_quantity, prod_img, prod_status, prod_category) values ('".$prod_name."', ".$prod_price.", ".$prod_qty.",'".$prod_img."', ".$prod_status.", ".$prod_category.")";
            echo$sql;
            execute($sql);
            header('Location:../../index.php?action=quanlysanpham');

        }

    }elseif(isset($_POST['btn_update'])){
        //update
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $cat_name = $_POST['cat_name'];
            $sql = "UPDATE categories SET cat_name = '". $cat_name."' WHERE cat_id = ".$id."";
            execute($sql);
            header('Location:../../index.php?action=quanlysanpham');
        }
    }else{
        //delete
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM categories WHERE cat_id = ".$id."";
            echo$sql;
            execute($sql);
            header('Location:../../index.php?action=quanlysanpham');
        }
    }
?>
<!-- handle delete -->

