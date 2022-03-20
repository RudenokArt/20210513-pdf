<form action="../core/contacts.php" enctype="multipart/form-data" method="post">
	<div class="container pt-4">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<p class="h5">Логотип:</p>
				<i>Логотип должен быть в формате .png на прозрачном фоне</i>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<input type="file" name="header-logo">
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
			<button class="btn btn-outline-info">
					<i class="fa fa-floppy-o" aria-hidden="true"></i>
				</button>			
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<img src="../img/header-logo.png" alt="log" height="100">
			</div>
		</div>
	</div>
</form>
<form action="../core/contacts.php" method="post">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="h5">
					Ссылка на основной сайт:
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<input type="text" class="form-control" name="main-site-url">
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<button class="btn btn-outline-info">
					<i class="fa fa-floppy-o" aria-hidden="true"></i>
				</button>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php print_r(Contacts::$main_site_url);?>
			</div>
		</div>
	</div>
</form>