<div class="product-gallery">
    <div class="container">
        <?php foreach($full_news_view as $v_news){ ?>
        <div class="row">
            <div class="col-md-5">
                <img src="<?= base_url().$v_news->news_image;?>" alt="" width="100%">
            </div>
            <?php $cond=array(0=>"",1=>"Refurbished",2=>"New product") ?>
            <div class="col-md-7">
                <h1><?= $v_news->news_name;?></h1>
                <p><span>Item Code:</span> <?= $v_news->item_code;?><br>
                <span>Brand:</span> <?= $v_news->brand;?><br>
                <span>Condition:</span> <?php echo $cond[$v_news->condition_p];?></p>
                
                <div class="product-description">
                    <h5><?= $v_news->news_description;?></h5>
                </div>
                
                <span class="price">BDT<?= $v_news->price;?></span>
                
                <form method="POST" action="<?= base_url('cartctrl/addcart') ?>">
                    <input type="hidden" name="id" value="<?= $v_news->news_id ?>">
                    <input type="hidden" name="price" value="<?= $v_news->price ?>">
                    <input type="hidden" name="name" value="<?= base64_encode($v_news->news_name) ?>">
                    <input type="hidden" name="image" value="<?= base64_encode($v_news->news_image) ?>">
                    <div class="cart_block">
                        <div class="row">
                           <div class="col-md-3">
                               <div class="product-count">
                                    <div class="count-inlineflex">
                                        <div class="qtyminus">-</div>
                                        <input type="text" name="qty" value="1" class="qty">
                                        <div class="qtyplus">+</div>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-default">Buy Now</button>
                            </div>
                        </div> 
                    </div>
                </form>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="product-range">
    <div class="container">
        <div class="section-title">
            <h4>Related products</h4>
            <span></span>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div id="owl-demo1" class="owl-carousel owl-theme">
                    <?php
                        foreach($related_news_view as $rnv){
                    ?>
                    <div class="item">
                        <div class="home-single-product">
                            <a href="<?= base_url()."product-view/".$rnv->category_name."/".$rnv->news_name."/".$rnv->news_id."/".$rnv->fk_news_id;?>">
                                <img src="<?php echo base_url().$rnv->news_image;?>" width="100%" height="258px" />
                                <h3><?php echo $rnv->news_name;?></h3>
                                <h1>BDT<?php echo $rnv->price;?></h1>
                            </a>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $('.qtyminus').click(function(){
        if(parseFloat($('.qty').val())>1)
            $('.qty').val(parseFloat($('.qty').val()) - 1);
    })
    $('.qtyplus').click(function(){
        $('.qty').val(parseFloat($('.qty').val()) + 1);
    })
</script>