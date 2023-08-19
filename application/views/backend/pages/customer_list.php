<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Customer List </a> </h2>
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
                                        <th class="column-title"> Customer Name </th>
                                        <th class="column-title"> Customer Contact </th>
                                        <th class="column-title"> Status </th>
                                        <th class="column-title"> Action </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $g=array("","Mr.","Ms."); ?>
                                    <?php $status=array("Inactive","Active"); ?>
                                    <?php foreach ($all_customer_info as $data) { ?>
                                        <tr class="even pointer">
                                            <td><?= $data->id; ?></td>
                                            <td><?= $g[$data->c_gender]; ?> <?= $data->c_name; ?></td>
                                            <td><?= $data->c_address; ?><br><?= $data->c_contact; ?><br><?= $data->c_email; ?></td>
                                            <td><?= $status[$data->c_status];?></td>
                                            <td class=" last">
                                                <a href="<?= base_url(); ?>edit-customer/<?= $data->id; ?>" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                                <?php if($data->c_status==1){ ?>
                                                <a href="<?= base_url(); ?>delete-customer/<?= $data->id; ?>/0" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-remove"></i> Inactive</a>
                                                <?php }else{ ?>
                                                <a href="<?= base_url(); ?>delete-customer/<?= $data->id; ?>/1" class="btn btn-success btn-xs"> <i class="glyphicon glyphicon-ok"></i> Active</a>
                                                <?php } ?>
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