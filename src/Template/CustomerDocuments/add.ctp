<div class="content d-flex flex-column flex-column-fluid" id="kt_content">

    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4 subheader-solid" id="kt_subheader">
        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard</h5>
                <!--end::Page Title-->
                <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                    <li class="breadcrumb-item text-muted">
                        <a href="" class="text-muted">Customer Documents</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="" class="text-muted">Create Customer Document</a>
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
                            <h3 class="card-title">New Customer Document</h3>
                        </div>
                        <!--begin::Form-->
                        <?= $this->Form->create($customerDocument,['id' => 'customer' , 'type' => 'file' ]) ?>
                            <div class="card-body">
                                <?= $this->Flash->render() ?>
                                <div class="form-group">
                                    <label>Name
                                    <span class="text-danger">*</span></label>
                                    <?php echo $this->Form->control('name',[ 'placeholder' => 'Name' , 'class' => 'form-control' , 'label' => false]); ?>
                                </div>
                                
                                <div class="form-group">
                                    <label>Number
                                    <span class="text-danger">*</span></label>
                                    <?php echo $this->Form->control('no',[ 'placeholder' => 'Number' , 'class' => 'form-control' , 'label' => false]); ?>
                                </div>
                                <div class="form-group">
                                    <label>Image 
                                    <span class="text-danger">*</span></label>
                                    <?php echo $this->Form->control('image',[ 'type' => 'file' , 'class' => 'form-control' , 'label' => false]); ?>
                                </div>
                                <!--begin: Code-->
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2 company_submit">Submit</button>
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
        $('title').html('Add Company');
    });

    $(document).on('click','.company_submit',function(e){

        e.preventDefault();

        $('#loader').show();

        $('form#customer').submit();


    })

</script>