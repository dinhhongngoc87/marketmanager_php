<!-- jumbotron -->
<div class="container">
        <div class="jumbotron mt-50">
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <p>This is jumboron example</p>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 col-xl-10">
                <a href="#">
                    <button type="button" class="btn btn-outline-secondary">Click me!</button>
                </a>
            </div>
        </div>
        <div class="container-fluid padding">
            <div class="row welcome text-center">
                <div class="col-12">
                    <h1 class="display-4">Build your apllication</h1>
                </div>
                <hr>
                <div class="col-12">
                    <p>Build your apllication</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container padding">
        <div class="row text-center padding">
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-react"></i>
                <h3>React</h3>
                <p>Build the lastest version of React</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa fa-react"></i>
                <h3>React</h3>
                <p>Build the lastest version of React</p>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <i class="fa-brands fa-react"></i>
                <h3>React</h3>
                <p>Build the lastest version of React</p>
            </div>
        </div>
        <hr class="my-4">

    </div>
    <div class="container padding">
        <div class="row text-center padding">
            <div class="col-12">
                <h1 class="display-4">
                    See our products
                </h1>
            </div>
        <?php
            include("./pages/productlist.php")
        ?>   
        </div>
    </div>
    <!-- product -->
    <?php
        if(isset($_GET["quanly"])){
            $tmp = $_GET["quanly"];
        }else{
            $tmp = "";
        }
        if($tmp == "danhmucsanpham"){
            include("./pages/main/danhmuc.php");
        }
        elseif($tmp== "giohang"){
            include("./pages/main/giohang.php");

        }elseif($tmp== "tintuc"){
            include("./pages/main/tintuc.php");

        }else{
            include("./pages/main/lienhe.php");

        }

    ?>