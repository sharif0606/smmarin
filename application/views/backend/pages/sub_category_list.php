<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> <a href="<?php echo base_url(); ?>add-sub_category" class="btn btn-primary"> <i class="fa fa-plus" aria-hidden="true"></i>
                            Create New Sub Category </a> </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content"> 

                        <h4 class="box-title" style="color:#169F85;">
                            <?php
                            $message = $this->session->userdata('message');
                            if ($message) {
                                echo $message;
                                $this->session->unset_userdata('message');
                            }
                            ?>
                        </h4>

                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action table-responsive table-bordered">
                                <thead>
                                    <tr class="headings">
                                        <th class="column-title">ID </th>
                                        <th class="column-title"> Category </th>
                                        <th class="column-title"> Name </th>
                                        <th class="column-title"> Image </th>
                                        <th class="column-title"> Show Front </th>
                                        <th class="column-title"> Action </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $showF=array("No","Yes"); ?>
                                    <?php foreach ($all_sub_category_info as $data) { ?>

                                        <tr class="even pointer">
                                            <td class=" "><?= $data->sub_category_id; ?></td>
                                            <td class=" "><?= $data->cat; ?></td>
                                            <td class=" "><?= $data->category_name; ?></td>
                                            <td><img src="<?= base_url().$data->category_image;?>" width="70" height="40"></td>
                                            <td><?= $showF[$data->show_front];?></td>
                                            <td class=" last">
                                                <a href="<?= base_url(); ?>edit-sub_category/<?= $data->sub_category_id; ?>" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                                <!--<a href="<?php //echo base_url(); ?>delete-category/<?php //echo $data->category_id; ?>" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-remove"></i> Delete</a>-->
                                            </td>
                                        </tr>
                                    <?php } ?>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->