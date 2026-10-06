<?php

$produk = [
    [
        "nama" => "Laptop AlienWare",
        "kategori" => "Laptop",
        "harga" => 12500000,
        "stok" => 3,
        "gambar" => "images/laptop.jpg"
    ],

    [
        "nama" => "Madcatz Rat",
        "kategori" => "Mouse",
        "harga" => 1200000,
        "stok" => 7,
        "gambar" => "images/mouse.jpg"
    ],

    [
        "nama" => "HyperX Alloy Origins",
        "kategori" => "Keyboard",
        "harga" => 1799000,
        "stok" => 2,
        "gambar" => "images/keyboard.jpg"
    ],

    [
        "nama" => "Steelseries Artics 7",
        "kategori" => "Audio",
        "harga" => 2600000,
        "stok" => 9,
        "gambar" => "images/headset.jpg"

    ],

    [
        "nama" => "DJI Osmo Pocket",
        "kategori" => "Kamera",
        "harga" => 1350000,
        "stok" => 0,
        "gambar" => "images/osmo.jpg"
    ],

    [
        "nama" => "Sandisk 1TB",
        "kategori" => "Storage",
        "harga" => 998000,
        "stok" => 10,
        "gambar" => "images/sandisk.jpg"
    ]
];


$jumlahProduk = count($produk);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cia Store - Katalog Produk</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>

    <nav class="navbar">

        <div class="container navbar-content">

            <div class="logo">
                Cia<span>Store</span>
            </div>

            <div class="menu">

                <a href="#home">Home</a>

                <a href="#produk">Produk</a>

                <a href="#tentang">Tentang</a>

            </div>

        </div>

    </nav>


   <section class="hero" id="home">

        <div class="container hero-content">

            <div class="hero-text">

                <p class="hero-label">
                    CIA STORE
                </p>

                <h1>
                    Cari perangkat apa aja
                    <span>disini aja!</span>
                </h1>

                <p class="hero-description">
                   perangkat komputer? ada semua disini tinggal cari aja dibawah
                   gacor kan?
                </p>

                <a href="#produk" class="hero-button">
                    liat liat
                </a>

            </div>

        </div>

    </section>


    <section class="info-produk">

        <div class="container">

            <div class="box-info">

                <div>

                    <p class="info-label">
                        Katalog Cia Store
                    </p>

                    <h2>
                        <?php echo $jumlahProduk; ?> Produk
                    </h2>

                    <p>
                        Ini dia produk produk kita
                    </p>

                </div>

            </div>

        </div>

    </section>


    <section class="produk-section" id="produk">

        <div class="container">

            <div class="section-header">

                <p class="section-label">
                    PRODUK KAMI
                </p>

                <h2>
                    Katalog Produk
                </h2>

                <p>
                    Pilih produk teknologi yang kamu butuhkan.
                </p>

            </div>

            <!--- KOTAK PRODUK --->
            <div class="product-grid">


                <?php foreach ($produk as $item) { ?>


                    <div class="product-card">


                        <div class="product-image">

                            <?php

                            if ($item["gambar"] != "") { ?>

                            <img src="<?php echo $item["gambar"]; ?>"
                            alt="<?php echo $item["nama"]; ?>">

                            <?php } else { ?>

                             📦 

                             <?php } ?>

                        </div>


                        <!-- KATEGORI -->

                        <p class="product-category">

                            <?php echo $item["kategori"]; ?>

                        </p>


                        <!-- NAMA PRODUK -->

                        <h3 class="product-name">

                            <?php echo $item["nama"]; ?>

                        </h3>


                        <!-- HARGA -->

                        <p class="product-price">

                            Rp<?php

                            echo number_format(
                                $item["harga"],
                                0, ',', '.'
                            );

                            ?>

                        </p>


                        <!-- STOK -->

                        <div class="stock">

                            <span>
                                Stok:
                            </span>

                            <strong>
                                <?php echo $item["stok"]; ?>
                            </strong>

                        </div>



                        <!-- STATUS PRODUK -->

                        <?php if ($item["stok"] > 0) { ?>


                            <!-- PRODUK TERSEDIA -->

                            <div class="status available">

                                <span class="status-dot"></span>

                                Tersedia

                            </div>


                            <!-- TOMBOL BELI -->

                            <button class="buy-button">

                                Beli Sekarang

                            </button>


                        <?php } else { ?>


                            <!-- PRODUK HABIS -->

                            <div class="status unavailable">

                                <span class="status-dot"></span>

                                Stok Habis

                            </div>


                            <!-- TOMBOL NONAKTIF -->

                            <button class="buy-button disabled" disabled>

                                Stok Habis

                            </button>


                        <?php } ?>


                    </div>


                <?php } ?>


            </div>

        </div>

    </section>



    <!-- TENTANG CIA STORE -->

    <section class="about-section" id="tentang">

        <div class="container">

            <div class="about-content">

                <p class="section-label">
                    TENTANG KAMI
                </p>

                <h2>
                    Cia Store
                </h2>

                <p>
                    Cia Store merupakan toko yang menyediakan
                    berbagai perangkat dan aksesoris teknologi.
                    Kami menyediakan berbagai produk elektronik untuk 
                    memenuhi setup gaming ente
                </p>

            </div>

        </div>

    </section>



    <!-- =================================
         FOOTER
    ================================== -->

    <footer>

        <div class="container footer-content">

            <div>

                <h3>
                    Cia Store
                </h3>

                <p>
                    Toko perangkat dan aksesoris teknologi.
                </p>

            </div>

            <div>

                <h3>
                    Kontak: +62 812 3434 3434
                </h3>

                <p>
                    Email: ciastore@gmail.com

        </div>

    </footer>


</body>

</html>