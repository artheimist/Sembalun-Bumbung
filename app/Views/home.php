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
    <link rel="stylesheet" href="css/home/home.css">
    <!-- font link -->
</head>
<body>

    <!-- header start -->
    <div class="header">
        <a class="logo" href="">Logo</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="/">Home</a>
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



    <!-- header end -->

    <!-- search -->

    <!-- <div class="search-form">
        <div class="fas fa-times" id="close-search"></div>
        <form action="">
            <input type="search" name ="" placeholder="search here .." id="search-box">
            <label for="search-box" class="fas fa-search"></label>
        </form>
    </div> -->
    <!-- home section start -->
    <section class="home" id="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="box" style="background:url(img/test.jpg) no-repeat;">
                        <div class="content">
                            <span>never stop</span>
                            <h3>exploring</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto error minus, molestiae ab facere exercitationem inventore optio neque numquam fugiat qui natus asperiores eaque aliquam incidunt sit molestias. Quo, explicabo?</p>
                            <a href="" class="btn">get started</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box second" style="background:url(img/test2.jpeg) no-repeat;">
                        <div class="content">
                            <span>never stop</span>
                            <h3>exploring</h3>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Architecto error minus, molestiae ab facere exercitationem inventore optio neque numquam fugiat qui natus asperiores eaque aliquam incidunt sit molestias. Quo, explicabo?</p>
                            <a href="" class="btn">get started</a>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!-- home section end -->
    <!-- category section -->
    <section class="category">

        <h1 class="heading"> <span>Gallery</span> Sembalun <span>Bumbung</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="img/test3.jpg" alt="">
                <h3>jump jump</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, dolorem.</p>
                <a href="pariwisata.html" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="img/test3.jpg" alt="">
                <h3>jump jump</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, dolorem.</p>
                <a href="sejarah.html" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="img/test3.jpg" alt="">
                <h3>jump jump</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, dolorem.</p>
                <a href="struktur.html" class="btn">read more</a>
            </div>
            <div class="box">
                <img src="img/test3.jpg" alt="">
                <h3>jump jump</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita, dolorem.</p>
                <a href="khas.html" class="btn">read more</a>
            </div>
        </div>
    </section>

    <!-- end category -->
    <!-- start sejarah section -->
    <section class="container-sejarah">
        <h1 class="heading"> <span>Sejarah</span> Sembalun <span>Bumbung</span></h1>
        <div class="container">
            <div class="gambar">
                <img src="img/0g.jpg" alt="">
            </div>
            <div class="isi">
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem id possimus commodi quam dolore, provident architecto ipsa quaerat magnam nostrum et! Voluptatibus hic commodi vel officia enim. Harum ut illum deserunt sapiente blanditiis hic, id error, ratione nihil eos illo. Illo suscipit dolorum explicabo tempora fugiat dolore eum quibusdam nam hic. Beatae dolorum aperiam eum quos consectetur ipsam atque labore maiores laboriosam, aliquam eius obcaecati, impedit maxime, numquam doloremque. Quis esse sint quod. Neque hic amet expedita voluptate facilis modi esse in minima. Delectus ipsum et vel ducimus cum unde eum amet. Repudiandae exercitationem in consequuntur libero ullam ipsum. Doloribus!</p>
                <a href="sejarah.html" class="btn">Read More</a>
            
            </div>
        </div>
    </section>

    <!-- end section -->

    <!-- strktur section -->




    <!-- end struktur -->

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
    <script type="text/javascript" src="js/script.js"></script>
    <!-- js link -->
    
</body>
</html>