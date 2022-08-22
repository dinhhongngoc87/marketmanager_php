<div class="clear"></div>
<div class="main">
    <?php
        if(isset($_GET['action'])){
            $tmp = $_GET['action'];
            if(isset($_GET['query'])){
                $query = $_GET['query'];
            }else{
                $query ="";
            }
        }else{
            $tmp = "";
        }
        if($tmp=="quanlydanhmucsanpham"){
            if( $query=="update"){
                include("./modules/quanlydanhmucsanpham/update.php");
            }else{
                include("./modules/quanlydanhmucsanpham/display.php");
            }
        }elseif($tmp=="quanlysanpham"){
            // include("./modules/quanlysanpham/display.php");
        }elseif($tmp=="quanlybaiviet"){
            // include("./modules/quanlybaiviet/display.php");
        }else{
            // include("./modules/quanlydanhmucbaiviet/display.php");
        }
    ?>
</div>