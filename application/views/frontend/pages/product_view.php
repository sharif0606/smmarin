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
                                <a itemprop="item" href="" class="text_color" title="Products">
                                    <span itemprop="name">Products</span>
                                </a>
                            </li>
                            <?php if($title){ ?>
                            <li class="navigation-pipe">/</li>
                            <li>
                                <a href="" class="text_color" title="<?= urldecode($title) ?>">
                                    <span itemprop="name"><?= urldecode($title) ?></span>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
            </div>
            <h1 class="page_heading mb-3 text-1"><?= urldecode($c_name) ?></h1>
        </div>
    </div>
</div>

<div class="page-blog-default">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="d-block d-md-none filter-button pb-4">
                    <a href="javascript:;" onclick="hide_sidebar2('filter-div','show')" class="rightbar_tri btn btn-default" title="Filter">Filter</a><!--to do how to know filters are in left column or right column-->
                </div>
                <div class="wrapper-sticky d-none d-md-block">
                    <div class="main_column_box">
                        <div class="block-categories block column_block">
                            <div class="title_block flex_container title_align_0 title_style_0">
                                <div class="flex_child title_flex_left"></div>
                                <div class="title_block_inner" title="Categories" href="">Categories</div>
                                <div class="flex_child title_flex_right"></div>
                            </div>
                            <div class="block_content">
                                <div class="acc_box category-top-menu">
                                    <ul class="category-menu">
                                        <?php foreach($categories as $hppr){
                                        $sub=$this->db->query("select * from tbl_sub_category where category_id=$hppr->category_id")->result();
                                        ?>
                                        <li data-depth="0" class="">
                                            <div class="acc_header flex_container">
                                                <a class="flex_child" href="<?= base_url();?>all-products/<?= $hppr->category_name ?>/<?= $hppr->category_id ?>" title="<?= $hppr->category_name;?>"><?= $hppr->category_name;?></a>
                                                <?php if($sub){ ?><i class="pull-right fa fa-plus" onclick="$(this).parents('li').find('.category-sub-menu').toggle('slowly')"></i><?php } ?>
                                            </div>
                                            <?php
                                                if($sub){ 
                                                    echo "<ul class='category-sub-menu' style='display:none'>";
                                                    foreach($sub as $sub_c){ ?>
                                                    <li data-depth="1" class="">
                                                        <div class="acc_header flex_container">
                                                            <a class="flex_child" href="<?= base_url();?>all-products-sub/<?= $sub_c->category_name ?>/<?= $sub_c->sub_category_id ?>" title="<?= $sub_c->category_name;?>"><?= $sub_c->category_name;?></a>
                                                        </div>
                                                    </li>
                                             <?php } echo "</ul>"; } ?>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div id="search_filters_wrapper" class="column_filter block column_block">
                            <div class="title_block flex_container title_align_0 title_style_0">
                                <span class="title_block_inner">Filter By</span>
                            </div>
                            <div class="block_content">
                                <div id="search_filters">
                                    <section class="facet clearfix">
                                        <div class="facet-title-mobile toggle_btn hidden-lg-up">
                                            <div class="flex_container flex_space_between">
                                                <span class="facet-title-mobile-inner">Brand</span>
                                            </div>
                                        </div>

                                        <ul class="facet_filter_box facet_manufacturer">
                                            <?php foreach($brands as $brand){?>
                                            <li class="facet_filter_item_li">
                                                <label class="facet-label checkbox-inline">
                                                    <span class="custom-input-box">
                                                        <input onclick="filter_loc(this.value)" type="checkbox" class="custom-input" value="<?= base_url('products?q='.$brand->brand) ?>"/>
                                                        <span class="custom-input-item custom-input-checkbox"></span>
                                                    </span>
                                                        <?= $brand->brand ?>
                                                        <span class="magnitude">(<?= $brand->total ?>)</span>
                                                </label>
                                            </li>
                                            <?php } ?>
                                        </ul>
                                    </section>
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
                            <div class="row">
                                <?php foreach($categories as $hppr){?>
                                    <div class="col-md-4">
                                        <a href="<?php echo base_url();?>all-products/<?= $hppr->category_name ?>/<?= $hppr->category_id ?>">
                                            <div class="item">
                                                <div class="cont-box">
                                                    <img src="<?php echo base_url().$hppr->category_image;?>" style="width:100%; height:250px !important" />
                                                    <h2 class="caption"><?php echo $hppr->category_name;?></h2>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>

<div class="sidebar_div2">
    <div class="filter_div_inner filter-div">
        <div class="search_div_title">
            <a href="#" onclick="hide_sidebar2('filter-div','hide')" class="float-left text-white"><i class="fa fa-angle-double-right"></i></a>
            Filter
        </div>
        <div class="pl-2">
            <div class="main_column_box">
                <div class="block-categories block column_block">
                    <div class="title_block flex_container title_align_0 title_style_0">
                        <div class="flex_child title_flex_left"></div>
                        <div class="title_block_inner" title="Categories" href="">Categories</div>
                        <div class="flex_child title_flex_right"></div>
                    </div>
                    <div class="block_content">
                        <div class="acc_box category-top-menu">
                            <ul class="category-menu">
                                <?php foreach($categories as $hppr){
                                $sub=$this->db->query("select * from tbl_sub_category where category_id=$hppr->category_id")->result();
                                ?>
                                <li data-depth="0" class="">
                                    <div class="acc_header flex_container">
                                        <a class="flex_child" href="<?= base_url();?>all-products/<?= $hppr->category_name ?>/<?= $hppr->category_id ?>" title="<?= $hppr->category_name;?>"><?= $hppr->category_name;?></a>
                                        <?php if($sub){ ?><i class="pull-right fa fa-plus" onclick="$(this).parents('li').find('.category-sub-menu').toggle('slowly')"></i><?php } ?>
                                    </div>
                                    <?php
                                        if($sub){ 
                                            echo "<ul class='category-sub-menu' style='display:none'>";
                                            foreach($sub as $sub_c){ ?>
                                            <li data-depth="1" class="">
                                                <div class="acc_header flex_container">
                                                    <a class="flex_child" href="<?= base_url();?>all-products-sub/<?= $sub_c->category_name ?>/<?= $sub_c->sub_category_id ?>" title="<?= $sub_c->category_name;?>"><?= $sub_c->category_name;?></a>
                                                </div>
                                            </li>
                                     <?php } echo "</ul>"; } ?>
                                </li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="search_filters_wrapper" class="column_filter block column_block">
                    <div class="title_block flex_container title_align_0 title_style_0">
                        <span class="title_block_inner">Filter By</span>
                    </div>
                    <div class="block_content">
                        <div id="search_filters">
                            <section class="facet clearfix">
                                <div class="facet-title-mobile toggle_btn hidden-lg-up">
                                    <div class="flex_container flex_space_between">
                                        <span class="facet-title-mobile-inner">Brand</span>
                                    </div>
                                </div>

                                <ul class="facet_filter_box facet_manufacturer">
                                    <?php foreach($brands as $brand){?>
                                    <li class="facet_filter_item_li">
                                        <label class="facet-label checkbox-inline">
                                            <span class="custom-input-box">
                                                <input onclick="filter_loc(this.value)" type="checkbox" class="custom-input" value="<?= base_url('products?q='.$brand->brand) ?>"/>
                                                <span class="custom-input-item custom-input-checkbox"></span>
                                            </span>
                                                <?= $brand->brand ?>
                                                <span class="magnitude">(<?= $brand->total ?>)</span>
                                        </label>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function filter_loc(e){
        window.location.href = e;
    }
</script>