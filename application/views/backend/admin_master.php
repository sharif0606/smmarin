<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> SM MARINE Service</title>
        
    
        
        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>assets/backend/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo base_url(); ?>assets/backend/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo base_url(); ?>assets/backend/vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <!-- iCheck -->
        <link href="<?php echo base_url(); ?>assets/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/backend/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        
            <!-- Select2 -->
        <link href="<?php echo base_url(); ?>assets/backend/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    
    
        <!-- Switchery -->
        <link href="<?php echo base_url(); ?>assets/backend/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- Custom Theme Style -->
        <link href="<?php echo base_url(); ?>assets/backend/build/css/custom.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/backend/style.css" rel="stylesheet">
        
        
        
                <!-- Include external CSS. -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.css">
     
        <!-- Include Editor style. --
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_editor.pkgd.min.css" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/css/froala_style.min.css" rel="stylesheet" type="text/css" />-->
     
       
		<style>
		
	.elegantshadow {
			color: #131313;
			font-size:60px;
			padding:80px 0;
			background-color: #e7e5e4;
			letter-spacing: .15em;
			text-shadow: 
			  1px -1px 0 #767676, 
			  -1px 2px 1px #737272, 
			  -2px 4px 1px #767474, 
			  -3px 6px 1px #787777, 
			  -4px 8px 1px #7b7a7a, 
			  -5px 10px 1px #7f7d7d, 
			  -6px 12px 1px #828181, 
			  -7px 14px 1px #868585, 
			  -8px 16px 1px #8b8a89, 
			  -9px 18px 1px #8f8e8d, 
			  -10px 20px 1px #949392, 
			  -11px 22px 1px #999897, 
			  -12px 24px 1px #9e9c9c, 
			  -13px 26px 1px #a3a1a1, 
			  -14px 28px 1px #a8a6a6, 
			  -15px 30px 1px #adabab, 
			  -16px 32px 1px #b2b1b0, 
			  -17px 34px 1px #b7b6b5, 
			  -18px 36px 1px #bcbbba, 
			  -19px 38px 1px #c1bfbf, 
			  -20px 40px 1px #c6c4c4, 
			  -21px 42px 1px #cbc9c8, 
			  -22px 44px 1px #cfcdcd, 
			  -23px 46px 1px #d4d2d1, 
			  -24px 48px 1px #d8d6d5, 
			  -25px 50px 1px #dbdad9, 
			  -26px 52px 1px #dfdddc, 
			  -27px 54px 1px #e2e0df, 
			  -28px 56px 1px #e4e3e2;
		  }
			
		</style>
		
    </head>
    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="<?php echo base_url(); ?>dashboard" class="site_title"> <span> SM MARINE SERVICE </span></a>
                        </div>
                        <div class="clearfix"></div>
                        <!-- menu profile quick info -->
                        <div class="profile clearfix">
                            <div class="profile_pic">
                                <img src="<?php echo base_url(); ?>assets/backend/images/logo.png" alt="..." class="img-circle profile_img">
                            </div>
                            <div class="profile_info">
                              <!--<span>Welcome,</span>-->
                                <h2><?php echo $this->session->userdata('user_name');?></h2>                     
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /menu profile quick info -->
                        <br />  
                        
                        
                            <!-- sidebar menu admin -->
                            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                                <div class="menu_section">
                                    <h3>General</h3>
                                    <ul class="nav side-menu">
                                        <li><a href="<?php echo base_url(); ?>dashboard"><i class="fa fa-home"></i> Home</a></li>
                                        <li><a><i class="fa fa-edit"></i>Category<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?php echo base_url(); ?>add-category">Add Category</a></li>
                                                <li><a href="<?php echo base_url(); ?>category-list">Category List</a></li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-edit"></i>Sub Category<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?= base_url(); ?>add-sub_category">Add Sub Category</a></li>
                                                <li><a href="<?= base_url(); ?>sub_category-list">Sub Category List</a></li>
                                            </ul>
                                        </li>
                                        <li><a><i class="fa fa-edit"></i>Products<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?php echo base_url(); ?>add-news">Add Product</a></li>
                                                <li><a href="<?php echo base_url(); ?>all_news/news_list">Product Lists</a></li>
                                            </ul>
                                        </li>
										<li><a href="<?php echo base_url(); ?>order"><i class="fa fa-edit"></i> Order</a></li>
										<li><a href="<?php echo base_url(); ?>customer"><i class="fa fa-users"></i> Customer</a></li>
                                      
                                        
                                        <li><a><i class="fa fa-edit"></i>Blog / Sliders<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?php echo base_url('add-blog'); ?>">Add Blog / Slider</a></li>
                                                <li><a href="<?php echo base_url('blog-list'); ?>">Blog / Slider Lists</a></li>
                                            </ul>
                                        </li>
                                        
                                        <li><a><i class="fa fa-edit"></i> Gallary<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?php echo base_url(); ?>add-photo">Add Image</a></li>
                                                <li><a href="<?php echo base_url(); ?>photo-list">Image List</a></li>
                                            </ul>
                                        </li>
                                        
										<li><a><i class="fa fa-edit"></i> Pages<span class="fa fa-chevron-down"></span></a>
                                            <ul class="nav child_menu">
                                                <li><a href="<?php echo base_url(); ?>new-page">New Page</a></li>
                                                <li><a href="<?php echo base_url(); ?>page-list">Page List</a></li>
                                            </ul>
                                        </li>
										
										<li><a href="<?php echo base_url(); ?>meta"><i class="fa fa-edit"></i> Website Info</a></li>
										
										<li><a href="<?php echo base_url(); ?>settings"><i class="fa fa-edit"></i> User Settings</a></li>

                                    </ul>
                                </div>
                                
                               
                                
                                
                            </div>
                            <!-- /sidebar menu admin -->  
                            
                            
                            <!-- /sidebar menu branch --> 
                      
                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <!--<a data-toggle="tooltip" data-placement="top" title="Settings">
                              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>-->
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url(); ?>super_admin/logout">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>
                <!-- top navigation -->
                <div class="top_nav">
                    <div class="nav_menu">
                        <nav>
                            <div class="nav toggle">
                                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                            </div>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="">
                                    <a href="javascript:;" class="user-profile dropdown-toggle hidden-print" data-toggle="dropdown" aria-expanded="false">
                                        <img src="images/img.jpg" alt=""> <?php echo $this->session->userdata('user_name'); ?>
                                        <span class=" fa fa-angle-down"></span>
                                    </a>
                                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                                        <li><a href="<?php echo base_url(); ?>super_admin/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                    </ul>
                                </li>                               
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /top navigation -->
                <!-- page content -->

                <?php echo $admin_main_content; ?>

                <!-- /page content -->

                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        <a href="http://muktodharaltd.com/">Developed By Muktodhara Technology Limited.</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>
        
     
        
        
        
        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/backend/vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo base_url(); ?>assets/backend/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- Switchery -->
        <script src="<?php echo base_url(); ?>assets/backend/vendors/switchery/dist/switchery.min.js"></script>
        
        
        
            <!-- Select2 -->
    <script src="<?php echo base_url(); ?>assets/backend/vendors/select2/dist/js/select2.full.min.js"></script>
    
    
    
        <!-- FastClick -->
        <script src="<?php echo base_url(); ?>assets/backend/vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo base_url(); ?>assets/backend/vendors/nprogress/nprogress.js"></script>
        <!-- bootstrap-wysiwyg -->
        <script src="<?php echo base_url(); ?>assets/backend/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="<?php echo base_url(); ?>assets/backend/vendors/google-code-prettify/src/prettify.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo base_url(); ?>assets/backend/build/js/custom.min.js"></script>
        
        
        
        
        
        
        <!-- Include external JS libs. -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/codemirror.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.0/mode/xml/xml.min.js"></script>
     
        <!-- Include Editor JS files. -->
        
        <script src="//cdn.ckeditor.com/4.9.0/full/ckeditor.js"></script>
        
        <!-- <script src="https://cdn.ckeditor.com/4.9.0/standard/ckeditor.js"></script> -->
        
        
       <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/froala-editor/2.7.5/js/froala_editor.pkgd.min.js"></script>-->
        



<script>
     CKEDITOR.replace( 'myEdit' );
</script>
     
        <!-- Initialize the editor. -->
        <!--<script> $(function() { $('.froala_editor').froalaEditor() }); </script>-->
      
        
        
         <script>
        $(document).ready(function(){
            $(".fr-quick-insert").hide();
        });
        </script>
        
        
    </body>
</html>
