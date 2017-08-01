<?php
$post = $_POST;
if($post['submit']){
	print_r($post);
}
?>

<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="" method="post">
							<input type="text" name="user_name" placeholder="Name" />
							<input type="email" name="user_mail" placeholder="Email Address" />
							<button type="submit" name="submit" value="1" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="<?=ROOT_PATH?>/user/register" method='post'>
							<input type="text" name="user_name" placeholder="Name"/>
							<input type="email" name="user_mail" placeholder="Email Address"/>
							<input type="password" name="user_pass" placeholder="Password"/>
							<button type="submit" name="submit" value="1" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->