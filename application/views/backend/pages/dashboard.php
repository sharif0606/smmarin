<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <!-- top tiles -->
        <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-clock-o"></i> Total Products</span>
                <div class="count green"><?php echo $this->db->count_all('tbl_news'); ?></div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                <span class="count_top"><i class="fa fa-user"></i> Total Photo</span>
                <div class="count green"><?php echo $this->db->count_all('tbl_photo'); ?></div>
            </div>
        </div>
        <!-- /top tiles -->
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title text-center">
                        <h1 class="elegantshadow">SM MARINE SERVICE</h1>
                        <div class="clearfix"></div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->