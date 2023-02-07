<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Beritacoding</title>

    <link rel="stylesheet" href="/css/admin/overview.css" />
</head>

<body>
	<main class="main">
		<aside class="side-nav">
            <div class="brand">
                <h2>Sembalun Bumbung</h2>
            </div>
            <nav>
				<a href="http://localhost:8080/Admin/Overview" >Overview</a>
                <a href="http://localhost:8080/Admin/Sejarah" class="active">Sejarah</a>
                <a href="http://localhost:8080/Admin/Pariwisata">Pariwisata</a>
                <a href="">Setting</a>
                <a href="">Logout</a>
            </nav>
        </aside>

		<div class="content">
			<h1>Write new Article</h1>

			<form action="<?= base_url()?>/Admin/SejarahAdd/addArtikel" method="POST" enctype="multipart/form-data">
				<label for="title">Title*</label>
				<input type="text" name="title" placeholder="Judul artikel" required title="Wajib tulis judul artikel"/>

				<label for="title">Description</label>
				<input type="text" name="description" placeholder="deskripsi singkat artikel" required title="Wajib tulis deskripsi artikel"/>
				
				<label for="content">Konten</label>
				<textarea name="content" cols="30" rows="10" placeholder="Tuliskan isi pikiranmu..."></textarea>

				<label for="file">Upload Gambar</label>
				<input type="file" name="file">
				
				<div>
					<button type="submit" name="draft" value="draft"  class="button" value="true">Save to Draft</button>
					<button type="submit" name="draft" value="publish" class="button button-primary" value="false">Publish</button>
				</div>
			</form>
		</div>
	</main>
</body>

</html>