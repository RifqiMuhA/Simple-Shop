<?php
    // Data promosi dalam bentuk array
    $promos = [
        [
            "title" => "Diskon 50% untuk Produk Terpilih",
            "description" => "Nikmati diskon besar-besaran untuk produk terpilih selama periode promosi ini.",
            "image" => "assets/images/service1.png"
        ],
        [
            "title" => "Beli 1 Gratis 1 untuk Semua Produk",
            "description" => "Penawaran terbatas untuk pembelian hari ini saja!",
            "image" => "assets/images/service2.png"
        ],
        [
            "title" => "Gratis Ongkir untuk Pembelian di Atas Rp 100.000",
            "description" => "Hanya berlaku untuk wilayah tertentu.",
            "image" => "assets/images/service3.png"
        ]
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSS Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header> 
        <div class="logo">
            <h1>Ten Brother</h1>
        </div>
        <nav>
            <a href="#home">Home</a>
            <a href="#promo">Promo</a>
            <a href="#contact">Contact</a>
        </nav>
    </header>
    <section id="home">
        <div>
            <h1>Hai, Shop Mates!</h1>
            <p>Selamat Datang di Ten Brother Shop! Temukan Makanan yang Anda Inginkan Di Sini!</p>
            <div>
                <a href="#promo" class="btn">Lihat Promo</a>
            </div>
        </div>
        <div>
            <img src="assets/images/landing.png" alt="">
        </div>
    </section>

    <section id="promo">
        <div class="services-header">
            <div>
                <h1>Our Promos</h1>
                <p>Mahal? Gausah takut mates! Kita punya promo menarik</p>
            </div>
            <a href="" class="btn">Contact Us</a> 
        </div>
        <div class="services-items">
            <?php
                foreach($promos as $promo) {
                    echo "<div class='cards'>
                        <div class='image'>
                            <img src='{$promo['image']}' alt='{$promo['title']}'>
                        </div>
                        <h2>{$promo['title']}</h2>
                        <p>{$promo['description']}</p>
                    </div>";
                }
            ?>
        </div>
    </section>

    <section id="contact">
        <h1>Contact Us</h1>
        <p>Kontak kami untuk kebutuhan bisnis</p>
        <div class="contact-detail">
            <div class="contact-form">
                <form action="">
                    <h2>Tell us your problem</h2>
                    <div class="form-group">
                        <div class="input-group">
                            <label for="name">Name</label>
                            <input type="text">
                        </div>
                        <div class="input-group">
                            <label for="subject">Subject</label>
                            <input type="text">
                        </div>
                        <div class="input-group">
                            <label for="email">Email</label>
                            <input type="email">
                        </div>
                        <div class="input-group">
                            <label for="phone">Phone Number</label>
                            <input type="number">
                        </div>
                        <div class="input-group">
                            <label for="message">Message</label>
                            <input type="text">
                        </div>
                    </div>
                    <a type="submit" href="" class="btn btn-form">Submit</a>
                </form>
            </div>
            <div class="location">
                <h1>Out Location</h1>
                <!-- Ganti maps sama iframe yaang udah di copy di gmaps -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2804.829571133038!2d106.86515834981911!3d-6.2316844116996855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f375d8d2442d%3A0x4087ed65c373adce!2sPoliteknik%20Statistika%20STIS!5e0!3m2!1sen!2sid!4v1724038281477!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-desk">
            <h1>Ten Brother Shop</h1>
            <p>Toko terbaik ada di depan anda!</p>
        </div>
        <div class="social">
            <a href="">
                <img src="assets/images/Facebook.svg" alt="Facebook">
            </a>
            <a href="">
                <img src="assets/images/Instagram.svg" alt="Instagram">
            </a>
            <a href="">
                <img src="assets/images/Twitter.svg" alt="Twitter">
            </a>
        </div>
    </footer>
    <main>

    </main>
</body>
</html>