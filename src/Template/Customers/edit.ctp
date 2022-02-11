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
                        <a href="" class="text-muted">Edit Customer</a>
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
                            <h3 class="card-title">Edit Customer</h3>
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
                                                <label>Phone No 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('phone',[ 'placeholder' => 'Phone No' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address 
                                    <span class="text-danger">*</span></label>
                                    <?php echo $this->Form->control('address',[ 'placeholder' => 'Address' , 'class' => 'form-control' , 'label' => false]); ?>
                                </div>

                                <div >

                                    <h5 class="card-title" >Customer Documents</h5>

                                </div>
                                <!--begin: Code-->

                                 <?php $i = 0; foreach ($documents as $key => $document) { ?>
                                    <div class="row checkRowData  <?php if($i == 0){ ?>row_datas<?php } ?>">

                                
                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                                <label>Name
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('doc_name[]',[ 'placeholder' => 'Name' , 'class' => 'form-control' , 'label' => false, 'value' => $document['name']]); ?>
                                        </div>

                                    </div>

                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label>Number
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('doc_no[]',[ 'placeholder' => 'Number' , 'class' => 'form-control' , 'label' => false, 'value'=> $document['no'] ]); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-sm-4">
                                            <div class="form-group">
                                                <label>Image 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('image[]',[ 'type' => 'file' , 'class' => 'form-control' , 'label' => false, 'value' => $document['image'] ]); ?>

                                                 <input type="hidden" value="<?php echo $document['image'] ; ?>" name="previous_image[]">

                                            </div>

                                                <?php if($document['image'] != ''){ ?> 
                                                    <img src="<?php echo $this->Url->build('/'.$document['image']); ?>" style="width: 100%; height: 150px;">
                                                <?php } ?>
                                    </div>

                                    <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <?php if($i == 0){ ?>
                                                    <button type="button" class="btn btn-primary btn-sm add_more">
                                                        + 
                                                    </button>
                                                    <?php }else{ ?>
                                                    <button type="button" class="btn btn-danger btn-sm remove_row">
                                                        X 
                                                    </button>
                                                    <?php } ?>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                </div>

                                <?php $i++; } ?>

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
        $('title').html('Edit Customer');
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

        html.find('img').remove();

        $('.append_rows').append(html);
    });


    $(document).on('click','.remove_row',function(){

        $(this).closest('.checkRowData').remove();

    });

</script>