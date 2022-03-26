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

<form action="../core/contacts.php" enctype="multipart/form-data" method="post">
	<div class="container pt-4 border-bottom">
		<div class="row pb-4">
			<div class="col-lg-3 col-md-6 col-sm-12">
				<p class="h5">Favicon (иконка на вкладке браузера):</p>
				<i>Логотип должен быть в формате .ico</i>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<input type="file" name="fav_logo">
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<button class="btn btn-outline-info">
					<i class="fa fa-floppy-o" aria-hidden="true"></i>
				</button>			
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<img src="../img/fav_logo.ico" alt="log" height="100">
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
				<div class="h5">
					Тэг "title" (Название вкладки браузера):
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<input type="text" class="form-control" name="tag-title">
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<button class="btn btn-outline-info">
					<i class="fa fa-floppy-o" aria-hidden="true"></i>
				</button>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12">
				<?php print_r(Contacts::$tag_title);?>
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
<div class="container pt-5">
	<div class="row">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="h3">
				Социальные сети
			</div>
		</div>
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
	<div class="row h5 text-info p-3 border-bottom">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<i class="fa fa-<?php  echo $value['icon'];?>" aria-hidden="true"></i>
			<?php echo $value['value'] ?>
		</div>
		<div class="col-1">
			<button class="btn btn-outline-info" type="button" data-toggle="collapse" 
			data-target="#collapseExample_<?php echo $value['id'];?>" aria-expanded="false" 
			aria-controls="collapseExample_<?php echo $value['id'];?>">
			<i class="fa fa-pencil-square-o" aria-hidden="true"></i>
		</button>
	</div>
	<div class="col-1">
		<form action="../core/contacts.php" method="post">
			<button class="btn btn-outline-danger" value="<?php echo $value['id'];?>"
				name="delete-social-icon" title="Удалить">
				<i class="fa fa-trash-o" aria-hidden="true"></i>
			</button>
		</form>
	</div>
</div>
<div class="row">
	<div class="col collapse" id="collapseExample_<?php echo $value['id'];?>">
		<form action="../core/contacts.php" method="post">
			<div class="container border-bottom">
				<div class="row">
					<div class="col-1 text-right h5">URL:</div>
					<div class="col-9">
						<input value="<?php echo $value['value'];?>" 
						type="text" name="link" class="form-control">
					</div>
					<div class="col-2">
						<button name="update-social-icon" value="<?php echo $value['id'];?>" 
							class="btn btn-outline-primary">
							<i class="fa fa-floppy-o" aria-hidden="true"></i>
						</button>
					</div>
				</div>
				<div class="row justify-content-center p-3">
					<?php foreach (Contacts::$social_icons as $key1 => $value1): ?>
						<div class="col-4 form-check">
							<label class="h4 form-check-label text-info">
								<input type="radio" value="<?php echo $value1;?>"
								<?php if ($value['icon']==$value1): ?>
									checked
								<?php endif ?>
								name="icon" class="form-check-input">
								<i class="fa fa-<?php echo $value1;?>" aria-hidden="true"></i>
							</label>
						</div>
					<?php endforeach ?>
				</div>
			</div>
		</form>			
	</div>
</div>
<?php endforeach ?>
</div>
<div style="height:25vh"></div>
