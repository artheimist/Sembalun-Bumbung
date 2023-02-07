<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Sembalun Bumbung</title>

    <link rel="stylesheet" href="/css/admin/overview.css" />
</head>
<body>
    <main class="main">
        <aside class="side-nav">
            <div class="brand">
                <h2>Sembalun Bumbung</h2>
            </div>
            <nav>
                <a href="Overview" class="active">Overview</a>
                <a href="Sejarah">Sejarah</a>
                <a href="Pariwisata">Pariwisata</a>
                <a href="<?= base_url()?>">Back Home</a>
                <a href="<?= base_url('/Login/Logout')?>">Logout</a>
            </nav>
        </aside>
    
        <div class="content">
            <h1>Overview</h1>
      
            <div style="display:flex; gap: 1em">
              <div class="card text-center" style="width: 100px;">
                <h2>
                  13
                </h2>
                <p><a href="">Artikel Sejarah</a></p>
              </div>
              <div class="card text-center" style="width: 100px;">
                <h2>
                  13
                </h2>
                <p><a href="">Artikel Pariwisata</a></p>
              </div>
              <div class="card text-center" style="width: 100px;">
                <h2>
                  13
                </h2>
                <p><a href="">Jumlah Admin</a></p>
              </div>
            </div>
      
          </div>
	</main>
</body>
</html>