<div class="user-area">
    <div class="container">
        <div class="row">
            <div id="center_column" class="single_column col-sm-12">
                <section id="main">
                    <h3 class="page_heading"></h3>

                    <section id="content" class="page-content row">
                        <div class="col-lg-3 hidden-md-down my_account_left_column">
                            <div class="list-group mb-3">
                                <div class="list-group-item">
                                    <a class="landing-link" href="<?= base_url('customer-dashboard') ?>" title="Dashboard"> <i class="fa fa-gear mar_r4 fs_lg"></i>Dashboard </a>
                                </div>

                                <div class="list-group-item">
                                    <a class="identity-link" href="<?= base_url('customer-info') ?>" title="Information"> <i class="fa fa-list mar_r4 fs_lg"></i>Information </a>
                                </div>

                                <div class="list-group-item">
                                    <a class="history-link" href="<?= base_url('customer-order') ?>" title="Order history and details"> <i class="fa fa-calendar mar_r4 fs_lg"></i>Order history and details </a>
                                </div>

                                <div class="list-group-item">
                                    <a href="<?= base_url('customer-logout') ?>" class="sign-out-link" title="Sign out"><i class="fa fa-sign-out mar_r4 fs_lg"></i>Sign out</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <aside id="notifications">
                                <div class="container"></div>
                            </aside>
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
                                    <?php $status=array("Pending","Accepted","Delivered"); ?>
                                    <h3>
                                        Total : BDT<?= $order->grand_total ?><br>
                                        Status: <?= $status[$order->status];?>
                                    </h3>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-striped jambo_table bulk_action table-responsive table-bordered">
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
                            

                            <div class="clearfix my_account_page_footer mt-3 mb-3">
                                <a href="<?= base_url('customer-dashboard') ?>" class="fl">
                                    <i class="fa fa-arrow-left fto_mar_lr2"></i>
                                    Back to your account
                                </a>
                                <a href="<?= base_url() ?>" class="fr">
                                    <i class="fa fa-home fto_mar_lr2"></i>
                                    Home
                                </a>
                            </div>
                        </div>
                    </section>

                    <footer class="page-footer"></footer>
                </section>
            </div>
        </div>
    </div>
</div>
