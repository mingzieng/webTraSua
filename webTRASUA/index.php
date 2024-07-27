<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daisy's Tea</title>
    <!-- <link rel="stylesheet" href="style.css"> -->

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        display: flex;
    }


    .navbar {
        z-index: 2;
        opacity: 0.8;
        position: relative;
    }

    .navbar-menu {
        list-style-type: none;
        display: flex;
        justify-content: center;
        padding-bottom: 20px;
        padding-left: 570px;
        font-size: 19px;
        font-weight: bold;
        padding-top: 120px;
    }

    .navbar .navbar-menu img {
        z-index: 4;
        box-shadow: 0 0 5px;
        width: 130px;
        height: 130px;
        padding: 0;
        justify-content: left;
        position: absolute;
        top: 30px;
        left: 55px;
        border-radius: 60%;
    }


    .navbar-menu li {
        float: left;
    }

    .navbar-menu li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 20px;
        text-decoration: none;
    }

    .navbar-menu li a:hover {
        color: black;
        text-decoration: underline;
    }

    .blurred-header {
        position: absolute;
        width: 100%;
        height: 200px;
        /* Adjust the height as needed */
        background: url('./pic/header.jpg') no-repeat center center;
        background-size: cover;
        display: flex;
        align-items: center;
        justify-content: center;

    }

    .header-content {
        position: relative;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        backdrop-filter: blur(10px);
        /* Apply the blur effect */
        background: rgba(255, 255, 255, 0.1);
        /* 25% opacity */
    }

    .header-content h1 {
        position: relative;
        color: white;
        z-index: 1;
        font-size: 57px;
        text-shadow: 0 2px 5px rgb(241, 88, 27);
        padding-bottom: 30px;
        /* Ensure the text appears above the blurred background */
    }

    .menu {
        width: 17%;
        /* background-color: #f8f8f8; */
        padding: 20px;
        box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        position: fixed;
        top: 250px;
        left: 5px;
    }

    .menu h2 {
        text-align: center;
    }

    .menu ul {
        list-style-type: none;
        padding: 0;
    }

    .menu ul li {
        margin: 10px 0;
    }

    .menu ul li a {
        text-decoration: none;
        color: #333;
        display: block;
        background-color: white;
        border-radius: 5px;
        text-align: center;
        /* background: url('') no-repeat 10px center; */

    }

    .menu ul li a:hover {
        color: rgb(241, 88, 27);
    }

    .content {
        width: 52%;
        /* padding: 20px; */
        top: 200px;
        position: absolute;
        left: 350px;
    }

    .content section {
        margin-bottom: 20px;

    }

    .content h2 {
        border-bottom: 2px solid #ddd;
        padding-bottom: 10px;
    }

    .items {
        display: flex;
        flex-wrap: wrap;
        padding-left: 15px;
    }

    .item {
        width: 20%;
        margin: 1%;
        padding: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        text-align: center;
        border-radius: 5px;
        background-color: #fff;
        display: block;
    }

    .item img {
        max-width: 100%;
        border-radius: 5px;
    }

    .item p {
        margin: 10px 0;
    }

    .hidden {
        display: none;
    }

    .show-more {
        display: block;
        margin: 20px auto;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-align: center;
    }

    .show-more:hover {
        background-color: #45a049;
    }

    .cart-icon {
        position: absolute;
        top: 200px;
        right: 5px;
        width: 22%;
        /* height: 100%; */
        font-size: 24px;
        background-color: #fff;
        /* border-radius: 50%; */
        padding: 10px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }

    .cart-icon-content {
        display: flex;
        align-items: center;
        text-decoration: none;
        color: #333;
    }

    .cart-icon-basket {
        font-size: 20px;
        /* Adjust size as needed */
    }

    .cart-icon-label {
        margin-left: 8px;
        /* Space between icon and label */
        font-size: 14px;
    }

    .cart-icon a {
        text-decoration: none;
        color: #333;
    }

    .cart-icon a:hover {
        color: #4CAF50;
    }

    .footer {
        text-align: center;
        padding: 10px;
        width: 100%;
        position: relative;
        /* bottom: 0; */
    }

    .footer p {
        font-size: 12px;
        font-weight: 400;
        font-family: 'Times New Roman', Times, serif;
    }

    #backToTopBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        right: 30px;
        z-index: 99;
        border: none;
        outline: none;
        background-color: lightcoral;
        color: white;
        cursor: pointer;
        padding: 15px;
        border-radius: 10px;
    }

    #backToTopBtn:hover {
        background-color: orangered;
    }
    .modal {
        display:none; /* Hidden by default */
        position: fixed; /* Stay in place */
        z-index: 1; /* Sit on top */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content/Box */
    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; /* 15% from the top and centered */
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
        position: fixed;
        left:150px;
        top:-140px;
          /* Could be more or less, depending on screen size */
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
    .modal-content .click-buy {
        margin-left: 200px;
        display: flex;
        width: 30%;
        position: absolute;
        right:180px;
        bottom:0;
    }
    .modal-content .click-buy p {
        margin: 20px;
        border: 4px green;
        font-size: 18px;
        font-variant: small-caps;
        font-weight: bold;
        color:skyblue;
        text-decoration: underline;
    }
    .modal-content .click-buy .click {
        width: 12%;
        height:30%;
        padding: 6px 0;
        margin: 0 40px;
        font-size: 20px;
        text-align: center;
        background-color: white;
        color:#45a049;
        border-color: skyblue;
        box-shadow: 0 0 4px skyblue;
        border:none;
    }
    .modal-content .click-buy .click:hover {
        box-shadow: 0 0 5px lightgreen;
    }
    .modal-content .choose-info {
        position: absolute;
        top: 0;
        right: 200px;
    }

    .choose-info .choose-size,
    .choose-info .choose-topping {
        margin-bottom: 10px;
    }

</style>

<body>
    <button onclick="topFunction()" id="backToTopBtn" title="Go to top">
        <svg width="20" height="18" viewBox="0 0 24 24">
            <path d="M12 2l-10 10h6v10h8v-10h6z" />
        </svg>
    </button>

    <!-- Thanh giao diện trên cùng -->
    <nav class="navbar">
        <ul class="navbar-menu">
            <a href="index.php"><img src="./pic/logo.jpg" alt=""></a>
            <li><a href="#home">Trang chủ</a></li>
            <li><a href="#products">Sản phẩm</a></li>
            <li><a href="#footer">Liên hệ</a></li>
        </ul>
    </nav>

    <header class="blurred-header">
        <div class="header-content">
            <h1>Welcome to Daisy's Tea</h1>
        </div>
    </header>


    <!-- icon gio hang -->
    <div class="cart-icon">
        <a href="giohang.html">
            <div class="cart-icon-content">
                <span class="cart-icon-basket">🛒</span>
                <span class="cart-icon-label">Cart</span>
            </div>
        </a>
    </div>


    <div class="menu">
        <ul>
            <li><a href="#featured">
                    <div style="display: flex;">
                        <img style="width: 20px;height: 20px;border-radius:40%;padding-top: 12px;padding-left: 20px"
                            src="./pic/icon/OIP.jpg" alt="">
                        <p style="padding-left: 40px; font-weight: bold;"> Món Nổi Bật</p>
                    </div>
                </a>
            </li>
            <li><a href="#milk-tea">
                    <div style="display: flex;">
                        <img style="width: 20px;height: 20px;border-radius:40%;padding-top: 12px;padding-left: 20px;"
                            src="./pic/icon/OIP.jpg" alt="">
                        <p style="padding-left: 40px; font-weight: bold;"> Trà sữa</p>
                    </div>
                </a></li>
            <li><a href="#fruit-tea">
                    <div style="display: flex;">
                        <img style="width: 20px;height: 20px;border-radius:40%;padding-top: 12px;padding-left: 20px"
                            src="./pic/icon/OIP.jpg" alt="">
                        <p style="padding-left: 40px; font-weight: bold;"> Trà trái cây</p>
                    </div>
                </a></li>
        </ul>
    </div>
    <div class="content">
        <section id="featured">
            <h2>Món Nổi Bật</h2>
            <div class="items">
                <div class="item">
                    <img src="featured1.jpg" alt="Featured Item 1">
                    <p>Item 1</p>
                    <p>Price: $4.50</p>
                </div>
                <div class="item hidden">
                    <img src="featured5.jpg" alt="Featured Item 5">
                    <p>Item 5</p>
                    <p>Price: $5.25</p>
                </div>
            </div>
            <button class="show-more" onclick="toggleItems('featured')">Xem Tất Cả</button>
        </section>
            <section id="milk-tea">
            <h2>Trà Sữa</h2>
            <div class="items">
                <?php 
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "trasuaweb";
                    $connect = new mysqli($servername, $username, $password, $dbname);
                    if ($connect->connect_error) {
                        die("Ket noi that bai: " .$connect->connect_error);
                    }
                    $sql = "Select * from milktea";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                        $count = 0;
                        while($row = $result->fetch_assoc()) {
                            if ($count >= 4) {
                                echo '<div class="item hidden">';
                                echo '<img src="./pic/TràSữa/' . $row["milkteaName"] . '.jpg" class="openModalImg" data-name="'.$row["milkteaName"].'" data-price="'.$row["priceMt"].'">';
                                echo '<p>'.$row["milkteaName"]. '</p>';
                                echo '<p>Price: '.$row["priceMt"].'d</p>';
                                echo '</div>';
                            } else {
                                echo '<div class="item">';
                                echo '<img src="./pic/TràSữa/' . $row["milkteaName"] . '.jpg" class="openModalImg" data-name="'.$row["milkteaName"].'" data-price="'.$row["priceMt"].'">';
                                echo '<p>'.$row["milkteaName"]. '</p>';
                                echo '<p>Price: '.$row["priceMt"].'d</p>';
                                echo '</div>';
                            }
                            $count++;
                        }
                    } else {
                        echo "0 results";
                    }
                ?>
            </div>
        <button class="show-more" onclick="toggleItems('milk-tea')">Xem Tất Cả</button>
    </section>
    <section id="fruit-tea">
        <h2>Trà Trái Cây</h2>
        <div class="items">
            <?php 
                $sql = "Select * from fruitTea";
                $result = $connect->query($sql);
                if ($result->num_rows > 0) {
                    $count = 0;
                    while($row = $result->fetch_assoc()) {
                        if ($count >= 4) {
                            echo '<div class="item hidden">';
                            echo '<img src="./pic/TràTráiCây/' . $row["fruitTeaName"] . '.jpg" class="openModalImg" data-name="'.$row["fruitTeaName"].'" data-price="'.$row["priceFt"].'">';
                            echo '<p>'.$row["fruitTeaName"]. '</p>';
                            echo '<p>Price: '.$row["priceFt"].'d</p>';
                            echo '</div>';
                        } else {
                            echo '<div class="item">';
                            echo '<img src="./pic/TràTráiCây/' . $row["fruitTeaName"] . '.jpg" class="openModalImg" data-name="'.$row["fruitTeaName"].'" data-price="'.$row["priceFt"].'">';
                            echo '<p>'.$row["fruitTeaName"]. '</p>';
                            echo '<p>Price: '.$row["priceFt"].'d</p>';
                            echo '</div>';
                        }
                        $count++;
                    }
                } else {
                    echo "0 results";
                }
                $connect->close();
            ?>
        </div>
        <button class="show-more" onclick="toggleItems('fruit-tea')">Xem Tất Cả</button>
    </section>
    <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2 style="text-align:center;color:white;text-shadow:0 0 5px #45a049 ;width:30%;" id="modalHeader"></h2>
        <img style="width:30%;height:30%;border:3px solid gray;border-radius:5%;" id="modalImg" src="" alt="">
        <p style="text-align:center;width:30%;font-weight:bold;" id="modalPrice"></p>
        <div class="click-buy">
            <button class="click">-</button>
            <p>0</p>
            <button class="click">+</button>
        </div>
        <div class = "choose-info">
            <div class = "choose-size">
                <p>Chọn size: </p>
                <input type="radio" name="size">M
                <input type="radio" name="size">L
                <input type="radio" name="size">XL
            </div>
            <div class = "choose-topping">
                <p>Chọn topping: </p>
                <input type="checkbox" name = "topping">Trân châu đen
                <input type="checkbox" name = "topping">Trân châu trắng
                <input type="checkbox" name = "topping">Thạch dừa
                <input type="checkbox" name = "topping">Phô mai
                <input type="checkbox" name = "topping">Thạch cá heo
            </div>
        </div>
    </div>
</div>

        <div class="footer">
            <footer id="footer">
                <p>© Trà sữa DAISY'S TEA. Địa chỉ: 340/18 Đ.Tân Chánh Hiệp 10, P.Tân Chánh Hiệp, Q.12, TP.Hồ Chí Minh
                </p>
            </footer>
        </div>
    </div>
    </div>


    <script src="scripts.js"></script>

</body>

</html>