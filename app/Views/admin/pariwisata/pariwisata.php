<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/admin/overview.css" />
</head>
<body>
    <div class="main">
        <aside class="side-nav">
            <div class="brand">
                <h2>Sembalun Bumbung</h2>
            </div>
            <nav>
				<a href="Overview" >Overview</a>
                <a href="Sejarah" >Sejarah</a>
                <a href="Pariwisata" class="active">Pariwisata</a>
                <a href="">Setting</a>
                <a href="">Logout</a>
            </nav>
        </aside>
        <div class="content">
			<h1>List Artikel Pariwisata</h1>

			<div class="toolbar">
				<a href="PariwisataAdd" class="button button-primary" role="button">+ Tulis Artikel</a>
			</div>

			<table class="table">
				<thead>
					<tr>
						<th>Title</th>
						<th style="width: 15%;" class="text-center">Status</th>
						<th style="width: 25%;" class="text-center">Action</th>
					</tr>
				</thead>
				<tbody>
				<?php foreach ($pariwisata as $p): ?>
					<tr>
						<td>
							<div><?= $p['judul'];?></div>
							<div class="text-gray"><small><?= $p['updated_at'];?><small></div>
						</td>
						<td class="text-center text-black"><?= $p['status'];?></td>
						<td>
							<div class="action">
								<a href="<?= base_url("/Admin/Pariwisata/delete/" . $p['id']);?>" class="button button-small button-danger" role="button">Delete</a>
								
								<a href="<?= base_url("/Admin/Pariwisata/Edit/" . $p['id']);?>" class="button button-small" role="button">Edit</a>
								
							</div>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
		</div>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>