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
                                    <span itemprop="name"><?= $blog->news_name ?></span>
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
                <section id="main">
                    <section id="content" class="page-blog-article">
                        <div id="blog_primary_block" class="blog_detail_15" itemscope="" itemtype="http://schema.org/NewsArticle">
                            <meta itemscope="" itemprop="mainEntityOfPage" itemtype="https://schema.org/WebPage" itemid="https://google.com/article">
                            <h1 class="page_heading blog_heading" itemprop="headline"><?= $blog->news_name ?></h1>
                            <div class="blog_info m-b-1">
                                <span class="posted_on">Posted on</span><span class="date-add"><?= $blog->post_date ?></span><meta itemprop="datePublished" content="24/04/2019"><meta itemprop="dateModified" content="24/04/2019">
                            </div>
                            <div class="hidden" itemprop="publisher" itemscope="" itemtype="https://schema.org/Organization">
                                <div itemprop="logo" itemscope="" itemtype="https://schema.org/ImageObject">
                                    <meta itemprop="url" content="<?= base_url($blog->news_image) ?>">
                                    <meta itemprop="width" content="290">
                                    <meta itemprop="height" content="35">
                                </div>
                                <meta itemprop="name" content="SM MARINE SERVICE">
                            </div>
                            <div class="hidden" itemprop="author" itemscope="" itemtype="https://schema.org/Person">
                                <meta itemprop="name" content="SM MARINE SERVICE">
                            </div>
                            <div class="m-b-1 blog_cover_box">
                                <div class="blog_image" itemprop="image" itemscope="" itemtype="https://schema.org/ImageObject">
                                    <a href="<?= base_url('blog/'.$blog->news_id) ?>" rel="bookmark" title="<?= $blog->news_name ?>">
                                        <img src="<?= base_url($blog->news_image) ?>" alt="<?= $blog->news_name ?>" style="width:100%;height:600px" class=" front-image">
                                    </a>
                                    <meta itemprop="url" content="<?= base_url($blog->news_image) ?>">
                                    <meta itemprop="width" content="1200">
                                    <meta itemprop="height" content="600">
                                </div>
                            </div>
                            <div class="blog_content style_content m-b-1 mt-4">
                                <p><?= $blog->news_description ?></p>
                                <?php if($blog->pdf != null){ ?>
                                    <a  href="<?= base_url($blog->pdf) ?>" target="_blank"><i class="fa fa-file-pdf-o" aria-hidden="true" style="font-size: 62px; color:red;"></i></a>
                                <?php }?>
                            </div>
                        </div>
                    </section>
                </section>
            </div>
        </div>
    </div>
</div>
	