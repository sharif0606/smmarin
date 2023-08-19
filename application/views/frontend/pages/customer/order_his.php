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
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">ID </th>
                                            <th class="column-title"> Order Date </th>
                                            <th class="column-title"> Total Amount </th>
                                            <th class="column-title"> Status </th>
                                            <th class="column-title"> Action </th>
                                        </tr>
                                    </thead>
    
                                    <tbody>
                                        <?php $status=array("Pending","Accepted","Delivered"); ?>
                                        <?php foreach ($order as $data) { ?>
                                            <tr class="even pointer">
                                                <td><?= $data->id; ?></td>
                                                <td><?= date("d-m-Y h:mA",strtotime($data->created));?></td>
                                                <td><?= $data->grand_total;?></td>
                                                <td><?= $status[$data->status];?></td>
                                                <td class=" last">
                                                    <a href="<?= base_url(); ?>show-customer-order/<?= $data->id; ?>" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-eye-open"></i> Show</a>
                                                </td>
                                            </tr>
                                        <?php } ?>
    
                                    </tbody>
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
