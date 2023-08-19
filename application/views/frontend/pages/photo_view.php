<section class="body">
		
			<div style='background: #000 url("<?= base_url();?>assets/frontend/images/back.png") no-repeat fixed top;' class="catBack row">
				<div class="overlayBack row">
					<div class="container">
						<h2>Gallary</h2>
					</div>
				</div>
			</div>
			
			<div class="pageConOverlay">
				<div class="container">
					<div class="row">
					
						<div class="work row">
							<div class="top-padding no-padding col-md-12 col-sm-12 col-xs-12">
								<h3 class="blockHeadline"><span>Image Gallary</span></h3><br><br>
								<div class="filtering">
										<span data-filter="*" class="active">All</span>
									<?php
									
										$pages_printed = array();
										
										foreach($all_photo_view_info as $v_cat){
											
											$page = $v_cat->category_name;
											$cid = $v_cat->category_id;
											
											if (!isset($pages_printed[$page])) {
												$pages_printed[$page] = true;								
									?>
										<span data-filter=".<?php echo "c_".$cid;?>" class=""><?php echo $page;?></span>
									<?php 	
											}
									
										} 
									?>
								</div>
								
								<div class="gallery">
								
									<?php
					
						foreach($all_photo_view_info as $v_photo){?>
				
						<div class="col-md-4 col-sm-6 col-xs-12 image-item <?php echo "c_".$v_photo->fk_photo_id;?>">
							<img class="myImg" src="<?php echo base_url().$v_photo->photo_image;?>" alt="<?php echo $v_photo->photo_image;?>" />	
							
						</div>
						
					<?php } ?>
									
									
								</div>
								<div id="myModal" class="modal">
									<span class="close">&times;</span>
									<img class="modal-content" id="img01">
								</div>
							</div>
						</div>

						<br>
					</div>
				</div>
			</div>
		
	</section>