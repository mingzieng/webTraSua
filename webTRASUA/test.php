<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daisy's Tea</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>

<body>

    <div class="content">
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
                    $sql = "SELECT * FROM milktea";
                    $result = $connect->query($sql);
                    if ($result->num_rows > 0) {
                        $count = 0;
                        while($row = $result->fetch_assoc()) {
                            $hidden_class = ($count >= 4) ? ' hidden' : ''; // Ẩn các mục sau mục thứ 3
                            echo '<div class="item'. $hidden_class .'">';
                            echo '<img src="./pic/TràSữa/' . $row["milkteaName"] . '.jpg" alt="' . $row["milkteaName"] . '">';
                            echo '<p>'.$row["milkteaName"]. '</p>';
                            echo '<p>Price: '.$row["priceMt"].'d</p>';
                            echo '</div>';
                            $count++;
                        }
                    } else {
                        echo "0 results";
                    }
                    $connect->close();
                ?>
            </div>
            <button class="show-more" onclick="toggleItems()">Xem Tất Cả</button>
        </section>
        <div class="footer">
            <footer id="footer">
                <p>© Trà sữa DAISY'S TEA. Địa chỉ: 340/18 Đ.Tân Chánh Hiệp 10, P.Tân Chánh Hiệp, Q.12, TP.Hồ Chí Minh</p>
            </footer>
        </div>
    </div>

    <script src="scripts.js"></script>

</body>

</html>
