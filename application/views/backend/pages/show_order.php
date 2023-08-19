<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Order Details </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-6">
                                <?php $g=array("","Mr.","Ms."); ?>
                                <p><b>Customar Name : </b><?= $g[$order->customer_gender] ?> <?= $order->customer_name ?></br>
                                    <b>Customar Contact : </b><?= $order->customer_contact ?></br>
                                    <b>Customar Contact : </b><?= $order->customer_email ?></br>
                                    <b>Customar Name : </b><?= $order->customer_address ?>
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <h3>
                                    Total : BDT<?= $order->grand_total ?>
                                </h3>
                            </div>
                        </div>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
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
                                <tr>
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