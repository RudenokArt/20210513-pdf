<form action="../core/contacts.php" enctype="multipart/form-data" method="post">
	<div class="container pt-4 border-bottom">
		<div class="row pb-4">
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
	<div class="container pt-4 border-bottom">
		<div class="row pb-4">
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
<form action="../core/contacts.php" method="post">
	<div class="container pt-4 border-bottom">
		<div class="row pb-4">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<div class="h5">Телефон:</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<input type="text" class="form-control" name="site-phone">
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<button class="btn btn-outline-info">
					<i class="fa fa-floppy-o" aria-hidden="true"></i>
				</button>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php print_r(Contacts::$site_phone);?>
			</div>
		</div>
	</div>
</form>
<div class="container pt-4">
	<div class="row justify-content-center">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-outline-info" 
			data-toggle="modal" data-target="#exampleModal">
			Добавить соц. сеть
		</button>
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="../core/contacts.php" method="post">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Добавить соц. сеть</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<div class="container text-center">
								<div class="row">
									<div class="col-2 text-right h5">URL:</div>
									<div class="col-10">
										<input type="text" name="link" class="form-control">
									</div>
								</div>
								<div class="row justify-content-center p-3">
									<?php foreach (Contacts::$social_icons as $key => $value): ?>
										<div class="col-4 form-check">
											<label class="h4 form-check-label text-info">
												<input type="radio" value="<?php echo $value ?>" 
												name="icon" class="form-check-input">
												<i class="fa fa-<?php echo $value ?>" aria-hidden="true"></i>
											</label>
										</div>
									<?php endforeach ?>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button name="add-social-icon" value="Y" class="btn btn-outline-primary">
								<i class="fa fa-floppy-o" aria-hidden="true"></i>
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php foreach (Contacts::$social_icons_list as $key => $value): ?>
	<div class="row justify-content-center h5 text-info">
		<div class="col-lg-4 col-md-6 col-sm-12 p-2 border-bottom">
			<i class="fa fa-<?php  echo $value['icon'] ?>" aria-hidden="true"></i>
			<?php echo $value['value'] ?>
		</div>
	</div>
<?php endforeach ?>
</div>


<i class="fa fa-vk" aria-hidden="true"></i>
<i class="fa fa-facebook-square" aria-hidden="true"></i>
<i class="fa fa-facebook" aria-hidden="true"></i>
<i class="fa fa-facebook-official" aria-hidden="true"></i>
<i class="fa fa-twitter-square" aria-hidden="true"></i>
<i class="fa fa-twitter" aria-hidden="true"></i>
<i class="fa fa-skype" aria-hidden="true"></i>
<i class="fa fa-instagram" aria-hidden="true"></i>
<i class="fa fa-odnoklassniki" aria-hidden="true"></i>
<i class="fa fa-odnoklassniki-square" aria-hidden="true"></i>
<i class="fa fa-instagram" aria-hidden="true"></i>
<i class="fa fa-whatsapp" aria-hidden="true"></i>
<i class="fa fa-youtube" aria-hidden="true"></i>
<i class="fa fa-youtube-play" aria-hidden="true"></i>
<i class="fa fa-envelope-o" aria-hidden="true"></i>
<i class="fa fa-envelope" aria-hidden="true"></i>
<i class="fa fa-envelope-square" aria-hidden="true"></i>
