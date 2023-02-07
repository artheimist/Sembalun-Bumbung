<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Beritacoding</title>

    <link rel="stylesheet" href="/css/admin/overview.css" />
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
</head>

<body>
	<main class="main">
		<aside class="side-nav">
            <div class="brand">
                <h2>Sembalun Bumbung</h2>
            </div>
            <nav>
				<a href="http://localhost:8080/Admin/Overview" >Overview</a>
                <a href="http://localhost:8080/Admin/Sejarah" >Sejarah</a>
                <a href="http://localhost:8080/Admin/Pariwisata" class="active">Pariwisata</a>
                <a href="">Setting</a>
                <a href="">Logout</a>
            </nav>
            </nav>
        </aside>

		<div class="content">
			<h1>Write new Article</h1>

			<form action="<?= base_url(); ?>/Admin/PariwisataAdd/AddArtikelP" method="POST" enctype="multipart/form-data" >
				<label for="title">Title*</label>
				<input type="text" name="title" placeholder="Judul artikel" required title="Wajib tulis judul artikel"/>

				<label for="decription">Description</label>
				<input type="text" name="description" placeholder="deskripsi singkat artikel" required title="Wajib tulis deskripsi artikel"/>
				
				<label for="content">Konten</label>
				<textarea name="content" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."></textarea>

				<label for="file">Upload Gambar</label>
				<input type="file" name="file" required title="Pilih File" id="file">

				<div>
					<button type="submit" name="draft" value="draft" class="button" value="true">Save to Draft</button>
					<button type="submit" name="draft" value="publish" class="button button-primary" >Publish</button>
				</div>


			</form>
		</div>
	</main>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>
	<script >
		document.querySelector(".button").addEventListener('click', function(){

		Swal.fire("Our First Alert", "With some body text and success icon!", "success");

		});
	</script>
</body>

</html>