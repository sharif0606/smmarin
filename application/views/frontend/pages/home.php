<style>
    .cont-box img {
        width: 100%;
        height: 250PX;
    }
</style>
<section>
    <div id="slider-animation" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#slider-animation" data-slide-to="0" class="active"></li>
            <?php for($i=1;$i<= count($slide_news);$i++){ ?>
            <li data-target="#slider-animation" data-slide-to="<?= $i ?>"></li>
            <?php } ?>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            
            <div class="carousel-item active">
                <img src="<?= base_url().$slide_news_1st->news_image;?>" style="width:100%; height:525px !important"  alt="<?= $slide_news_1st->news_name;?>" />
                <div class="text-box">
                    <h2> <?= $slide_news_1st->news_name;?> </h2>
                    <p><?= $slide_news_1st->news_description;?></p>
                </div>
            </div>
            
            <?php foreach($slide_news as $slide_news){ ?>
            <div class="carousel-item">
                <img src="<?= base_url().$slide_news->news_image;?>" style="width:100%; height:525px !important" />
                <div class="text-box">
                    <h2> <?= $slide_news->news_name;?> </h2>
                    <p><?= $slide_news_1st->news_description;?></p>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#slider-animation" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#slider-animation" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</section>
<div class="home-about">
    <div class="container">
        <div class="row">
            <div class="vc_column_container">
                <div class="vc_separator vc_separator_align_center title_about">
                    <span class="vc_sep_holder vc_sep_holder_l"><span style="border-color: #29aba4;" class="vc_sep_line"></span></span>
                    <h4>About Us</h4>
                    <span class="vc_sep_holder vc_sep_holder_r"><span style="border-color: #29aba4;" class="vc_sep_line"></span></span>
                </div>

                <p class="text-center"> <?= $all_meta_data->home_description;?> </p>
            </div>
        </div>
    </div>
</div>

<div class="product-range">
    <div class="container">
        <div class="section-title">
            <h4>PRODUCT RANGE</h4>
            <span></span>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="owl-demo" class="owl-carousel owl-theme">
                    <?php foreach($home_page_product_range as $hppr){?>
    					<a href="<?php echo base_url();?>all-products/<?= $hppr->category_name ?>/<?= $hppr->category_id ?>">
        				    <div class="item">
                                <div class="cont-box">
                                    <img src="<?php echo base_url().$hppr->category_image;?>" height="250px" />
                                    <h2 class="caption"><?php echo $hppr->category_name;?></h2>
                                </div>
                            </div>
    					</a>
    				<?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-new">
    <div class="container">
        <div class="section-title">
            <h4>New Arrivals</h4>
            <span></span>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="owl-demo1" class="owl-carousel owl-theme">
                    <?php foreach($home_page_product_new as $hppr){?>
                    <div class="item">
                        <div class="home-single-product">
                            <img src="<?php echo base_url().$hppr->news_image;?>" style="height:193px !important" />
                            <h3><?= $hppr->news_name ?></h3>
                            <h1><a href="<?php echo base_url();?>product-view/<?= $hppr->category_name ?>/<?= $hppr->news_name ?>/<?= $hppr->news_id ?>/<?= $hppr->fk_news_id ?>">View More</a></h1>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="product-range">
    <div class="container">
        <div class="section-title">
            <h4>Popular Items</h4>
            <span></span>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="owl-demo2" class="owl-carousel owl-theme">
                    <?php foreach($home_page_product_popular as $hppr){?>
                    <div class="item">
                        <div class="home-single-product">
                            <img src="<?php echo base_url().$hppr->news_image;?>" />
                            <h3><?= $hppr->news_name ?></h3>
                            <h1><a href="<?php echo base_url();?>product-view/<?= $hppr->category_name ?>/<?= $hppr->news_name ?>/<?= $hppr->news_id ?>/<?= $hppr->fk_news_id ?>">View More</a></h1>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="whyus">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>WHY CHOOSE US?</h2>
                <p><?= $all_meta_data->why_choose;?></p>
            </div>
            <div class="col-md-6">
                <ul class="whyus-icon">
                    <li>
                        <img src="<?= base_url('assets/frontsite/img/icon_technician.png') ?>" alt="" />
                        <h1>
                            Experienced<br />
                            Technicians
                        </h1>
                    </li>
                    <li>
                        <img src="<?= base_url('assets/frontsite/img/icon_verified.png') ?>" alt="" />
                        <h1>
                            Tested and<br />
                            Verified In-<br />
                            house
                        </h1>
                    </li>
                    <li>
                        <img src="<?= base_url('assets/frontsite/img/icon_extend.png') ?>" alt="" />
                        <h1>
                            Extend<br />
                            Lifetime of<br />
                            Equipment
                        </h1>
                    </li>
                    <li>
                        <img src="<?= base_url('assets/frontsite/img/icon_greeneffort.png') ?>" alt="" />
                        <h1>
                            Green Effort -<br />
                            Reduce<br />
                            Waste
                        </h1>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="value-add">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <img src="<?= base_url().$all_meta_data->value_mage;?>" alt="" />
            </div>
            <div class="col-12 col-sm-6">
                <h2>Our Value Add</h2>
                <p><?= $all_meta_data->com_value ?></p>

            </div>
        </div>
    </div>
</div>
<div class="home-partner">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6">
                <h2>
                    Company Profile
                </h2>
                <img src="<?= base_url().$all_meta_data->profile_image;?>" alt="" />
            </div>
            <div class="col-12 col-sm-6">
                <p><?= $all_meta_data->com_profile ?></p>
            </div>
        </div>
    </div>
</div>