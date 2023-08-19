<div class="user-area">
    <div class="container">
        <div class="row">
            <div id="center_column" class="single_column col-sm-12">
                <section id="main">
                    <h3 class="page_heading">Your personal information</h3>

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
                                <div class="container">
                                    <?php if($this->session->flashdata('msg')){ ?>
                                        <?= $this->session->flashdata('msg') ?>
                                    <?php } ?></div>
                            </aside>

                            <form action="<?= base_url('customer-info') ?>" id="customer-form" class="js-customer-form" method="post" data-registrationfields="true">
                                <div class="form_content">
                                    <div class="form_content_inner">
                                        <div class="row com_grid_view">
                                            <input type="hidden" name="id_customer" value="<?= $this->session->userdata('customer_id')?>" />

                                            <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                <div class="form-group form-group-small">
                                                    <label class="">
                                                        Title
                                                    </label>
                                                    <div class="form-control-valign">
                                                        <label class="radio-inline">
                                                            <span class="custom-radio">
                                                                <input name="c_gender" type="radio" value="1" <?= $this->session->userdata('c_gender') ==1?"checked":"" ?>  />
                                                                <span></span>
                                                            </span>
                                                            <span>Mr.</span>
                                                        </label>
                                                        <label class="radio-inline">
                                                            <span class="custom-radio">
                                                                <input name="c_gender" type="radio" value="2"  <?= $this->session->userdata('c_gender') ==2?"checked":"" ?>  />
                                                                <span></span>
                                                            </span>
                                                            <span>Ms.</span>
                                                        </label>
                                                        <?= form_error('c_gender') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group form-group-small">
                                                    <label class="required">
                                                        Full name
                                                    </label>
                                                    <div class="">
                                                        <input class="form-control" name="c_name" type="text" value="<?= $this->session->userdata('c_name') ?>" required="" />
                                                        <?= form_error('c_name') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                <div class="form-group form-group-small">
                                                    <label class="required">
                                                       <span style="color: #ff5555 !important;">*</span> Contact Number
                                                    </label>
                                                    <div class="">
                                                        <input class="form-control" name="c_contact" type="text" value="<?= $this->session->userdata('c_contact') ?>" required="" />
                                                        <?= form_error('c_contact') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group form-group-small">
                                                    <label class="required">
                                                        <span style="color: #ff5555 !important;">*</span> Email
                                                    </label>
                                                    <div class="">
                                                        <input class="form-control" name="c_email" type="email" value="<?= $this->session->userdata('c_email') ?>" />
                                                        <?= form_error('c_email') ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                <div class="form-group form-group-small">
                                                    <label class="">
                                                        New password (Optional)
                                                    </label>
                                                    <div class="">
                                                        <div class="input-group js-parent-focus input-group-with-border">
                                                            <input class="form-control js-child-focus js-visible-password" name="new_password" autocomplete="new-password" type="password" value="" pattern=".{5,}" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <section>
                                            <div class="regfieldtitle">Miscellaneous account info</div>
                                            <fieldset id="registration_fields" class="account_creation form-group" style="border: none;">
                                                <div class="clearfix"></div>
                                                <div class="rf_input_wrapper rf_only_f_0 required form-group text form-group row" data-f="0" data-v="0">
                                                    <label class="rf_input_label required col-md-3 form-control-label"> <span style="color: #ff5555 !important;">*</span> Address</label>
                                                    <div class="col-md-6">
                                                        <textarea type="text" name="c_address" value="" required class="text is_required form-control" ><?= $this->session->userdata('c_address') ?></textarea>
                                                        <?= form_error('c_address') ?>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </fieldset>
                                        </section>
                                    </div>
                                </div>

                                <footer class="form-footer">
                                    <button class="btn btn-default" data-link-action="save-customer" type="submit">
                                        Update
                                    </button>
                                </footer>
                            </form>

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
        