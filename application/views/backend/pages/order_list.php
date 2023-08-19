<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Order List </a> </h2>
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
                                        <th class="column-title"> Total Amount </th>
                                        <th class="column-title"> Order Date </th>
                                        <th class="column-title"> Status </th>
                                        <th class="column-title"> Action </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $g=array("","Mr.","Ms."); ?>
                                    <?php $status=array("Pending","Accepted","Delivered"); ?>
                                    <?php foreach ($all_order_info as $data) { ?>
                                        <tr class="even pointer">
                                            <td><?= $data->id; ?></td>
                                            <td><?= $g[$data->customer_gender]; ?> <?= $data->customer_name; ?></td>
                                            <td><?= $data->customer_address; ?><br><?= $data->customer_contact; ?><br><?= $data->customer_email; ?></td>
                                            <td><?= $data->grand_total;?></td>
                                            <td><?= date("d-m-Y h:mA",strtotime($data->created));?></td>
                                            <td><?= $status[$data->status];?></td>
                                            <td class=" last">
                                                <a href="<?= base_url(); ?>show-order/<?= $data->id; ?>" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-eye-open"></i> Show</a>
                                                <a href="<?= base_url(); ?>edit-order/<?= $data->id; ?>" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-pencil"></i> Edit</a>
                                                <a href="<?= base_url(); ?>delete-order/<?= $data->id; ?>" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-remove"></i> Delete</a>
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