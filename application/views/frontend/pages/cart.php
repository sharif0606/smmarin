<div class="cart-page">
    <div class="container">
        <div class="row">
            <!-- Left Block: cart product informations & shpping -->
            <div class="cart-grid-body col-12 col-lg-8 mb-3">
                <!-- cart products detailed -->
                <div class="card card_trans mb-3">
                    <div class="card-header">
                        Shopping Cart
                    </div>

                    <div class="cart-overview js-cart">
                        <ul class="cart-items base_list_line mb-3 m-t-1">
                            <li class="cart-item line_item">
                                <div class="product-line-grid container-fluid">
                                    <?php if($this->cart->total_items() > 0){ foreach($cartItems as $item){ ?>
                                    <div class="row">
                                        <!--  product left content: image-->
                                        <div class="product-line-grid-left col-md-2 col-3">
                                            <span class="product-image media-middle">
                                                <?php if(isset($item["image"])){ ?>
                                                <img src="<?= base_url().base64_decode($item["image"]);?>" width="70" height="70" alt="Furuno GP-150 GPS" />
                                                <?php } ?>
                                            </span>
                                        </div>

                                        <!--  product left body: description -->
                                        <div class="product-line-grid-body col-md-5 col-7">
                                            <div class="product-line-info cartname">
                                                <a class="label"><?= $item["name"] ?></a>
                                            </div>

                                            <div class="product-line-info product-price mar_b6">
                                                <div class="current-price">
                                                    <span class="price">BDT<?= $item["price"] ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <!--  product left body: description -->
                                        <div class="product-line-grid-right product-line-actions col-md-5 col-12">
                                            <div class="row">
                                                <div class="col-md-10 col-7">
                                                    <div class="row">
                                                        <div class="col-md-6 col-6">
                                                            <div class="product-count-cart">
                                                                <form action="#" class="count-inlineflex">
                                                                    <a href="<?= base_url('cart-update/'.$item['rowid'].'/'.$item['qty'].'/-') ?>" class="qtyminus btn" style="padding: 0">-</a>
                                                                    <input type="text" name="quantity" value="<?= $item["qty"] ?>" class="qty">
                                                                    <a href="<?= base_url('cart-update/'.$item['rowid'].'/'.$item['qty'].'/+') ?>" class="qtyplus btn" style="padding: 0">+</a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6 col-2">
                                                            <span class="product-price price">
                                                                <strong> BDT<?= $item["subtotal"] ?> </strong>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-2 text-right">
                                                    <div class="cart-line-product-actions">
                                                        <a href="<?= base_url('cart-remove/'.$item['rowid']) ?>">
                                                            <i class="fa fa-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } } ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <a href="<?= base_url() ?>" class="btn btn-default" title="Continue shopping"> <i class="fa fa-angle-left"></i> Continue shopping </a>

                <!-- shipping informations -->
            </div>

            <!-- Right Block: cart subtotal & cart total -->
            <div class="cart-grid-right col-12 col-lg-4 mb-3">
                <div class="card card_trans cart-summary">
                    <div class="cart-detailed-totals">
                        <div class="card-block">
                            <div class="cart-summary-line clearfix" id="cart-subtotal-products">
                                <span class="label js-subtotal">
                                    <?= $this->cart->total_items() ?> <?= $this->cart->total_items()>1?"items":"item" ?>
                                </span>
                                <div class="value price">BDT<?= $this->cart->total() ?></div>
                            </div>
                            <div class="cart-summary-line clearfix" id="cart-subtotal-shipping">
                                <span class="label">
                                    Shipping
                                </span>
                                <div class="value price">
                                    --
                                    <div class="shipping_sub_total_details"></div>
                                </div>
                            </div>
                        </div>

                        <hr />

                        <div class="card-block">
                            <div class="cart-summary-line clearfix cart-total">
                                <span class="label">Total</span>
                                <span class="value price fs_lg font-weight-bold">BDT<?= $this->cart->total() ?></span>
                            </div>
                        </div>

                        <hr />
                    </div>

                    <div class="checkout cart-detailed-actions card-block">
                        <a href="<?= base_url('checkout') ?>" class="btn btn-default btn-block">Proceed to checkout</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>