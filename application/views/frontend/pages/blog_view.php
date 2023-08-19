<div id="page_banner_container_2" class="breadcrumb_wrapper">
    <div class="breadcrumb_wrapper2">
        <div class="container">
            <div class="row">
                <div class="col-12 text-2">
                    <nav class="breadcrumb_nav">
                        <ul>
                            <li>
                                <a href="<?= base_url() ?>" class="text_color" title="Home">
                                    <span itemprop="name">Home</span>
                                </a>
                            </li>
                            <li class="navigation-pipe">/</li>
                            <li>
                                <a href="#" class="text_color" title="Blog">
                                    <span itemprop="name"><?= $title ?></span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="page-blog-default">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="wrapper-sticky">
                    <div class="main_column_box">
                        <div id="st_blog_block_archives" class="block column_block">
                            <div class="title_block title_align_0 title_style_0">
                                <div class="title_block_inner">Blog archives</div>
                            </div>
                            <div class="block_content">
                                <div class="acc_box category-top-menu">
                                    <ul class="category-sub-menu">
                                        <?php if($archives){
                                            $items = [];
                                            foreach ($archives as $a) {
                                               $items[$a['y']][] = $a['m'];
                                            }
                                            $months = array('','January','February','March','April','May','June','July ','August','September','October','November','December',);
                                            foreach($items as $k=>$as){ ?>
                                        <li>
                                            <div class="acc_header">
                                                <a href="" title="<?= $k ?>"><?= $k ?></a>
                                                <span class="acc_icon collapsed" data-toggle="collapse" data-target="#blog_archive_node_<?= $k ?>">
                                                    <i class="fa fa-plus acc_open fs_xl"></i>
                                                    <i class="fa fa-minus acc_close fs_xl"></i>
                                                </span>
                                            </div>
                                            <div class="collapse" id="blog_archive_node_<?= $k ?>">
                                                <ul class="category-sub-menu">
                                                    <?php foreach($as as $a){ ?>
                                                    <li>
                                                        <div class="acc_header">
                                                            <a href="<?= base_url('arch-blog').'/'.$k.'/'.$a ?>" title="<?= $months[$a] ?>"><?= $months[$a] ?> <?= $k ?></a>
                                                        </div>
                                                    </li>
                                                    <?php } ?>
                                                </ul>
                                            </div>
                                        </li>
                                        <?php }} ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="st_blog_block_categories block column_block">
                            <div class="title_block title_align_0 title_style_0">
                                <div class="title_block_inner">Blog categories</div>
                            </div>
                            <div class="block_content">
                                <div class="acc_box category-top-menu">
                                    <ul class="category-sub-menu">
                                        <?php if($categories){
                                            foreach($categories as $as){ ?>
                                                <li data-depth="0">
                                                    <div class="acc_header"><a href="<?= base_url('cat-blog').'/'.$as->category_id.'/'.urlencode($as->category_name) ?>" title="<?= $as->category_name ?>"><?= $as->category_name ?></a></div>
                                                </li>
                                        <?php } } ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-9">
                <div class="section-title">
                    <h4><?= $title ?></h4>
                    <span></span>
                </div>
                
                <section class="products_section">
                    <div class="products_slider display_as_grid">
                        <div class="st_posts product_list row grid">
                            <?php if($blogs){
                                foreach($blogs as $blog){
                            ?>
                            <div class="product_list_item col-fw-3 col-xxl-3 col-xl-4 col-lg-4 col-md-4 col-sm-6 col-6 first-item-of-screen-line first-screen-line first-item-of-large-line first-large-line first-item-of-desktop-line first-desktop-line first-in-line first-line first-item-of-tablet-line first-tablet-line first-item-of-mobile-line first-mobile-line first-item-of-portrait-line first-portrait-line">
                                <div class="block_blog">
                                    <div class="pro_outer_box">
                                        <div class="pro_first_box">
                                            <div class="blog_image">
                                                <a href="<?= base_url('blog/'.$blog->news_id) ?>"><img src="<?= base_url($blog->news_image) ?>" style="width:100%;height:200px"/></a>
                                            </div>
                                        </div>
                                        <div class="pro_second_box pro_block_align_0">
                                            <p class="s_title_block two_rows">
                                                <a href="<?= base_url('blog/'.$blog->news_id) ?>"><?= $blog->news_name ?></a>
                                            </p>

                                            <div class="blog_info">
                                                <span class="date-add"><i class="fa fa-clock-o mar_r4"></i> <?= $blog->post_date ?></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php }} ?>

                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
	