
<div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-white" id="kt_login">
	<!--begin::Aside-->
	<div class="login-aside d-flex flex-column flex-row-auto" style="background-color: #cbfffa;">
		<!--begin::Aside Top-->
		<div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
			<!--begin::Aside header-->
			<a href="#" class="text-center mb-10">
				<img src="<?php echo $this->Url->build('/img/cs-icon.png'); ?>" class="max-h-70px" alt="" />
			</a>
			<!--end::Aside header-->
			<!--begin::Aside title-->
			<h3 class="font-weight-bolder text-center font-size-h4 font-size-h1-lg" style="color: #986923;">Safe login with us 
			<br />with great build tools</h3>
			<!--end::Aside title-->
		</div>
		<!--end::Aside Top-->
		<!--begin::Aside Bottom-->
		<div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url('<?php echo $this->Url->build('/adminLayout/assets/media/svg/illustrations/login-visual-1.svg'); ?>')"></div>
		<!--end::Aside Bottom-->
	</div>
	<!--begin::Aside-->
	<!--begin::Content-->
	<div class="login-content flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
		<!--begin::Content body-->
		<div class="d-flex flex-column-fluid flex-center">
			<!--begin::Signin-->
			<div class="login-form login-signin">
				<!--begin::Form-->
				<?= $this->Form->create('loginform',['class' => 'form']) ?>
					<!--begin::Title-->
					<div class="pb-13 pt-lg-0 pt-5">
						<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Welcome back to our system</h3>
					</div>

					<?php echo $this->Flash->render(); ?>
					<!--begin::Title-->
					<!--begin::Form group-->
					<div class="form-group">
						<label class="font-size-h6 font-weight-bolder text-dark">Email</label>
						<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="text" name="email" autocomplete="off" />
					</div>
					<!--end::Form group-->
					<!--begin::Form group-->
					<div class="form-group">
						<div class="d-flex justify-content-between mt-n5">
							<label class="font-size-h6 font-weight-bolder text-dark pt-5">Password</label>
							<!-- <a href="javascript:;" class="text-primary font-size-h6 font-weight-bolder text-hover-primary pt-5" id="kt_login_forgot">Forgot Password ?</a> -->
						</div>
						<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg" type="password" name="password" autocomplete="off" />
					</div>
					<!--end::Form group-->
					<!--begin::Action-->
					<div class="pb-lg-0 pb-5">
						<button type="submit"  class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button>
						<!-- <button type="button" id="kt_login_signin_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">Sign In</button> -->
					</div>
					<!--end::Action-->
				<?= $this->Form->end() ?>
				<!--end::Form-->
			</div>
			<!--end::Signin-->
			<!--begin::Signup-->
			<!--begin::Forgot-->
			<div class="login-form login-forgot">
				<!--begin::Form-->
				<form class="form" novalidate="novalidate" id="kt_login_forgot_form">
					<!--begin::Title-->
					<div class="pb-13 pt-lg-0 pt-5">
						<h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">Forgotten Password ?</h3>
						<p class="text-muted font-weight-bold font-size-h4">Enter your email to reset your password</p>
					</div>
					<!--end::Title-->
					<!--begin::Form group-->
					<div class="form-group">
						<input class="form-control form-control-solid h-auto py-6 px-6 rounded-lg font-size-h6" type="email" placeholder="Email" name="email" autocomplete="off" />
					</div>
					<!--end::Form group-->
					<!--begin::Form group-->
					<div class="form-group d-flex flex-wrap pb-lg-0">
						<button type="button" id="kt_login_forgot_submit" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-4">Submit</button>
						<button type="button" id="kt_login_forgot_cancel" class="btn btn-light-primary font-weight-bolder font-size-h6 px-8 py-4 my-3">Cancel</button>
					</div>
					<!--end::Form group-->
				</form>
				<!--end::Form-->
			</div>
			<!--end::Forgot-->
		</div>
		<!--end::Content body-->
		<!--begin::Content footer-->
		<div class="d-flex justify-content-lg-start justify-content-center align-items-end py-7 py-lg-0">
			<div class="text-dark-50 font-size-lg font-weight-bolder mr-10">
				<span class="mr-1"><?php echo date('Y'); ?> @ </span>
				<a href="#" target="_blank" class="text-dark-75 text-hover-primary">Manis Traders</a>
			</div>
		</div>
		<!--end::Content footer-->
	</div>
	<!--end::Content-->
</div>
<!--end::Login-->

<script type="text/javascript">
	
	$(document).ready(function(){
		$('title').html('Login Page');
	})
</script>