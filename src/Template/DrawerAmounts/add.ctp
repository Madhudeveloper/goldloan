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
                        <a href="" class="text-muted">Denomination Amount</a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="" class="text-muted">New Denomination Entry</a>
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
                            <h3 class="card-title">Denomination Entry</h3>
                        </div>
                        <!--begin::Form-->
                        <!-- <?= $this->Form->create($loan,['id' => 'loan','type' => 'file']) ?>
                            <div class="card-body">
                                <?= $this->Flash->render() ?>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Customer
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('customer_id',[ 'options' => $customers, 'placeholder' => ' Select Customer ' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Select Scheme
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('scheme_id',['options' => $schemes, 'placeholder' => ' Select Scheme ' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>
                                    
                                
                                </div>

                                <div class="row">
                                    
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label>Loan Amount Dispersed
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('Amount',[ 'placeholder' => 'Loan Amount Dispersed' , 'class' => 'form-control' , 'readonly' => 'readonly', 'label' => false]); ?>
                                        </div>
                                        
                                    </div>


                                    <div class= "col-md-6">
                                            <div class="form-group">
                                                <label>Interest 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('interest',[ 'placeholder' => 'Interest' , 'class' => 'form-control' , 'readonly' => 'readonly', 'label' => false]); ?>
                                            </div>
                                    </div>

                                
                                </div>
                                
                                
                                

                                <div >

                                    <h5 class="card-title" >Loan Items</h5>

                                </div>
                                <!--begin: Code-->

                                <div class="row row_datas checkRowData">
                                    

                                    <div class="col-md-3 col-sm-3">
                                        <div class="form-group">
                                            <label>Type
                                            <span class="text-danger">*</span></label>
                                            <?php echo $this->Form->control('type_id[]',[ 'options' => $types, 'placeholder' => 'Type' , 'class' => 'form-control' , 'label' => false]); ?>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-3">
                                            <div class="form-group">
                                                <label>Quality 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('quality_id[]',[ 'options' => $qualities, 'class' => 'form-control quality' , 'label' => false , 'empty' => 'Ent' ]); ?>
                                            </div>
                                    </div>


                                    <div class="col-md-3 col-sm-3">
                                            <div class="form-group">
                                                <label>Gross 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('Gross[]',[ 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    <div class="col-md-3 col-sm-3">
                                            <div class="form-group">
                                                <label>Net 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('Net[]',[ 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    

                                    <div class="col-md-3 col-sm-3">
                                            <div class="form-group">
                                                <label>Cntnr 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('container_id[]',[ 'options' => $containers,'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                            <div class="form-group">
                                                <label>Lctn
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('location[]',[ 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    <div class="col-md-3 col-sm-3">
                                            <div class="form-group">
                                                <label>Value
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('value[]',[ 'class' => 'form-control value' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    <div class="col-md-2 col-sm-2">
                                            <div class="form-group">
                                                <label>Image 
                                                <span class="text-danger">*</span></label>
                                                <?php echo $this->Form->control('image[]',[ 'type' => 'file' , 'class' => 'form-control' , 'label' => false]); ?>
                                            </div>
                                    </div>

                                    <div class="col-md-1 col-sm-1">
                                        <div class="form-group">
                                            <!-- <div class="col-md-12"> -->
                                                <br>
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
                        <?= $this->Form->end() ?>  --> 

<table class="tg">
<thead>
  <tr>
    <th class="tg-0lax">Denomination</th>
    <th class="tg-0lax">Count</th>
    <th class="tg-0lax">Value</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0lax">1</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">2</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">5</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">10</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">20</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">50</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">100</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">200</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">500</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">2000</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
  <tr>
    <td class="tg-0lax">Total</td>
    <td class="tg-0lax"></td>
    <td class="tg-0lax"></td>
  </tr>
</tbody>
</table>


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

        $('form#loan').submit();


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


    $(document).on('change','.quality', function(){

        var quality_id = $(this).val();
     

        // if(quality == ""){
        //      $('#cus-gst-no').val("");
        //     return false;
        // } 

         $.ajax({

             type: "POST",
             url:  '<?php echo $this->Url->build('/loans/amount'); ?>',
             dataType: "json",
             headers : {
              'X-CSRF-Token': $('[name="_csrfToken"]').val()
             },
             data: { id : quality_id },
             success:function(data)
             {


                if(data.result != 0){
                        $(this).closest('.row').find('.value').val(data.result);


                }else{

                    alert('please enter the value ');
                }   

              
              }
        });

    
   });

</script>


