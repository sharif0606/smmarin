<div class="checkout_wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="checkout_left_column mb-3">
                    <section id="checkout-personal-information-step" class="checkout-step -current -reachable js-current-step">
                        <div class="step-title flex_container">
                            <div class="heading_color fs_lg font-weight-bold">
                                <i class="fto-ok-1 fs_md done"></i>
                                <span class="step-number">1</span>
                                Personal Information
                            </div>
                        </div>
                        <?= $this->session->flashdata('msg') ?>
                        <div class="content">
                            <div class="sttab_block sttab_2 sttab_2_1">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#checkout-guest-form" role="tab" title="Order as a guest">
                                            Order as a guest
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-link-action="show-login-form" data-toggle="tab" href="#checkout-login-form" role="tab" title="Sign in">
                                            Sign in
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="checkout-guest-form" role="tabpanel">
                                        <div class="tab-pane-body">
                                            <form action="<?= base_url('checkout_submit') ?>" id="customer-form" method="post">
                                                <div class="form_content">
                                                    <div class="form_content_inner">
                                                        <div class="row com_grid_view">
                                                            <input type="hidden" name="id_customer" value="<?= $this->session->userdata('customer_id') ?>" />

                                                            <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                                <div class="form-group form-group-small">
                                                                    <label class="">
                                                                        Title
                                                                    </label>
                                                                    <div class="form-control-valign">
                                                                        <label class="radio-inline">
                                                                            <span class="custom-radio">
                                                                                <input name="customer_gender" type="radio" value="1" required <?= $this->session->userdata('c_gender') ==1?"checked":"" ?> />
                                                                                <span></span>
                                                                            </span>
                                                                            <span>Mr.</span>
                                                                        </label>
                                                                        <label class="radio-inline">
                                                                            <span class="custom-radio">
                                                                                <input name="customer_gender" type="radio" value="2" required <?= $this->session->userdata('c_gender') ==2?"checked":"" ?> />
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
                                                                        <input class="form-control" name="customer_name" type="text" value="<?= $this->session->userdata('c_name') ?>" required="" />
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
                                                                        <input class="form-control" name="customer_contact" type="text" value="<?= $this->session->userdata('c_contact') ?>" required="" />
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="form-group form-group-small">
                                                                    <label class="required">
                                                                        <span style="color: #ff5555 !important;">*</span> Email
                                                                    </label>
                                                                    <div class="">
                                                                        <input class="form-control" name="customer_email" type="email" value="<?= $this->session->userdata('c_email') ?>" />
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p>
                                                            <span class="font-weight-bold">Create an account</span> <span>(optional)</span>
                                                            <br />
                                                            <span>And save time on your next order!</span>
                                                        </p>
                                                        <div class="row com_grid_view">
                                                            <div class="col-lg-6 first-item-of-large-line first-item-of-desktop-line first-item-of-line">
                                                                <div class="form-group form-group-small">
                                                                    <label class="">
                                                                        Password (Optional)
                                                                    </label>
                                                                    <div class="">
                                                                        <div class="input-group input-group-with-border">
                                                                            <input class="form-control" name="password" type="password" value="" autocomplete="new-password" />
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <section>
                                                            <div class="regfieldtitle">Miscellaneous account info</div>
                                                            <fieldset id="registration_fields" class="account_creation form-group" style="border: none;">
                                                                <div class="clearfix"></div>
                                                                <div class="rf_input_wrapper rf_only_f_0 required form-group text form-group row" data-f="0" data-v="0">
                                                                    <label class="rf_input_label required col-md-3 form-control-label"> <span style="color: #ff5555 !important;">*</span> Address</label>
                                                                    <div class="col-md-6">
                                                                        <textarea type="text" name="customer_address" value="" required class="text is_required form-control" ><?= $this->session->userdata('c_address') ?></textarea>
                                                                    </div>
                                                                    <div class="clearfix"></div>
                                                                </div>
                                                            </fieldset>
                                                            <div id="conditions-to-approve" method="GET">
                                                                <ul>
                                                                    <li class="flex_container flex_start">
                                                                        <span class="custom-input-box">
                                                                            <input id="conditions_to_approve[terms-and-conditions]" name="conditions_to_approve[terms-and-conditions]" required="" type="checkbox" value="1" class="ps-shown-by-js custom-input" />
                                                                            <span class="custom-input-item custom-input-checkbox"><i class="fto-ok-1 checkbox-checked"></i></span>
                                                                        </span>
                                                                        <label class="js-terms flex_child" for="conditions_to_approve[terms-and-conditions]">
                                                                            I agree to the <a href="<?= base_url()?>/terms-and-conditions/2" target="_blank" id="cta-terms-and-conditions-0">terms of service</a> and will adhere to them unconditionally.
                                                                        </label>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </section>
                                                    </div>
                                                </div>

                                                <footer class="form-footer">
                                                    <button class="continue btn btn-default btn-spin" name="continue" data-link-action="register-new-customer" type="submit" value="1">
                                                        Place Order
                                                    </button>
                                                </footer>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="checkout-login-form" role="tabpanel">
                                        <div class="tab-pane-body">
                                            <form id="login-form" action="<?= base_url('checkout-login') ?>" method="post">
                                                <div class="form_content">
                                                    <div class="form_content_inner">
                                                        <input type="hidden" name="back" value="" />

                                                        <div class="form-group form-group-small">
                                                            <label class="required">
                                                                Email
                                                            </label>
                                                            <div class="">
                                                                <input class="form-control" name="c_email" type="email" value="" required="" />
                                                            </div>
                                                        </div>

                                                        <div class="form-group form-group-small">
                                                            <label class="required">
                                                                Password
                                                            </label>
                                                            <div class="">
                                                                <div class="input-group js-parent-focus input-group-with-border">
                                                                    <input class="form-control js-child-focus js-visible-password" name="password" type="password" value="" pattern=".{5,}" required="" />
                                                                    <span class="input-group-btn">
                                                                        <button class="btn show_password" type="button" data-action="show-password" data-text-show="Show" data-text-hide="Hide">
                                                                            <i class="fto-eye-off"></i>
                                                                        </button>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="p-b-1">
                                                            <a href="<?= base_url('forget_pass') ?>" class="forgot-password" rel="nofollow" title="Forgot your password?">
                                                                Forgot your password?
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <footer class="form-footer">
                                                    <input type="hidden" name="submitLogin" value="1" />

                                                    <button class="continue btn btn-default btn-spin" name="continue" data-link-action="sign-in" type="submit" value="1">
                                                        Continue
                                                    </button>
                                                </footer>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4 checkout_right_wrapper flex-lasts">
                <div class="checkout_right_column mb-3">
                    <section id="js-checkout-summary" class="js-cart">
                        <div class="card-block checkout-summary-block">
                            <div class="cart-summary-products">
                                <div class="mar_b6">
                                    <a href="#" class="font-weight-bold collapsed" data-toggle="collapse" data-target="#cart-summary-product-list" aria-expanded="false">
                                        1 item
                                        <i class="fa fa-angle-down mar_l4"></i>
                                    </a>
                                </div>

                                <div class="collapse" id="cart-summary-product-list" aria-expanded="false" style="">
                                    <ul class="summary-product-list">
                                        <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
                                        <li class="summary-product-item">
                                            <a href="#" title="<?= base64_decode($item["name"]) ?>" class="mar_r6">
                                                <img class="general_border" src="<?= base_url().base64_decode($item["image"]);?>" alt="<?= base64_decode($item["name"]) ?>" />
                                            </a>
                                            <div class="product-quantity mar_r4"><?= $item["qty"] ?>x</div>
                                            <div class="mar_r4">
                                                <div class="product-name mar_b4"><?= base64_decode($item["name"]) ?></div>
                                            </div>
                                            <div class="summary-product-price">
                                                <span class="product-price price">BDT<?= $item["price"] ?></span>
                                            </div>
                                        </li>
                                         <?php } } ?>
                                    </ul>
                                </div>
                            </div>

                            <div class="cart-summary-line clearfix cart-summary-subtotals" id="cart-subtotal-products">
                                <span class="label">Subtotal</span>
                                <span class="value price">BDT<?= $this->cart->total() ?></span>
                            </div>
                            <div class="cart-summary-line clearfix cart-summary-subtotals" id="cart-subtotal-shipping">
                                <span class="label">Shipping</span>
                                <span class="value price">--</span>
                            </div>
                        </div>

                        <hr />

                        <div class="cart-summary-totals card-block">
                            <div class="cart-summary-line clearfix cart-total">
                                <span class="label">Total</span>
                                <span class="value price fs_lg font-weight-bold">BDT<?= $this->cart->total() ?></span>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
