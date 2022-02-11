<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
	<!--begin::Subheader-->
	<div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
		<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
			<!--begin::Info-->
			<div class="d-flex align-items-center flex-wrap mr-2">
				<!--begin::Page Title-->
				<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
				<!--end::Page Title-->
				<!--begin::Actions-->
				<div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
				<span class="text-muted font-weight-bold mr-4">#Version 1.0</span>
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

	<div class="container-fluid">

		<!-- <div class="row">
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	        	<div class="card card-blue dashboard-card">

	        		<div class="details">
	                    <div class="desc"> New Loan Applications </div>
	                    <div class="number">
	                        <span data-counter="counterup" data-value="1349">10</span>
	                    </div>
	                </div>
	        	</div>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	        	<div class="card card-red dashboard-card">

	        		<div class="details">
	                    <div class="desc"> Un Approved Members </div>
	                    <div class="number">
	                        <span data-counter="counterup" data-value="1349">2</span>
	                    </div>
	                </div>
	        	</div>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	        	<div class="card card-l-blue dashboard-card">

	        		<div class="details">
	                    <div class="desc"> Total Funds </div>
	                    <div class="number">
	                        <span data-counter="counterup" data-value="1349">1,23,200</span>
	                    </div>
	                </div>
	        	</div>
	        </div>
	        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
	        	<div class="card card-purple dashboard-card">

	        		<div class="details">
	                    <div class="desc"> Total Shares </div>
	                    <div class="number">
	                        <span data-counter="counterup" data-value="1349">20,000</span>
	                    </div>
	                </div>
	        	</div>
	        </div>
	     </div>
		 -->
	</div>
	

</div>
<!--end::Content-->

<style type="text/css">
	.dashboard-card{
		height: 100px;
    	color: #ffffff;
    	font-size: 18px;
		font-family: "Open Sans",sans-serif;
		text-align: right;
	    font-size: 16px;
	    letter-spacing: 0;
	    font-weight: 300;
	    text-align: center;
	    cursor:pointer;
	}

	.details{
		margin-top: 20px;
	}

	.card-blue{
    	background-color: #3598dc;		
	}

	.card-red{
		background-color: #e7505a;
	}

	.card-l-blue{
		background-color: #32c5d2;
	}

	.card-purple{
		background-color: #8f5aad;
	}

</style>
<script type="text/javascript">
	$(document).ready(function(){
		$('title').html('Gold Loan Dashboard');
	});


	


</script>