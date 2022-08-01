<?php 

/**
 * 
 */
class Helpers {
	
	public static function alertMessage ($message) { ?>
		<link rel="stylesheet" 
		href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" 
		integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
		crossorigin="anonymous">
		<div class="container p-5">
			<div class="alert alert-success text-center" role="alert">
				<?php echo $message ?>
			</div>
		</div>
	<?php }


}

?>