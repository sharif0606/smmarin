<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * Website
 */
//$route['default_controller'] = 'welcome';

 $route['default_controller'] = 'master';
 $route['about-us/(.+)'] = 'about/about_services_view/$1';
 $route['services/(.+)'] = 'about/about_services_view/$1';
 $route['privacy-policy/(.+)'] = 'about/about_services_view/$1';
 $route['terms-and-conditions/(.+)'] = 'about/about_services_view/$1';
 $route['product-view/(.+)/(.+)/(.+)/(.+)'] = 'news_view/news_info_view/$1/$2/$3/$4'; 
 $route['all-products/(.+)/(.+)'] = 'category_product_view/product_info_view/$1/$2';
 $route['all-products-sub/(.+)/(.+)'] = 'category_product_view/product_info_view_sub/$1/$2';
 $route['products'] = 'category_product_view/all_product_info';
 $route['products/(.+)'] = 'category_product_view/all_product_info/$1';
 $route['all-blog'] = 'blog_view/blog_list';
 $route['arch-blog/(.+)/(.+)'] = 'blog_view/blog_arch/$1/$2';
 $route['cat-blog/(.+)/(.+)'] = 'blog_view/blog_cat/$1/$2';
 $route['blog/(.+)'] = 'blog_view/blog_info_view/$1';
 $route['all-photo'] = 'photo_view/all_photo'; 

 $route['contact-us'] = 'contact/index';
 $route['contact-send'] = 'contact/contact_send';
 $route['cart'] = 'cartctrl/index';
 $route['cart-update/(.+)/(.+)/(.+)'] = 'cartctrl/updateItemQty/$1/$2/$3'; 
 $route['cart-remove/(.+)'] = 'cartctrl/removeItem/$1'; 
 
 $route['checkout'] = 'Checkoutctrl/index';
 $route['checkout-login'] = 'Checkoutctrl/login';
 $route['checkout_submit'] = 'Checkoutctrl/checkoutsubmit';
 $route['ordersuccess'] = 'Checkoutctrl/orderSuccess';

$route['register'] = 'customer_palenl/regi';
$route['login'] = 'customer_palenl/login';
$route['customer-login-check'] = 'customer_palenl/user_login_check';
$route['forget_pass'] = 'customer_palenl/forget_pass';
$route['customer-forget-check'] = 'customer_palenl/user_forget_check';
$route['retrive_pass'] = 'customer_palenl/retrive_pass';
$route['customer-retrive-check'] = 'customer_palenl/user_retrive_check';

$route['customer-logout'] = 'customer_palenl/logout';

$route['customer-dashboard'] = 'customer_palenl/index';
$route['customer-order'] = 'customer_palenl/order_his';
$route['customer-info'] = 'customer_palenl/info';
$route['show-customer-order/(.+)'] = 'customer_palenl/order_show/$1';

// admin part
// user information
$route['abcd'] = 'user/index';
$route['login-check'] = 'user/user_login_check';
$route['dashboard'] = 'super_admin/index';

$route['logout'] = 'super_admin/logout';

// category information
$route['add-category'] = 'category/add_category';
$route['save-category'] = 'category/save_category';
$route['category-list'] = 'category/category_list';
$route['delete-category/(.+)'] = 'category/delete_category/$1';
$route['edit-category/(.+)'] = 'category/edit_category/$1';
$route['update-category'] = 'category/update_category';

// category information
$route['add-sub_category'] = 'Subcategory/add_sub_category';
$route['save-sub_category'] = 'Subcategory/save_sub_category';
$route['sub_category-list'] = 'Subcategory/sub_category_list';
$route['delete-sub_category/(.+)'] = 'Subcategory/delete_sub_category/$1';
$route['edit-sub_category/(.+)'] = 'Subcategory/edit_sub_category/$1';
$route['update-sub_category'] = 'Subcategory/update_sub_category';

// order information
$route['order'] = 'order/order_list';
$route['delete-order/(.+)'] = 'order/delete_order/$1';
$route['edit-order/(.+)'] = 'order/edit_order/$1';
$route['update-order'] = 'order/update_order';
$route['show-order/(.+)'] = 'order/show_order/$1';
// customer information
$route['customer'] = 'customer/customer_list';
$route['delete-customer/(.+)/(.+)'] = 'customer/delete_customer/$1/$2';
$route['edit-customer/(.+)'] = 'customer/edit_customer/$1';
$route['update-customer'] = 'customer/update_customer';



// blog information
$route['add-blog'] = 'blog/add_blog';
$route['save-blog'] = 'blog/save_blog';
$route['blog-list'] = 'blog/blog_list';
$route['delete-blog/(.+)'] = 'blog/delete_blog/$1';
$route['edit-blog/(.+)'] = 'blog/edit_blog/$1';
$route['update-blog'] = 'blog/update_blog';

// news information
$route['add-news'] = 'news/add_news';
$route['save-news'] = 'news/save_news';
$route['news-list'] = 'news/news_list';
$route['delete-news/(.+)'] = 'news/delete_news/$1';
$route['edit-news/(.+)'] = 'news/edit_news/$1';
$route['update-news'] = 'news/update_news';

// photo information
$route['add-photo'] = 'photo/add_photo';
$route['save-photo'] = 'photo/save_photo';
$route['photo-list'] = 'photo/photo_list';
$route['delete-photo/(.+)'] = 'photo/delete_photo/$1';
$route['edit-photo/(.+)'] = 'photo/edit_photo/$1';
$route['update-photo'] = 'photo/update_photo';


// Page information

$route['new-page'] = 'page/new_page';
$route['save-page'] = 'page/save_page';
$route['page-list'] = 'page/page_list';

$route['delete-page/(.+)'] = 'page/delete_page/$1';
$route['edit-page/(.+)'] = 'page/edit_page/$1';
$route['update-page'] = 'page/update_page';

// Meta information

$route['meta'] = 'meta/meta_page';
$route['save-meta'] = 'meta/update_meta_page';

$route['settings'] = 'settings/settings_page';

$route['save-settings'] = 'settings/update_settings_page';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
