<div class="user-area">
            <div class="container">
                <div class="row">
                    <div id="center_column" class="single_column col-sm-12">
                        <section id="main">
                            <h3 class="page_heading text-center">CREATE AN ACCOUNT</h3>

                            <section id="content" class="page-content row">
                                <div class="col-md-2"></div>
                                <div class="col-md-8">
                                    <aside id="notifications">
                                        <div class="container"></div>
                                    </aside>
                                    <?php if($this->session->flashdata('msg')){ ?>
                                        <?= $this->session->flashdata('msg') ?>
                                    <?php } ?>
                                    <form action="<?= base_url('register') ?>" id="customer-form" class="js-customer-form" method="post" data-registrationfields="true">
                                        <div class="form_content">
                                            <div class="form_content_inner">
                                                <div class="row com_grid_view">

                                                    <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                        <div class="form-group form-group-small">
                                                            <label class="">
                                                                Title
                                                            </label>
                                                            <div class="form-control-valign">
                                                                <label class="radio-inline">
                                                                    <span class="custom-radio">
                                                                        <input name="customer_gender" type="radio" value="1" checked="" />
                                                                        <span></span>
                                                                    </span>
                                                                    <span>Mr.</span>
                                                                </label>
                                                                <label class="radio-inline">
                                                                    <span class="custom-radio">
                                                                        <input name="customer_gender" type="radio" value="2" />
                                                                        <span></span>
                                                                    </span>
                                                                    <span>Ms.</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group form-group-small">
                                                            <label class="required">
                                                                <span style="color: #ff5555 !important;">*</span> Full name
                                                            </label>
                                                            <div class="">
                                                                <input class="form-control" name="customer_name" type="text" value="" required="" value="<?php echo set_value('customer_name'); ?>" />
                                                                        <?= form_error('customer_name') ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                        <div class="form-group form-group-small">
                                                            <label class="required">
                                                                <span style="color: #ff5555 !important;">*</span> Contact Number
                                                            </label>
                                                            <div class="">
                                                                <input class="form-control" name="customer_contact" type="text" value="" required="" value="<?php echo set_value('customer_contact'); ?>" />
                                                                        <?= form_error('customer_contact') ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group form-group-small">
                                                            <label class="required">
                                                                <span style="color: #ff5555 !important;">*</span> Email
                                                            </label>
                                                            <div class="">
                                                                <input class="form-control" name="customer_email" type="email" value="" required="" value="<?php echo set_value('customer_email'); ?>" />
                                                                        <?= form_error('customer_email') ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                        <div class="form-group form-group-small">
                                                            <label class="required">
                                                                <span style="color: #ff5555 !important;">*</span> Password
                                                            </label>
                                                            <div class="">
                                                                <div class="input-group js-parent-focus input-group-with-border">
                                                                    <input class="form-control js-child-focus js-visible-password" name="password" type="password" required="" />
                                                                    <span class="input-group-btn">
                                                                        <button class="btn show_password" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                                                                            <i class="fto-eye-off"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                        <div class="form-group form-group-small">
                                                            <label class="required">
                                                                <span style="color: #ff5555 !important;">*</span> Address
                                                            </label>
                                                            <div class="">
                                                                <div class="input-group js-parent-focus input-group-with-border">
                                                                    <textarea type="text" name="customer_address" value="" required class="text is_required form-control" ><?php echo set_value('customer_address'); ?></textarea>
                                                                        <?= form_error('customer_address') ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <footer class="form-footer">
                                            <button class="btn btn-default" data-link-action="save-customer" type="submit">
                                                Submit
                                            </button>
                                        </footer>
                                    </form>
                                </div>
                            </section>

                            <footer class="page-footer"></footer>
                        </section>
                    </div>
                </div>
            </div>
        </div>
        