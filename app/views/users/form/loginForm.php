<div class="limiter">
		<div class="col-md-4">
			<?php
			if(isset($_SESSION['user_error'])){
				echo"<div class='alert alert-danger'>".($_SESSION['user_error'])."</div>";
			}
			?></div>
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form method="POST" action="#" class="login100-form validate-form">
					<span class="login100-form-title p-b-70">
						Welcome
					</span>
					<span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate="Enter email">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="password">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="login" class="login100-form-btn">
							Login
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Email / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a class="txt2" href="register.php">Sign up
							</a>
						</li>
						<li>
							<span class="txt1">
								You are Admin?
							</span>
							<a class="txt2" href="loginAdmin.php">LoginAdmin / 
							</a>

							<a class="txt2" href="registerAdmin.php">SignupAdmin
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>