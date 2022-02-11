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
                        <a href="" class="text-muted">Types </a>
                    </li>
                    <li class="breadcrumb-item text-muted">
                        <a href="" class="text-muted">Types List</a>
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
    <div class="container">
        <div class="row">


        <div class="col-md-9"></div>
        <div class="col-md-3">

             <a href="<?php echo $this->Url->build('/containers/add') ?>" class="btn btn-primary">Add Type</a>
        </div>
            
        </div>
        
    </div>

    <br>
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--begin::Card-->
                    <div class="card card-custom gutter-b example example-compact">
                        <div class="card-header">
                            <h3 class="card-title">Types List</h3>
                        </div>
                        <div class="card-body">
                            <?= $this->Flash->render() ?>
                            <div class="table-responsive">

                                <table class="table  table-bordered table-striped" id="members_list">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Type</th>
                                            
                                            <th>Actions</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php $i = 1; foreach ($types as $key => $type) { ?>

                                            <tr>
                                        
                                                <td><?php echo $type['id']; ?></td>
                                                <td><?php echo $type['type']; ?></td>
                                                

                                                
                                                <td>
                                                    <a href="<?php echo $this->Url->build('/types/edit/'.$type['id']); ?>">Edit</a>
                                                </td>
                                            </tr>
                                           
                                       <?php $i++; } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                               
                    </div>
                </div>
            </div>
        </div>
    </div>






</div>




<script type="text/javascript">
    $(document).ready(function(){
        $('title').html('Containers List');
    });


</script>