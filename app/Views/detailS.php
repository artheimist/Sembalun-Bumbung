<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/detail/pariwisata.css">
</head>
<body>
    <div class="header">
        <a class="logo" href="">Logo</a>
        <nav class="navbar">
            <div id="nav-close" class="fas fa-times"></div>
            <a href="/">Home</a>
            <a href="/Sejarah">Sejarah</a>
            <a href="/Pariwisata">Pariwisata</a>
            <a href="/Khas">Oleh-Oleh</a>
        </nav>
        <div class="icons">
            <div id="menu-btn" class="fas fa-bars"></div>
        </div>
         
        <?php if(session("logged_in")):?>
            <a href="/Admin/Overview"><button class="login">Admin</button></a>
        <?php else :?>
            <a href="/Login"><button class="login">login</button></a>
        <?php endif;?>
    </div>
    <!-- main -->
    <div class="content">
            <h1><?= $sejarah['judul']?></h1>
            <div class="image">
                <img src="/uploads/<?=$sejarah['gambar']?>" alt="">
            </div>
            <p><?= $sejarah['konten']?></p>        
    </div>

    <!-- end -->

    <section class="footer">

        <div class="box-container-foot">
    
            <div class="box-foot">
                <h3>quick links</h3>
                <a href="">Home</a>
                <a href="">Sejarah</a>
                <a href="pariwisata.html">Pariwisata</a>
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
</body>
</html>