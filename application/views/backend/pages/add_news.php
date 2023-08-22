<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> New Product </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>save-news" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="last-name" name="news_name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Item Code </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="item_code" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Brand </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="brand" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat-name">Category <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <select id="cat-name" name="fk_news_id" class="form-control col-md-7 col-xs-12" required="required" onchange="$('.sub_c').hide();$('.sub_cat'+this.value).show()">
                                       <option></option>
                                        <?php
                                        $category_info = $this->db->query("select * from tbl_category where category_type=3")->result();
                                        foreach ($category_info as $category) {
                                        ?>
                                            <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat-name">Sub Category </label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <select id="cat-name" name="sub_category_id" class="form-control col-md-7 col-xs-12">
                                       <option></option>
                                        <?php
                                        $scategory_info = $this->db->query("select * from tbl_sub_category")->result();
                                        foreach ($scategory_info as $category) {
                                        ?>
                                            <option value="<?php echo $category->sub_category_id; ?>" style="display:none" class="sub_c sub_cat<?= $category->category_id ?>"><?php echo $category->category_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-price">Price </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="price" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat-name">Condition</label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <select id="cat-name" name="condition_p" class="form-control col-md-7 col-xs-12">
                                        <option value="0">Select Condition</option>
                                        <option value="1">Refurbished</option>
                                        <option value="2">New product</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Photo <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;" type="file" id="last-name" name="single_image" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Multiple Image <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;" type="file" id="last-name" name="news_images[]" multiple required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span>*</span></label>
								
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<div id="gender" class="btn-group" data-toggle="buttons">
										<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
											<input type="radio" name="news_status" value="1" required="required"> &nbsp; Published &nbsp;
										</label>
										<label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
											<input type="radio" name="news_status" value="0" required="required"> Unpublished
										</label>
									</div>
                                </div>
                            </div>
                          
        
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_description">Description <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="form-control" id="myEdit" name="news_description" rows="10" cols="80" required > </textarea>
                                </div>
							</div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Item Meta Description </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="meta_des" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Item Meta Keyword </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="meta_key" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat-name">&nbsp;</label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <label><input type="checkbox" name="new_item" value="1"> New Item</label>
                                    <label><input type="checkbox" name="popular_item" value="1"> Popular Item</label>
                                </div>
                            </div>
                            <!-- end text area --->
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="submit_block">
                                    <a href="<?php echo base_url();?>all_news/news_list" class="btn btn-primary">Back</a>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Publish</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>