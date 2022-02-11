<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
				<!--end::Page Title-->
				<ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
					<li class="breadcrumb-item text-muted">
						<a href="" class="text-muted">My Profile</a>
					</li>
					<li class="breadcrumb-item text-muted">
						<a href="" class="text-muted">Change Password</a>
					</li>
				</ul>
				<!--begin::Actions-->
				<!--end::Actions-->
			</div>
			<!--end::Info-->
			<!--begin::Toolbar-->
			<div class="d-flex align-items-center">
				<!--begin::Daterange-->
				<a href="#" class="btn btn-sm btn-light font-weight-bold mr-2" >
					<span class="text-muted font-size-base font-weight-bold mr-2" id="kt_dashboard_daterangepicker_title">Today : </span>
					<?php echo date('d F Y'); ?>
				</a>
				<!--end::Daterange-->
			</div>
			<!--end::Toolbar-->
		</div>
	</div>
	<!--begin::Subheader-->

	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<!--begin::Card-->
					<div class="card card-custom gutter-b example example-compact">
						<div class="card-header">
							<h3 class="card-title">Change Password</h3>
						</div>
						<!--begin::Form-->
						<?= $this->Form->create('changePassword',['novalidate' => true , 'id' => 'changePassword']) ?>
							<div class="card-body">
								<?= $this->Flash->render() ?>
								<div class="form-group">
									<label>Old Password 
									<span class="text-danger">*</span></label>
									<input type="password" class="form-control"  placeholder="Old Password" name="old_password">
								</div>
								<div class="form-group">
									<label>New Password 
									<span class="text-danger">*</span></label>
									<input type="password" class="form-control"  placeholder="New Password" name="password">
								</div>
								<div class="form-group">
									<label>Confirm Password 
									<span class="text-danger">*</span></label>
									<input type="password" class="form-control"  placeholder="Confirm Password" name="confirm_password">
								</div>
								<!--begin: Code-->
							</div>
							
							<div class="card-footer">
								<button type="submit" class="btn btn-primary mr-2 change_password_submit">Submit</button>
								<a href="" class="btn btn-secondary">Cancel</a>
							</div>
						<?= $this->Form->end() ?>    
					</div>
				</div>
			</div>
		</div>
	</div>






</div>




<script type="text/javascript">
	$(document).ready(function(){
		$('title').html('Change Password | Credit Society');
	});

	$(document).on('click','.change_password_submit',function(e){

		e.preventDefault();

		$('#loader').show();

		$('form#changePassword').submit();


	})

</script>