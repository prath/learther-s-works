<?php
/**
 * Override Woo form-login.php
 *
 * @package leathers
 * @author  Aestik <root@aestik.com>
 * @since  0.1.0
 */
?>


<form method="post" class="login form-horizontal">


	<p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing &amp; Shipping section.</p>

	<div class="row form-group">
		<div class="col-md-3">
			<label for="username">
				Username or email
				<span class="required">*</span>
			</label>
		</div>
		<div class="col-md-5">
			<input type="text" class="input-text" name="username" id="username">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-3">
			<label for="password">
				Password
				<span class="required">*</span>
			</label>
		</div>
		<div class="col-md-5">
			<input class="input-text" type="password" name="password" id="password">
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-3">
		</div>
		<div class="col-md-5">
			<label for="rememberme" class="inline rememberme">
				<input name="rememberme" type="checkbox" id="rememberme" value="forever"> Remember me
			</label>
			<button type="submit" class="btn"name="login">Login <i class="fa fa-angle-right btn-icon"></i></button>
		</div>
	</div>

	<div class="row form-group">
		<div class="col-md-3">
		</div>
		<div class="col-md-5">
			<a href="">Lost your password?</a>
		</div>
	</div>

</form>
