<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Edit Blog </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>update-blog" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="last-name" name="news_name" value="<?php echo $blog->news_name; ?>" class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" id="last-name" name="news_id" value="<?php echo $blog->news_id; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat-name">Category <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <select id="cat-name" name="fk_news_id" class="form-control col-md-7 col-xs-12" required="required">
                                        <?php
                                        $query=$this->db->query("select * from tbl_category where category_type=1 or category_type=2");
                                        $query_result=$query->result();
                                        foreach ($query_result as $category) {
                                            ?>
                                            <option value="<?php echo $category->category_id; ?>" <?= $blog->category_id==$category->category_id?"selected":"" ?>><?php echo $category->category_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price"> Photo <span class="">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;margin-bottom:10px;" type="file" id="pro-price" name="news_image" class="form-control col-md-7 col-xs-12" />
                                    <img src="<?php echo base_url().$blog->news_image;?>" width="70" height="40">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">PDF</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;" type="file" name="pdf" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span>*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<div id="gender" class="btn-group" data-toggle="buttons">
									<?php	
										$act = $chec = $act1 = $chec1 = "";
										$sts = $blog->news_status;
										if($sts == 1){
											$act = "active";
											$chec = "checked";
										}
										if($sts == 0){
											$act1 = "active";
											$chec1 = "checked";
										}
									?>
										
										<label class="btn btn-default <?= $act;?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										
											<input type="radio" name="news_status" value="1" <?= $chec;?> /> &nbsp; Published &nbsp;
											
										</label>
										
										<label class="btn btn-default <?= $act1;?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										
											<input type="radio" name="news_status" value="0" <?= $chec1;?> /> Unpublished
											
										</label>
										
									</div>
                                </div>
                            </div>
							
                            
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_description">Description <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control" id="myEdit" name="news_description" rows="10" cols="80" required ><?php echo $blog->news_description; ?></textarea>
                                </div>
							</div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Meta Description </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="meta_des" class="form-control col-md-7 col-xs-12" value="<?php echo $blog->meta_des; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Meta Keyword </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="meta_key" class="form-control col-md-7 col-xs-12" value="<?php echo $blog->meta_key; ?>">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="submit_block">
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- /page content -->