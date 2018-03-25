<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
	<div class="jumbotron text-center">
	  <h1>My Solution</h1>
	  <p>Your password was successfully processed!</p>
	  
	  <div class="row">
		  <div class="col-sm-3"></div>
		  <div class="col-sm-6">
			<p>We found that you can have <strong><?php echo $permutations; ?></strong> permutations of this password</p>
			
			<a class="button btn btn-lg btn-primary btn-block" href="<?php echo base_url('index.php/authenticate/changepw'); ?>">
			Try it again!
			</a>
			<a class="button btn btn-lg btn-primary btn-block" href="<?php echo base_url('index.php'); ?>">
			Return to home screen
			</a>
		  </div>
		  <div class="col-sm-3"></div>
	</div>
</div>


