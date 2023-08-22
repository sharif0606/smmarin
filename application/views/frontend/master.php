<!doctype html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Muktodhara Tech. Ltd.">
     
    
    <link rel="icon" href="<?php echo base_url().$all_meta_data->fav_icon;?>">
    <title><?= $all_meta_data->site_title;?></title>
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontsite/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontsite/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontsite/css/owl.carousel.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontsite/css/owl.theme.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontsite/css/owl.transitions.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/frontsite/css/style.css?id=<?= time() ?>" />
    <script src="<?php echo base_url();?>assets/frontsite/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontsite/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontsite/js/main.js"></script>
    <script src="<?php echo base_url();?>assets/frontsite/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>assets/frontsite/js/bootstrap.min.js"></script>
    
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet"> 
	
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAappGfKHP41lgp6M-K39EqWXEQGVKYj24&callback=initMap"></script>
	<script src="<?php echo base_url();?>assets/frontend/js/isotope.js" type="text/javascript"></script>
	
	<?php
	if(isset($title)){
        if($title == "Details"){
            foreach($full_news_view as $v_news){
	?>
            	<meta name="description" content="<?= $v_news->meta_des;?>">
            	<meta name="keywords" content="<?= $v_news->meta_key;?>">
            	<meta property="og:url" content="<?php echo base_url().'news/'.$v_news->news_id.'/'.$v_news->fk_news_id;?>">
            	<meta property="og:description" content="<?php echo $v_news->news_description;?>">
            	<meta property="og:title" content="<?php echo $v_news->news_name;?>">
            	<meta property="og:site_name" content="<?= $all_meta_data->site_title;?>">
            	<meta property="fb:app_id" content="1405933432817561" /> 
                <meta property="og:type" content="website" /> 
                <meta property="og:image" content="<?php echo base_url().$v_news->news_image;?>">
                <meta property="og:image:type" content="image/jpeg" />
                <meta property="og:image:width" content="400" />
                <meta property="og:image:height" content="300" />
                <meta property="og:image:alt" content="<?php echo $v_news->news_name;?>" />
	<?php }}}else{?>
            	<meta name="description" content="<?= $all_meta_data->meta_des;?>">
            	<meta name="keywords" content="<?= $all_meta_data->meta_key;?>">
	<?php } ?>
	<style>
    	.navbar-expand-md .navbar-nav .dropdown-menu {
            width: 350px;
        }
	</style>
	
	
	
	<!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-N6MXCF0LVX"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'G-N6MXCF0LVX');
        </script>

    	<!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-NK36TCH');</script>
    <!-- End Google Tag Manager -->
</head>
<body>
    <div class="header sticky-top">
        <!-- Navbar -->
        <div class="row">
            <div class="col-lg-2 pr-0">
                <div class="second-logo text-center ">
                    <a class="" href="<?= base_url() ?>">
                        <img src="<?php echo base_url().$all_meta_data->site_second_logo;?>" style="height:147PX;width:auto !important;"  alt="" />
                    </a>
                </div>
            </div>
            <div class="col-lg-10 ">
                <div class="row">
                    <div class="col-8 col-sm-12">
                        <nav class="navbar navbar-expand-md navbar-light navbar-custom">
                            <div class="container-fluid p-0">
                                <a class="navbar-brand" href="<?= base_url() ?>">
                                    <img src="<?php echo base_url().$all_meta_data->site_logo;?>" style="height:60PX;width:auto !important;"  alt="" />
                                </a>
                                <?php
                                    $about_pages=$this->master_model->about_pages();
                                    $services_pages=$this->master_model->services_pages();
                                ?>
                                <!-- Collapse button -->
                                <button class="navbar-toggler" type="button" onclick="hide_sidebar('menu_div_inner','show')" aria-controls="basicExampleNav1" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                
                                <!-- Links -->
                                <div class="collapse navbar-collapse" id="basicExampleNav1">
                                    <!-- Right -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url();?>" class="nav-link waves-effect">
                                                Home
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="<?php echo base_url();?>about-us/6" class="nav-link waves-effect">
                                                About
                                            </a>
                                        </li>
                                        <!--<li class="nav-item dropdown">
                                            <a class="dropdown-toggle nav-link waves-effect" data-toggle="dropdown" href="#">Services <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                            <?php foreach ($services_pages as $services_pages){?>
                                                <li class="nav-item"><a class="nav-link waves-effect" href="<?php echo base_url();?>services/<?= $services_pages->page_id;?>"><?= $services_pages->page_title;?></a></li>
                                            <?php }?>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-toggle nav-link waves-effect" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                            <?php foreach ($about_pages as $about_pages){?>
                                                <li class="nav-item"><a class="nav-link waves-effect" href="<?php echo base_url();?>about-us/<?= $about_pages->page_id;?>"><?= $about_pages->page_title;?></a></li>
                                            <?php }?>
                                            </ul>
                                        </li>-->
                                        <!--<li class="nav-item"><a class="nav-link waves-effect" href="<?php echo base_url();?>all-photo">Gallary</a></li>
                                        
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-toggle nav-link waves-effect" data-toggle="dropdown" href="#">Products <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                            <?php
                                                $cats = $this->db->query("select * from tbl_category where category_type=3")->result();
                                                foreach($cats as $v_cat){
                                                    $page = $v_cat->category_name;
                                                    $cid = $v_cat->category_id;
                                                    if (!isset($pages_print[$page])) {
                                                        $pages_print[$page] = true;								
                                            ?>
                                                <li class="nav-item"><a class="nav-link waves-effect" href="<?php echo base_url();?>all-products/<?= $page;?>/<?= $cid;?>"><?= $page;?></a></li>
                                            <?php 	
                                                    }
                                            
                                                } 
                                            ?>
                                            
                                            </ul>
                                        </li>-->
                                        <li class="nav-item">
                                            <a class="nav-link waves-effect" href="<?= base_url('products') ?>">Products </a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link waves-effect" href="<?php echo base_url('all-blog');?>">Blog</a></li>
                                        <li class="nav-item"><a class="nav-link waves-effect" href="<?php echo base_url('contact-us');?>">Contact</a></li>
                                        <li class="nav-item  d-none d-md-block">
                                            <a href="<?= base_url('cart') ?>" title="View my shopping cart" rel="nofollow" class="st_shopping_cart dropdown_tri header_item ">
                                                <i class="fto-glyph icon_btn"></i>
                                                <span class="cart_text mar_r4">Cart</span>
                                                <span>(<span class="ajax_cart_quantity"><?= $this->cart->total_items() ?></span>)</span>
                                        </a>
                                        </li>
                                    </ul>
                                </div><!-- Links -->
                            </div>
                        </nav>
                    </div>
                    <div class="col-4 d-block d-md-none pt-4">
                        <ul class="list-inline navbar-custom mobile-menu">
                            <li class="list-inline-item">
                                <a href="<?= base_url('cart') ?>" title="View my shopping cart" rel="nofollow" class="st_shopping_cart dropdown_tri header_item ">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>(<span class="ajax_cart_quantity"><?= $this->cart->total_items() ?></span>)</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onclick="hide_sidebar('search-div','show')" class="st_shopping_cart"><i class="fa fa-search"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Navbar -->
                <div class="container-fluid d-none d-md-block pl-0" style="overflow-x: hidden;">
                    <div class="row d-flex">
                        <div class="col-12 col-lg-4 col-xl-4 skew ml-auto text">
                            <span><i class="fa fa-phone"></i> <?= $all_meta_data->site_number;?></span>
                        </div>
                        <div class="col-12 col-lg-4 col-xl-4 skew text">
                            <span><i class="fa fa-envelope"></i> <?= $all_meta_data->site_email;?></span>
                        </div>
                        <div class="col-xl-4 skew">
                            <form method="get" action="<?= base_url('search') ?>" class="search_widget_form">
                                <div class="search_widget_form_inner input-group round_item js-parent-focus input-group-with-border">
                                    <input type="text" class="form-control search_widget_text js-child-focus" name="s" value="" placeholder="Enter product keyword here..." autocomplete="off">
                                    <span class="input-group-btn">
                                        <button class="btn btn-search btn-less-padding btn-spin search_widget_btn link_color icon_btn" type="submit"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        
        
        
    </div>
        <div class="container-fluid d-block d-md-none" style="overflow-x: hidden;">
            <div class="row d-flex">
                <div class="col-12 col-lg-4 col-xl-4 skew-mob ml-auto text">
                    <span><i class="fa fa-phone"></i> <?= $all_meta_data->site_number;?></span>
                </div>
                <div class="col-12 col-lg-4 col-xl-4 skew-mob text">
                    <span><i class="fa fa-envelope"></i> <?= $all_meta_data->site_email;?></span>
                </div>
            </div>
        </div>

	    <?php echo $main_content; ?>
	
        <div class="footer-secondary">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>Enquire Now</h2>
                        <p>
                            Not able to find the product you need in our catalogue?<br />
                            Tell us what you need and we will search for you.
                        </p>
                        <p><a href="<?= base_url();?>contact-us" class="btn btn-default">Contact Us</a></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="container">
                <div class="d-none d-md-block">
                    <div class="row">
                        <div class="col-md-3">
                            <h4>Catalogue</h4>
                            <ul>
                                <?php
    								$pages_print = array();
    								foreach($cats as $v_cat){
    									$page = $v_cat->category_name;
    									$cid = $v_cat->category_id;
    									if (!isset($pages_print[$page])) {
    										$pages_print[$page] = true;								
    							?>
    									<li><a href="<?php echo base_url();?>all-products/<?= $page;?>/<?= $cid;?>"><?= $page;?></a></li>
    							<?php  } } ?>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>My Account</h4>
                            <ul>
                                <li><a href="<?= base_url('login') ?>">My Account</a></li>
                                <li><a href="<?= base_url('customer-order') ?>">My orders</a></li>
                                <li><a href="<?= base_url('customer-info') ?>">My personal info</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="<?= base_url();?>">Home</a></li>
                                <li><a href="<?= base_url();?>contact-us">Contact</a></li>
                                <li><a href="<?= base_url();?>privacy-policy/1">Privacy Policy</a></li>
                                <li><a href="<?= base_url();?>terms-and-conditions/2">Terms & Conditions</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4>Contact Us</h4>
                            <ul>
                                <li><p>Address: <?= $all_meta_data->site_address;?> </p></li>
                                <li><a href=""><i class="fa fa-envelope"></i> <?= $all_meta_data->site_email;?></a></li>
                                <li><a href=""><i class="fa fa-phone"></i> <?= $all_meta_data->site_number;?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>  
                <div class="accordion d-block d-md-none" id="accordionExample">
                	<div class="card">
                		<div class="card-header">
                			<button class="btn btn-link btn-block  text-dark" data-toggle="collapse" data-target="#CATALOGUE">
                				 <span class="float-left">CATALOGUE</span> <i class="fa fa-plus float-right pt-2  text-dark"></i>
                			</button>
                		</div>
                		<div class="collapse" id="CATALOGUE" data-parent="#accordionExample">
                			<div class="card-body">
                				<ul>
                                    <?php
        								$pages_print = array();
        								foreach($cats as $v_cat){
        									$page = $v_cat->category_name;
        									$cid = $v_cat->category_id;
        									if (!isset($pages_print[$page])) {
        										$pages_print[$page] = true;								
        							?>
        									<li><a href="<?php echo base_url();?>all-products/<?= $page;?>/<?= $cid;?>"><?= $page;?></a></li>
        							<?php  } } ?>
                                </ul>
                			</div>
                		</div>
                	</div>
                	<div class="card">
                		<div class="card-header">
                			<button class="btn btn-link btn-block  text-dark" data-toggle="collapse" data-target="#account">
                				 <span class="float-left">MY ACCOUNT</span> <i class="fa fa-plus float-right pt-2  text-dark"></i>
                			</button>
                		</div>
                		<div class="collapse" id="account" data-parent="#accordionExample">
                			<div class="card-body">
                				<ul>
                                    <li><a href="<?= base_url('login') ?>">My Account</a></li>
                                    <li><a href="<?= base_url('customer-order') ?>">My orders</a></li>
                                    <li><a href="<?= base_url('customer-info') ?>">My personal info</a></li>
                                </ul>
                			</div>
                		</div>
                	</div>
                	
                	<div class="card">
                		<div class="card-header">
                			<button class="btn btn-link btn-block  text-dark" data-toggle="collapse" data-target="#INFORMATION">
                				 <span class="float-left">INFORMATION</span> <i class="fa fa-plus float-right pt-2  text-dark"></i>
                			</button>
                		</div>
                		<div class="collapse" id="INFORMATION" data-parent="#accordionExample">
                			<div class="card-body">
                				<ul>
                                    <li><a href="<?= base_url();?>">Home</a></li>
                                    <li><a href="<?= base_url();?>contact-us">Contact</a></li>
                                    <li><a href="<?= base_url();?>privacy-policy/1">Privacy Policy</a></li>
                                    <li><a href="<?= base_url();?>terms-and-conditions/2">Terms & Conditions</a></li>
                                </ul>
                			</div>
                		</div>
                	</div>
                	<div class="card">
                		<div class="card-header">
                			<button class="btn btn-link btn-block  text-dark" data-toggle="collapse" data-target="#contact">
                				 <span class="float-left">CONTACT US</span> <i class="fa fa-plus float-right pt-2  text-dark"></i>
                			</button>
                		</div>
                		<div class="collapse" id="contact" data-parent="#accordionExample">
                			<div class="card-body">
                				<ul>
                                    <li><p>Address: <?= $all_meta_data->site_address;?> </p></li>
                                    <li><a href=""><i class="fa fa-envelope"></i> <?= $all_meta_data->site_email;?></a></li>
                                    <li><a href=""><i class="fa fa-phone"></i> <?= $all_meta_data->site_number;?></a></li>
                                </ul>
                			</div>
                		</div>
                	</div>
                	
                </div><!-- .accordion -->
        
        

                <div class="footer-bottom">
                    <div class="row">
                        <div class="col-md-7">
                            <p>Copyright © 2019 <?= $all_meta_data->site_title;?> All rights reserved.</p>
                        </div>
                        <div class="col-md-5">
                            Developed By - <a style="display: inline;" href="http://muktodharaltd.com/">Muktodhara Technology Limited</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
        
        <div class="sidebar_div">
            <div class="search_div_inner search-div">
                <div class="search_div_title">
                    <a href="#" onclick="hide_sidebar('search-div','hide')" class="float-left text-white"><i class="fa fa-angle-double-right"></i></a>
                    Search
                </div>
                <form method="get" action="<?= base_url('search') ?>" class="">
                    <div class=" input-group round_item js-parent-focus p-2">
                        <input type="text" class="form-control" name="s" value="" placeholder="Enter product keyword here..." autocomplete="off">
                	    <span class="input-group-btn">
                	        <button class="btn btn-search btn-less-padding btn-spin icon_btn" type="submit"><i class="fa fa-search"></i></button>
                	    </span>
                    </div>
               </form>
            </div>
            <div class="menu_div_inner">
                <div class="search_div_title">
                    <a href="#" onclick="hide_sidebar('menu_div_inner','hide')" class="float-left text-white"><i class="fa fa-angle-double-right"></i></a>
                    Menu
                </div>
                <ul class="list-group">
                    <a href="<?= base_url();?>"><li class="list-group-item"> Home </li></a>
                    <a href="<?= base_url();?>about-us/6"><li class="list-group-item"> About</li> </a>
					<a href="<?= base_url('products') ?>"><li class="list-group-item">Products</li> </a>
					<a href="<?= base_url('all-blog');?>"><li class="list-group-item">Blog</li></a>
					<a href="<?= base_url('contact-us');?>"><li class="list-group-item">Contact</li></a>
                </ul>
            </div>
        </div>

</body>
</html>
<script>
    function hide_sidebar(e,t){
        if(t=="show"){
            $('.'+e).fadeIn("slowly");
            $('.sidebar_div').show();
        }else{
            $('.'+e).fadeOut("slowly");
            $('.sidebar_div').hide();
        }
    }
    
    function hide_sidebar2(e,t){
        if(t=="show"){
            $('.'+e).fadeIn("slowly");
            $('.sidebar_div2').show();
        }else{
            $('.'+e).fadeOut("slowly");
            $('.sidebar_div2').hide();
        }
    }

</script>
<script>
$(document).ready(function(){
  //Add a minus icon to the collapse element that is open by default
  	$('.collapse.show').each(function(){
		$(this).parent().find(".fa").removeClass("fa-plus").addClass("fa-minus");
    });
      
  //Toggle plus/minus icon on show/hide of collapse element
	$('.collapse').on('shown.bs.collapse', function(){
		$(this).parent().find(".fa").removeClass("fa-plus").addClass("fa-minus");
	}).on('hidden.bs.collapse', function(){
		$(this).parent().find(".fa").removeClass("fa-minus").addClass("fa-plus");
	});       
});
</script>