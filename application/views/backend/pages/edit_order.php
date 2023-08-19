<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Order </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content"><br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>update-order">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">ID <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" class="form-control col-md-7 col-xs-12 " value="<?php echo $order->id; ?>" disabled>
                                    <input type="hidden" name="id" value="<?= $order->id; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="status" class="form-control">
                                        <option value="0" <?= $order->status==0?"selected":""; ?>>Pending</option>
                                        <option value="1" <?= $order->status==1?"selected":""; ?>>Accepted</option>
                                        <option value="2" <?= $order->status==2?"selected":""; ?>>Delivered</option>
                                    </select>
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="submit_block">
                                    <a href="<?php echo base_url();?>category-list" class="btn btn-primary">Back</a>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>

                        </form>
                        <table class="table table-striped jambo_table bulk_action table-responsive table-bordered">
                            <thead>
                                <tr class="headings">
                                    <th class="column-title">Product </th>
                                    <th class="column-title"> Qty </th>
                                    <th class="column-title"> Price </th>
                                    <th class="column-title"> Sub Total </th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php $qty=$total=0; foreach ($order_detalis as $data) { $qty+=$data->quantity;$total+=($data->quantity * $data->price); ?>
                                    <tr class="even pointer">
                                        <td><?= $data->news_name; ?></td>
                                        <td><?= $data->quantity; ?></td>
                                        <td><?= $data->price; ?></td>
                                        <td><?= $data->quantity * $data->price; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr class="headings">
                                    <th class="column-title text-right">Total </th>
                                    <th class="column-title"> <?= $qty ?> </th>
                                    <th class="column-title">  </th>
                                    <th class="column-title"> <?= $total ?> </th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->