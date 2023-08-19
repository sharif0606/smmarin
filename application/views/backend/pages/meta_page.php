<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Site Meta </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
						 <h4 class="box-title" style="color:#169F85;">
                            <?php
                                $message=$this->session->userdata('message');
                                if($message){
                                    echo $message;$this->session->unset_userdata('message');
                                }
                            ?>
                        </h4>
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>save-meta" enctype="multipart/form-data">
                           <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Site Title <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Site Title" type="text" id="last-name" name="site_title" value="<?= $all_meta_data->site_title;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
							 <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price"> Site Logo <span class="">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;margin-bottom:10px;" type="file" id="pro-price" name="site_logo" class="form-control col-md-7 col-xs-12" />
									<br>
                                    <img src="<?= base_url().$all_meta_data->site_logo;?>" width="auto" height="50" alt="image">
									<br>
                                </div>
                            </div>
							 <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logo"> Site Second Logo <span class="">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;margin-bottom:10px;" type="file" id="pro-price" name="site_second_logo" class="form-control col-md-7 col-xs-12" />
									<br>
                                    <img src="<?= base_url().$all_meta_data->site_second_logo;?>" width="auto" height="50" alt="image">
									<br>
                                </div>
                            </div>
                           
							
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_address">Address <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Address" type="text" id="last-name" name="site_address" value="<?= $all_meta_data->site_address;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>

							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_number">Number <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Number" type="text" id="last-name" name="site_number" value="<?= $all_meta_data->site_number;?>" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="site_email">Email <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input value="<?= $all_meta_data->site_email;?>" placeholder="E-mail" type="text" id="last-name" name="site_email" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Home Description <span>*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<textarea class="form-control" name="home_description" rows="10" cols="80" required ><?= $all_meta_data->home_description;?></textarea>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Meta Description <span>*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<textarea class="form-control" name="meta_des" rows="10" cols="80" required ><?= $all_meta_data->meta_des;?></textarea>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Meta Key <span>*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<textarea class="form-control" name="meta_key" rows="10" cols="80" required ><?= $all_meta_data->meta_key;?></textarea>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">WHY CHOOSE US</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<textarea class="form-control" name="why_choose" rows="10" cols="80" ><?= $all_meta_data->why_choose;?></textarea>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Our Value Add</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<textarea class="form-control" name="com_value" rows="10" cols="80" ><?= $all_meta_data->com_value;?></textarea>
                                </div>
                            </div>
                            
							 <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price"> Our Value Image <span class="">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;margin-bottom:10px;" type="file" name="value_mage" class="form-control col-md-7 col-xs-12" />
									<br>
                                    <img src="<?= base_url().$all_meta_data->value_mage;?>" width="auto" height="50" alt="image">
									<br>
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Company Profile</label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
									<textarea class="form-control" name="com_profile" rows="10" cols="80" ><?= $all_meta_data->com_profile;?></textarea>
                                </div>
                            </div>
                            
							 <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="price"> Profile Image <span class="">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;margin-bottom:10px;" type="file" name="profile_image" class="form-control col-md-7 col-xs-12" />
									<br>
                                    <img src="<?= base_url().$all_meta_data->profile_image;?>" width="auto" height="50" alt="image">
									<br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                            <!-- end text area --->
                            

                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="submit_block">
                                    <a href="<?php echo base_url();?>dashboard" class="btn btn-primary">Back</a>
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