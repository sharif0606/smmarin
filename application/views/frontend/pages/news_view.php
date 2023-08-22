 <!-- Google Fonts -->
 <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

<!-- CSS Libraries -->
<!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/frontsite/singleProduct/lib/slick/slick.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/frontsite/singleProduct/lib/slick/slick-theme.css" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="<?php echo base_url();?>assets/frontsite/singleProduct/css/style.css" rel="stylesheet">
<!-- Product Detail Start -->
<div class="product-detail">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="product-detail-top">
                    <div class="row ">
                        <div class="col-md-5">
                            <div class="product-slider-single normal-slider">
                                <?php foreach($full_news_view as $v_news){ ?>
                                    <img src="<?= base_url().$v_news->product_images;?>" alt="Product Image">
                                <?php } ?>
                            </div>
                            <div class="product-slider-single-nav normal-slider">
                                <?php foreach($full_news_view as $v_news){ ?>
                                    <div class="slider-nav-img"><img src="<?= base_url().$v_news->product_images;?>" alt="Product Image"></div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <?php  if (!empty($full_news_view)) {?>
                            <div class="product-content p-0">
                                <div class="title"><h1><?= $full_news_view[0]->news_name;?></h1></div>
                                <div class="price">
                                    <h4>Item Code:</h4>
                                    <p><?= $full_news_view[0]->item_code;?></p>
                                </div>
                                <div class="price">
                                    <h4>Brand:</h4>
                                    <p><?= $full_news_view[0]->brand;?></p>
                                </div>
                                <div class="price">
                                    <h4>Condition:</h4>
                                    <p><?= $full_news_view[0]->condition_p;?></p>
                                </div>
                                <div><hr></div>
                                <p><?= $full_news_view[0]->news_description;?></p>
                                <div><hr></div>
                                <div class="price">
                                    <h4>BDT:</h4>
                                    <p><?= $full_news_view[0]->price;?></p>
                                    <!-- <p>$99 <span>$149</span></p> -->
                                </div>
                                <form method="POST" action="<?= base_url('cartctrl/addcart') ?>">
                                    <input type="hidden" name="id" value="<?= $full_news_view[0]->news_id ?>">
                                    <input type="hidden" name="price" value="<?= $full_news_view[0]->price ?>">
                                    <input type="hidden" name="name" value="<?= $full_news_view[0]->news_name ?>">
                                    <input type="hidden" name="image" value="<?= base64_encode($full_news_view[0]->news_image) ?>">
                                    <div class="row mt-3">
                                        <div class="col-lg-3 col-md-6 col-sm-6">
                                            <div class="product-count">
                                                <div class="count-inlineflex">
                                                    <div class="qtyminus">-</div>
                                                    <input type="text" name="qty" value="1" class="qty">
                                                    <div class="qtyplus">+</div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <button type="submit" class="btn btn-default">Buy Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                
                <div class="product">
                    <div class="section-header text-center">
                        <h1>Related Products</h1>
                    </div>

                    <div class="row align-items-center product-slider product-slider-3">
                        <?php foreach($related_news_view as $rnv){ ?>
                        <div class="col-lg-3">
                            <div class="product-item">
                                <div class="product-image">
                                    <a href="<?= base_url()."product-view/".$rnv->category_name."/".$rnv->news_name."/".$rnv->news_id."/".$rnv->fk_news_id;?>">
                                        <img src="<?php echo base_url().$rnv->news_image;?>" alt="Product Image">
                                    </a>
                                </div>
                                <div class="text-center">
                                    <h6 class="m-0"><?php echo $rnv->news_name;?></h6>
                                    <p class="m-0">BDT <?php echo $rnv->price;?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                        <!-- <div class="col-lg-3">
                            <div class="product-item">
                                <div class="product-title">
                                    <a href="#">Product Name</a>
                                </div>
                                <div class="product-image">
                                    <a href="product-detail.html">
                                        <img src="<?php echo base_url();?>assets/frontsite/singleProduct/img/product-8.jpg" alt="Product Image">
                                    </a>
                                </div>
                                <div class="product-price d-flex justify-content-between">
                                    <h3><span>$</span>99</h3>
                                    <a class="btn" href=""></i>Buy Now</a>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Detail End -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="<?php echo base_url();?>assets/frontsite/singleProduct/lib/easing/easing.min.js"></script>
<script src="<?php echo base_url();?>assets/frontsite/singleProduct/lib/slick/slick.min.js"></script>

<!-- Template Javascript -->
<script src="<?php echo base_url();?>assets/frontsite/singleProduct/js/main.js"></script>
<script>
    $('.qtyminus').click(function(){
        if(parseFloat($('.qty').val())>1)
            $('.qty').val(parseFloat($('.qty').val()) - 1);
    })
    $('.qtyplus').click(function(){
        $('.qty').val(parseFloat($('.qty').val()) + 1);
    })
</script>