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
                        <a href="" class="text-muted">Customer</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="" class="text-muted">Create New Customer</a>
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
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">New Customer</h3>
                        </div>
                        <!--begin::Form-->
                        <?= $this->Form->create($customer,['id' => 'customer','type' => 'file']) ?>
                            <div class="card-body">
                                <?= $this->Flash->render() ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Customer Name
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('name',[ 'placeholder' => ' Customer Name' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label>Gender
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('gender',[ 'placeholder' => 'Gender' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                        
                                    </div>


                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label> Date of Birth 
                                            <span class="text-danger">*</span></label>
                                            <!-- ?php echo $this->Form->control('dob',[ 'placeholder' => 'Date of Birth' , 'class' => 'form-control' , 'label' => false]); ?>  -->


                                                <input type="date" class="form-control" name="dob" id="actual-date" > 

                                         </div>

                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class= "col-md-6">
                                            <div class="form-group">
                                                <label>Aadhaar
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('aadhar',[ 'placeholder' => 'Aadhaar' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    <div class= "col-md-6">
                                            <div class="form-group">
                                                <label>Father/Spouse Name 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('fosname',[ 'placeholder' => 'Father/Spouse Name' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class= "col-md-6">
                                            <div class="form-group">
                                                <label>Mobile No
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('mobileone',[ 'placeholder' => 'Mobile Number' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    <div class= "col-md-6">
                                            <div class="form-group">
                                                <label>Alternate Number
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('mobiletwo',[ 'placeholder' => 'Alternate Mobile Number' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>
                                </div>


                                <div class="row">

                                    <div class= "col-md-6">
                                            <div class="form-group">
                                                <label>Introducer
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('introducer',[ 'placeholder' => 'Introducer' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    <div class= "col-md-6">
                                            <div class="form-group">
                                                <label>Introducer Mobile No
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('intromobile',[ 'placeholder' => 'Introducer mobile no' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                </div>



                                <div class="row">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label>Door No
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('doorno',[ 'placeholder' => ' Door No' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label>Street
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('street',[ 'placeholder' => 'Street' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                        
                                    </div>


                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label>City
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('city',[ 'placeholder' => 'City' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>


                                    <div class="col-md-3">

                                        <div class="form-group">
                                            <label>Pincode
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('pincode',[ 'placeholder' => 'Pincode' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                </div>



                                


                                <div class="row">

                                    <div class= "col-md-6">

                                            <div class="form-group">
                                                    <label>Landmark
                                                    <span class="text-danger">*</span></label>
                                                    <?php echo $this->Form->control('landmark',[ 'placeholder' => 'Landmark' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>


                                    <div class= "col-md-6">
                                            <div class="form-group">
                                                <label>Profile
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('profile',[ 'type' => 'file' ,'placeholder' => 'Profile Picture' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>
                                </div>




                               

                                <div >

                                    <h5 class="card-title" >Customer Documents</h5>

                                </div>
                                <!--begin: Code-->

                                <div class="row row_datas checkRowData">
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                                <label>Name
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('doc_name[]',[ 'placeholder' => 'Name' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label>Number
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('doc_no[]',[ 'placeholder' => 'Number' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label>Image 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('image[]',[ 'type' => 'file' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    <div class="col-md-2 col-sm-2">
                                        <div class="form-group">
                                            <!-- <div class="col-md-12"> -->

                                                <button type="button" class="btn btn-primary btn-sm add_more">
                                                    + 
                                                </button>

                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>



                                    <div class="append_rows">
                                   
                                
                                
                                    </div>
                            
                            </div>
                            
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary mr-2 customer_submit">Submit</button>
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
        $('title').html('Add Customer');
    });

    $(document).on('click','.customer_submit',function(e){

        e.preventDefault();

        $('#loader').show();

        $('form#customer').submit();


    })


    $(document).on('click','.add_more',function(){

        var html = $('.row_datas').clone();

        $(html).removeClass("row_datas");

        html.find('input').val('');

        html.find('button').addClass('remove_row');

        html.find('button').addClass('btn-danger');

        html.find('button').html('X');

        html.find('button').removeClass('add_more');

        html.find('button').removeClass('btn-primary');

        $('.append_rows').append(html);
    });


    $(document).on('click','.remove_row',function(){

        $(this).closest('.checkRowData').remove();

    });

</script>


