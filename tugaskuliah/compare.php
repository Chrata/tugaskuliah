<?php
$arrHape = array(
    array(
        "SKU" => "12345",
        "Merk" => "Samsung",
        "Model" => "Galaxy S22",
        "Harga" => 18000000,
        "url_gambar" => "galaxys22.jpeg",
        "spec" => array("4GB", "5G", "5150mAH", "256GB")
    ),
    array(
        "SKU" => "54321",
        "Merk" => "Xiaomi",
        "Model" => "Mi 11 Pro",
        "Harga" => 9500000,
        "url_gambar" => "mi11pro.jpg",
        "spec" => array("8GB", "5G", "5050mAH", "256GB")
    ),
    array(
        "SKU" => "AB012",
        "Merk" => "Redmi",
        "Model" => "Redmi Note 12",
        "Harga" => 6500000,
        "url_gambar" => "redminote12.jpg",
        "spec" => array("6GB", "5G", "5350mAH", "256GB")
    ),
    array(
        "SKU" => "78901",
        "Merk" => "Apple",
        "Model" => "iPhone 13 Pro",
        "Harga" => 22000000,
        "url_gambar" => "iphone13pro.jpg",
        "spec" => array("6GB", "5G", "3700mAH", "128GB")
    ),
    array(
        "SKU" => "BCD567",
        "Merk" => "OnePlus",
        "Model" => "OnePlus 10",
        "Harga" => 16000000,
        "url_gambar" => "oneplus10.jpeg",
        "spec" => array("12GB", "5G", "4500mAH", "256GB")
    ),
    array(
        "SKU" => "EFG789",
        "Merk" => "Sony",
        "Model" => "Xperia 5 III",
        "Harga" => 14000000,
        "url_gambar" => "xperia5iii.jpg",
        "spec" => array("8GB", "5G", "4500mAH", "128GB")
    ),
    array(
        "SKU" => "HIJ012",
        "Merk" => "Google",
        "Model" => "Pixel 6 Pro",
        "Harga" => 13000000,
        "url_gambar" => "pixel6pro.jpg",
        "spec" => array("12GB", "5G", "5000mAH", "256GB")
    ),
    array(
        "SKU" => "KLM345",
        "Merk" => "Huawei",
        "Model" => "Mate 50 Pro",
        "Harga" => 19000000,
        "url_gambar" => "mate50pro.jpg",
        "spec" => array("8GB", "5G", "4600mAH", "512GB")
    ),
    array(
        "SKU" => "NOP678",
        "Merk" => "Oppo",
        "Model" => "Find X5 Pro",
        "Harga" => 17000000,
        "url_gambar" => "findx5pro.jpg",
        "spec" => array("12GB", "5G", "4500mAH", "256GB")
    ),
    array(
        "SKU" => "QRS901",
        "Merk" => "Realme",
        "Model" => "GT 2 Pro",
        "Harga" => 15000000,
        "url_gambar" => "gt2pro.jpg",
        "spec" => array("8GB", "5G", "5000mAH", "256GB")
    ),
    array(
        "SKU" => "TUV234",
        "Merk" => "Vivo",
        "Model" => "X70 Pro+",
        "Harga" => 16000000,
        "url_gambar" => "x70proplus.jpg",
        "spec" => array("12GB", "5G", "4500mAH", "256GB")
    ),
    array(
        "SKU" => "WXY567",
        "Merk" => "Asus",
        "Model" => "ROG Phone 6",
        "Harga" => 20000000,
        "url_gambar" => "rogphone6.jpg",
        "spec" => array("16GB", "5G", "6000mAH", "512GB")
    ),
    array(
        "SKU" => "ZAB890",
        "Merk" => "Motorola",
        "Model" => "Edge 30 Ultra",
        "Harga" => 18000000,
        "url_gambar" => "edge30ultra.jpg",
        "spec" => array("8GB", "5G", "5000mAH", "256GB")
    ),
    array(
        "SKU" => "CDE123",
        "Merk" => "Lenovo",
        "Model" => "Legion Phone Duel 3",
        "Harga" => 22000000,
        "url_gambar" => "legionphoneduel3.jpg",
        "spec" => array("12GB", "5G", "5500mAH", "256GB")
    ),
    array(
        "SKU" => "FGH456",
        "Merk" => "ZTE",
        "Model" => "Axon 40 Pro",
        "Harga" => 16000000,
        "url_gambar" => "axon40pro.jpeg",
        "spec" => array("8GB", "5G", "4200mAH", "256GB")
    ),
    array(
        "SKU" => "IJK789",
        "Merk" => "Nokia",
        "Model" => "X100",
        "Harga" => 12000000,
        "url_gambar" => "x100.jpg",
        "spec" => array("6GB", "5G", "4500mAH", "128GB")
    ),
    array(
        "SKU" => "LMN012",
        "Merk" => "Huawei",
        "Model" => "P40 Pro",
        "Harga" => 10000000,
        "url_gambar" => "huaweip40pro.jpg",
        "spec" => array("6GB", "4G", "4000mAH", "128GB")
    ),
    array(
        "SKU" => "OPQ345",
        "Merk" => "Infinix",
        "Model" => "Zero Ultra",
        "Harga" => 8000000,
        "url_gambar" => "zeroultra.jpg",
        "spec" => array("6GB", "5G", "4500mAH", "128GB")
    ),
    array(
        "SKU" => "RST678",
        "Merk" => "Vivo",
        "Model" => "V25",
        "Harga" => 14000000,
        "url_gambar" => "vivov25.jpg",
        "spec" => array("8GB", "5G", "4600mAH", "256GB")
    ),
    array(
        "SKU" => "UVW901",
        "Merk" => "Sharp",
        "Model" => "Aquos R6",
        "Harga" => 17000000,
        "url_gambar" => "aquosr6.jpg",
        "spec" => array("12GB", "5G", "5000mAH", "256GB")
    )
);
$assetPath = "./assets/";
$selected = isset($_GET['selected']) ? explode(",", $_GET['selected']) : [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Perbandingan Hape</title>
    <style>
        body {
            display: flex;
        }
        .sidebar {
            width: 250px;
            background-color: #f4d9a9;
            text-align: center;
            padding: 20px;
        }
        .sidebar img {
            width: 100px; 
            height: 100px;
            border-radius: 50%; 
            object-fit: cover;
            margin-bottom: 20px; 
        }
        .sidebar h2 {
            font-size: 1.5em;
            margin: 0;
            color: #333;
            font-family: 'Roboto', sans-serif;
        }
        .content {
            flex: 1;
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
        }
        .card {
            width: 200px;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            text-align: center;
            background-color: #3498db;
            color: white;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card ul {
            text-align: center;
            list-style-type: none;
            padding: 0;
        }
        .card ul li {
            margin-bottom: 5px;
        }
        .card img {
            width: 100%;
            height: 150px;
            object-fit: contain;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <img src="./assets/logo.jpg" 
        alt="Gambar Logo">
        <h2>SIAM PHONE</h2>
        <a href="index.php">&lt;&lt; Kembali</a>
    </div>
    <div class="content">
        <?php foreach ($selected as $sku): ?>
            <?php 
            $found = false;
            foreach ($arrHape as $hape) {
                if ($hape['SKU'] === $sku) {
                    $found = true;
                    ?>
                    <div class="card">
                        <img src="<?= $assetPath . $hape['url_gambar'] ?>" alt="<?= $hape['Merk'] ?>">
                        <h3><?= $hape['Merk'] ?></h3>
                        <p><?= $hape['Model'] ?></p>
                        <p>Rp <?= number_format($hape['Harga'], 0, ',', '.') ?></p>
                        <p>Spesifikasi:</p>
                        <ul>
                            <?php foreach ($hape['spec'] as $spec): ?>
                                <li><?= $spec ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php
                    break;
                }
            }
            if (!$found) {
                echo "Ponsel dengan SKU $sku tidak ditemukan.";
            }
            ?>
        <?php endforeach; ?>
    </div>
</body>
</html>
