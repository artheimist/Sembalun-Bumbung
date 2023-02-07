<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MAKANAN KHAS</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/khas/style.css">

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
    <!-- home section starts  -->
    <section class="home" id="home">

        <div class="content">
            <h3>Makanan Khas Sembalun</h3>
            <p>Kecamatan Sembalun merupakan salah satu kacamatan dengan hasil alam yang melimpah. Lebih spesifiknya di
                Desa Sembalun Bumbung, dengan berbagai jenis sayuran, buah-buahan, rempah-rempah dan kopi. Yang dimana
                penghasilan tersebut bisa di olah menjadi produk mentah atau siap saji!</p>

        </div>

        <div class="image">
            <img src="img/1-img.png" alt="">
        </div>

    </section>
    <!-- home section ends -->

    <!-- speciality section starts  -->

    <section class="speciality" id="speciality">

        <h1 class="heading"> Oleh-Oleh <span>Sembalun</span> </h1>

        <div class="box-container">

            <div class="box">
                <img class="image" src="img/0g.jpg" alt="">
                <div class="content">
                    <img src="img/s-1.png" alt="">
                    <h3>Kopi Juang</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="img/1g.jpg" alt="">
                <div class="content">
                    <img src="img/s-2.png" alt="">
                    <h3>Strawberry</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="img/2.jpg" alt="">
                <div class="content">
                    <img src="img/s-3.png" alt="">
                    <h3>Buncis</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="img/3g.jpeg" alt="">
                <div class="content">
                    <img src="img/s-4.png" alt="">
                    <h3>Stick Wortel</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="img/4g.jpeg" alt="">
                <div class="content">
                    <img src="img/s-5.png" alt="">
                    <h3>Black Garlic</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>
            <div class="box">
                <img class="image" src="img/10g.jpg" alt="">
                <div class="content">
                    <img src="img/s-6.png" alt="">
                    <h3>Kripik Kentang</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda inventore neque amet ipsa
                        tenetur voluptates aperiam tempore libero labore aut.</p>
                </div>
            </div>

        </div>

    </section>

    <!-- speciality section ends -->
    <script src="js/script.js"></script>
</body>

</html>