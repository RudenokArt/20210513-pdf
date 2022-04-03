<style>
	.login-page-wrapper {
		position: absolute;
		top: 0;
		left: 0;
		background: rgba(0, 0, 0, 0.2);
		width: 100vw;
		height: 100vh;
	}
</style>
<div class="login-page-wrapper">
	<div class="container pt-5">
	<div class="row justify-content-center">
		<div class="col-lg-4 col-md-6 col-sm-12">
			<div class="card">
				<h5 class="card-header">Вход для администратора</h5>
				<div class="card-body text-center">
					<h5 class="card-title">Пароль администратора:</h5>
					<form action="../core/contacts.php" method="post">
						<input type="text" name="password" class="form-control mt-3">
						<button class="btn btn-outline-success mt-3">
							<i class="fa fa-sign-in" aria-hidden="true"></i>
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
