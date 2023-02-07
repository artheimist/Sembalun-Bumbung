<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- css link -->
    <link rel="stylesheet" href="css/sejarah/style.css">
    <!-- font link -->
</head>
<body>

    <!-- header start -->
    <div class="header">
        <a class="logo" href="">Logo</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="<?= base_url()?>">Home</a>
            <a href="Sejarah">Sejarah</a>
            <a href="Pariwisata">Pariwisata</a>
            <a href="Oleh-Oleh">Oleh-Oleh</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
         <?php if(session("logged_in")):?>
            <a href="/Admin/Overview"><button class="login">Admin</button></a>
        <?php else :?>
            <a href="Login"><button class="login">login</button></a>
        <?php endif;?>
    </div>
    <!-- end -->
    <!-- start main -->
    <!-- <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background:url(img/test.jpg) no-repeat;">
                        
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box second" style="background:url(img/test2.jpeg) no-repeat;">
                       
                    </div>
                </div>
            
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section> -->
    <!-- end -->

    <!-- section start -->

    <section class="popular" id="popular">

        <h1 class="heading"> Sejarah <span>Sembalun</span> Bumbung </h1>

        <div class="box-container">
            <!--  -->
            <?php foreach ($sejarah as $j): ?>
            <!--  -->
            <div class="box">
                <img src="uploads/<?= $j['gambar']; ?>" alt="">
                <h3><?= $j['judul']; ?></h3>
                <div class="stars">
                    <p><?= $j['deskripsi']; ?>
                    </p>
                </div>
                <a href="<?php base_url()?>/Sejarah/Detail/<?=$j['id']?>" class="btn">Read More</a>
            </div>
            <!--  -->
            <?php endforeach; ?>
            <!--  -->
        </div>

    </section>
    <!-- section end -->

     <!-- start footer -->
     <section class="footer">

        <div class="box-container-foot">
    
            <div class="box-foot">
                <h3>quick links</h3>
                <a href="">Home</a>
                <a href="">Sejarah</a>
                <a href="">Pariwisata</a>
                <a href="khas.html">Oleh-Oleh</a>
            </div>
    
            <div class="box-foot">
                <h3>Contact Us</h3>
                <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
                <a href="#"> <i class="fab fa-github"></i> github </a>
            </div>
        </div>
    
    </section>
    
    <!-- end footer -->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- js link -->
    <script src="js/script.js"></script>
</body>
</html>