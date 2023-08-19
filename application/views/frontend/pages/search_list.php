<div id="page_banner_container_2" class="breadcrumb_wrapper">
    <div class="breadcrumb_wrapper2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-2">
                    <nav class="breadcrumb_nav">
                        <ul>
                            <li>
                                <a itemprop="item" href="<?= base_url() ?>" class="text_color" title="Home">
                                    <span itemprop="name">Home</span>
                                </a>
                            </li>
                            <li class="navigation-pipe">/</li>
                            <li>
                                <a itemprop="item" href="" class="text_color" title="Search">
                                    <span itemprop="name">Search</span>
                                </a>
                            </li>
                            <li class="navigation-pipe">/</li>
                            <li>
                                <a href="" class="text_color" title="<?= urldecode($title) ?>">
                                    <span itemprop="name"><?= urldecode($title) ?></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <h1 class="page_heading mb-3 text-1"><?= urldecode($title) ?></h1>
        </div>
    </div>
</div>

<div class="page-blog-default">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="wrapper-sticky">
                    <div class="main_column_box">
                        <div class="block-categories block column_block">
                            <div class="title_block flex_container title_align_0 title_style_0">
                                <div class="flex_child title_flex_left"></div>
                                <div class="title_block_inner" title="Categories" href="">Categories</div>
                                <div class="flex_child title_flex_right"></div>
                            </div>
                            <div class="block_content">
                                <div class="acc_box category-top-menu">
                                    <ul class="category-sub-menu category-sub-menu">
                                        <?php foreach($categories as $hppr){?>
                                        <li data-depth="0" class="">
                                            <div class="acc_header flex_container"><a class="flex_child" href="<?= base_url();?>all-products/<?= $hppr->category_name ?>/<?= $hppr->category_id ?>" title="<?= $hppr->category_name;?>"><?= $hppr->category_name;?></a></div>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <section class="products_section">
                    <div class="products_slider display_as_grid">
                        <div class="st_posts product_list row grid">
                            <?php foreach($all_blog_data as $abd){?>
                            <div class="product_list_item col-fw-3 col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 first-item-of-screen-line first-screen-line first-item-of-large-line first-large-line first-item-of-desktop-line first-desktop-line first-in-line first-line first-item-of-tablet-line first-tablet-line first-item-of-mobile-line first-mobile-line first-item-of-portrait-line first-portrait-line">
                                <div class="pro_outer_box clearfix home_default">
                                    <div class="pro_first_box moblie_flyout_buttons_show">
                                        <a href="<?= base_url()."product-view/".$abd->category_name."/".$abd->news_name."/".$abd->news_id."/".$abd->fk_news_id;?>" class="product_img_link">
                                            <img src="<?= base_url().$abd->news_image;?>" width="100%" style="height:280px !important" class="front-image" />
                                        </a>
                                    </div>
                                    <div class="pro_second_box pro_block_align_0">
                                        <div class="mini_name">
                                            <h3 class="s_title_block two_rows">
                                                <a href="<?= base_url()."product-view/".$abd->category_name."/".$abd->news_name."/".$abd->news_id."/".$abd->fk_news_id;?>" class="product_img_link"><?= $abd->news_name;?></a>
                                            </h3>
                                        </div>

                                        <div class="pro_list_reference pad_b6"><?= $abd->item_code;?></div>

                                        <div class="">
                                            <div class="product-price-and-shipping pad_b6">
                                                <span itemprop="price" content="4000" class="price"><?= $abd->price;?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
