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
                                
                            <h6 class="page_heading">Hello, <?= $this->session->userdata("gender") ?> <?= $this->session->userdata("c_name") ?></h6>

                            <div class="row myacount_dashbord_list">
                                <div class="list-group-item">
                                    <a class="landing-link" href="<?= base_url('customer-dashboard') ?>" title="Dashboard"> <i class="fa fa-gear mar_r4 fs_lg"></i>Dashboard </a>
                                </div>

                                <div class="list-group-item">
                                    <a class="identity-link" href="<?= base_url('customer-info') ?>" title="Information"> <i class="fa fa-list mar_r4 fs_lg"></i>Information </a>
                                </div>

                                <div class="list-group-item">
                                    <a class="history-link" href="<?= base_url('customer-order') ?>" title="Order history and details"> <i class="fa fa-calendar mar_r4 fs_lg"></i>Order history and details </a>
                                </div>
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
