<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> New Post </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>save-blog" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="last-name" name="news_name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat-name">Category <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <select id="cat-name" name="fk_news_id" class="form-control col-md-7 col-xs-12" required="required">
                                       <option></option>
                                        <?php
                                        $category_info = $this->db->query("select * from tbl_category where category_type=1 or category_type=2")->result();
                                        foreach ($category_info as $category) {
                                        ?>
                                            <option value="<?php echo $category->category_id; ?>"><?php echo $category->category_name; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Photo <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;" type="file" id="last-name" name="news_image" required="required" class="form-control col-md-7 col-xs-12">
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
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Meta Description </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="meta_des" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Meta Keyword </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="meta_key" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <!-- end text area --->
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="submit_block">
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