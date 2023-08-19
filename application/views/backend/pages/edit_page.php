<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Edit Page </h2>

                      
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>update-page">

                           <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page_title">Page Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Title" type="text" id="last-name" name="page_title" value="<?php echo $select_page_by_id->page_title;?>" required="required" class="form-control col-md-7 col-xs-12" <?php if($select_page_by_id->page_type > 2){echo "disabled";}?>>
									

									<?php if($select_page_by_id->page_type > 2){
									?>	
										<input type="hidden" id="last-name" name="page_title" value="<?php echo $select_page_by_id->page_title;?>" required="required" class="form-control col-md-7 col-xs-12">
									
									<?php }?>
									
                                    <input type="hidden" id="last-name" name="page_id" value="<?php echo $select_page_by_id->page_id;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="page_type">Page Type <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
								
									
								
                                    <select id="cat-name" name="page_type" class="form-control col-md-7 col-xs-12" required="required" <?php if($select_page_by_id->page_type > 2){echo "disabled";}?>>
										<?php 
										$the_type = "";
										$t_type = $select_page_by_id->page_type;
										
										if($t_type == '1'){
											$the_type = "About";
										}else if($t_type == '2'){
											$the_type = "Services";
										}else if($t_type == '3'){
											$the_type = "Privacy & Policy";
										}else if($t_type == '4'){
											$the_type = "Terms & Conditions";
										}
										?>
                                       <option value="<?php echo $t_type; ?>"><?php echo $the_type; ?></option>
									   
									   
                                       <option value="1">About</option>
                                       <option value="2">Services</option>
                                       
                                    </select>
									
									<?php if($select_page_by_id->page_type > 2){
									?>	
										<input type="hidden" id="last-name" name="page_type" value="<?php echo $select_page_by_id->page_type; ?>" required="required" class="form-control col-md-7 col-xs-12">
									
									<?php }?>
									
                                </div>
                            </div>
                           
							
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span>*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<div id="gender" class="btn-group" data-toggle="buttons">
										
										
									<?php	
										$act = $chec = $act1 = $chec1 = "";
										$sts = $select_page_by_id->page_status;
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
										
											<input type="radio" name="page_status" value="1" <?= $chec;?> /> &nbsp; Published &nbsp;
											
										</label>
										
										<label class="btn btn-default <?= $act1;?>" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
										
											<input type="radio" name="page_status" value="0" <?= $chec1;?> /> Unpublished
											
										</label>
										
									</div>
                                </div>
                            </div>
							
                            
							
							<div class="form-group">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="news_description">Description <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea id="myEdit" class="form-control" name="page_description" rows="10" cols="80" required ><?php echo $select_page_by_id->page_description; ?></textarea>
                                </div>
								
        
							</div>
                            
                            
                            
                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="submit_block">
                                    <a href="<?php echo base_url();?>page-list" class="btn btn-primary">Back</a>
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