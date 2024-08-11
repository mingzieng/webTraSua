<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daisy's Tea</title>
    <link rel="stylesheet" href="style.css">

</head>


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
                        <img 
                            src="./pic/icon/OIP.jpg" alt="">
                        <p style="padding-left: 40px; font-weight: bold;"> Món Nổi Bật</p>
                    </div>
                </a>
            </li>
            <li><a href="#milk-tea">
                    <div style="display: flex;">
                        <img 
                            src="./pic/icon/OIP.jpg" alt="">
                        <p style="padding-left: 40px; font-weight: bold;"> Trà sữa</p>
                    </div>
                </a></li>
            <li><a href="#fruit-tea">
                    <div style="display: flex;">
                        <img
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