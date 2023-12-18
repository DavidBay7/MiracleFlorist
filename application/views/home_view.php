<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<section class="home" id="home">

    <div class="content">
        <h3>Gallery of <p>Miracle Florist</p>
        </h3>
        <span> Moment of Your Beauty Flowers.</span>
    </div>
</section>



<!-- about section  -->

<section class="about" id="about">

    <h1 class="heading"> <span> About </span> Us </h1>

    <div class="row">

        <div class="video-container">
            <video src="<?= base_url("assets/pictures/2.mp4")?>" loop autoplay muted></video>
            <h3>Best Flower Sellers</h3>
        </div>


        <div class="content">
            <h3>Why Choose Us?</h3>
            <p>Kami percaya bahwa kombinasi antara kualitas produk, pilihan yang luas, desain kreatif, layanan pelanggan
                yang ramah, pengiriman tepat waktu, dan harga yang kompetitif menjadikan kami sebagai toko bunga terbaik
                untuk memenuhi kebutuhan dan harapan Anda. Percayakan kepada kami untuk memberikan pengalaman berbelanja
                bunga yang tak terlupakan.</p>

        </div>

    </div>

</section>

<!-- icons section  -->

<section class="icons-container">

    <div class="icons">
        <img src="<?= base_url("assets/pictures/trolley.png")?>?" alt="">
        <div class="info">
            <h3>Promo gratis ongkos kirim</h3>
            <span>Untuk pemesanan tertentu</span>
        </div>
    </div>

    <div class="icons">
        <img src="<?= base_url("assets/pictures/return.png")?>" alt="">
        <div class="info">
            <h3>Pengembalian uang</h3>
            <span>Jika pesanan tidak sesuai</span>
        </div>
    </div>

    <div class="icons">
        <img src="<?= base_url("assets/pictures/gift.png")?>" alt="">
        <div class="info">
            <h3>Penawaran & Bonus</h3>
            <span>Untuk pemesanan tertentu</span>
        </div>
    </div>

    <div class="icons">
        <img src="<?= ("assets/pictures/budget.png")?>" alt="">
        <div class="info">
            <h3>Keamanan transaksi</h3>
            <span>Via Bank atau scan QR</span>
        </div>
    </div>


</section>

<!-- products section -->

<section class="products" id="products">

    <h1 class="heading"> Latest <span>Products</span></h1>

    <div class="box-container">

        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro1.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Bouquet</h3>
                    <div class="price"> Rp375,000 </div>
                </div>
            </a>
        </div>

        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro2.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Bouquet</h3>
                    <div class="price"> Rp375,000 </div>
                </div>
            </a>
        </div>
        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro3.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Bouquet</h3>
                    <div class="price"> Rp375,000 </div>
                </div>
            </a>
        </div>
        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro4.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Pot</h3>
                    <div class="price"> Rp300,000 </div>
                </div>
            </a>
        </div>
        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro5.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Pot</h3>
                    <div class="price"> Rp300,000 </div>
                </div>
            </a>
        </div>
        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro6.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Pot</h3>
                    <div class="price"> Rp300,000 </div>
                </div>
            </a>
        </div>
        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro7.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Pot</h3>
                    <div class="price"> Rp275,000 </div>
                </div>
            </a>
        </div>
        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro8.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Basket</h3>
                    <div class="price"> Rp275,000 </div>
                </div>
            </a>
        </div>
        <div class="box">
            <a href="<?= base_url("customer/transaction") ?>">
                <div class="image">
                    <img src=<?= base_url("assets/pictures/pro9.png") ?> alt="">
                </div>
                <div class="content">
                    <h3>Flower Basket</h3>
                    <div class="price"> Rp275,000 </div>
                </div>
            </a>
        </div>
    </div>

</section>


<!-- review section  -->

<section class="review" id="review">

    <h1 class="heading"> Customer's <span>Review</span></h1>

    <div class="box-container">

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Desainnya sangat kreatif dan unik, dan stafnya sangat membantu dalam memberikan saran yang tepat.</p>
            <div class="user">
                <img src="assets/pictures/female1.png" alt="">
                <div class="user-info">
                    <h3>Putri</h3>
                    <span>Happy Customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>

        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Pengiriman selalu tepat waktu, dan mereka benar-benar memahami betapa pentingnya kualitas dan presentasi.
            </p>
            <div class="user">
                <img src="assets/pictures/male1.png" alt="">
                <div class="user-info">
                    <h3>Budi</h3>
                    <span>Happy Customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
        <div class="box">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p>Saya sangat merekomendasikan toko bunga ini kepada siapa pun yang mencari pengalaman belanja bunga yang
                luar biasa.</p>
            <div class="user">
                <img src="assets/pictures/female2.png" alt="">
                <div class="user-info">
                    <h3>Fira</h3>
                    <span>Happy Customer</span>
                </div>
            </div>
            <span class="fas fa-quote-right"></span>
        </div>
    </div>
</section>






<!-- contact section  -->

<section class="contact" id="contact">
    <h1 class="heading"><span>Contact</span> Us</h1>
    <div class="row">
        <form action="<?= base_url("admin/message_add") ?>" method="post">
            <input type="text" name="name" placeholder="Name" class="box" value="<?= set_value("name") ?>">
            <?= form_error("name", "<small class='col-9 text-danger'>"), "</small>" ?>
            <input type="email" name="email" placeholder="Email" class="box" value="<?= set_value("email") ?>">
            <?= form_error("email", "<small class='col-9 text-danger'>"), "</small>" ?>
            <input type="number" name="number" placeholder="Number" class="box" value="<?= set_value("number") ?>">
            <?= form_error("number", "<small class='col-9 text-danger'>"), "</small>" ?>
            <textarea name="message" class="box" placeholder="Message" id="" cols="30" rows="10"
                value="<?= set_value("message") ?>"></textarea>
            <?= form_error("message", "<small class='col-9 text-danger'>"), "</small>" ?>
            <input type="submit" value="Send Message" class="btn">
        </form>
        <div class="image">
            <img src="assets/pictures/florist.png" alt="">
        </div>

    </div>
</section>
</section>