<?php
    include("../../config/config.php");
    
?>
<!-- handle insert category name -->
<?php
    if(isset($_POST['btn_add'])){
        //add
        if(isset($_POST['cat_name'])){
            $cat_name = $_POST['cat_name'];
            $sql = "INSERT INTO categories values ('','$cat_name')";
            execute($sql);
            header('Location:../../index.php?action=quanlydanhmucsanpham');
        }

    }elseif(isset($_POST['btn_update'])){
        //update
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $cat_name = $_POST['cat_name'];
            $sql = "UPDATE categories SET cat_name = '". $cat_name."' WHERE cat_id = ".$id."";
            execute($sql);
            header('Location:../../index.php?action=quanlydanhmucsanpham');
        }
    }else{
        //delete
        if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM categories WHERE cat_id = ".$id."";
            echo$sql;
            execute($sql);
            header('Location:../../index.php?action=quanlydanhmucsanpham');
        }
    }
?>
<!-- handle delete -->

