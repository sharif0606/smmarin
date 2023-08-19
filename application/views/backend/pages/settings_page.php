<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Settings </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
					
					
                        <br />
						 <h4 class="box-title" style="color:#169F85;">
                        <?php
                        $message=$this->session->userdata('message');
                        if($message)
                        {
                            echo $message;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </h4>
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>save-settings" enctype="multipart/form-data">

                           <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Old Password<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Old Password" type="password" id="last-name" name="old_pass" value="" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">New Password<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="New Password" type="password" id="last-name" name="new_pass" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
							
							<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Confirm New Password<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input placeholder="Confirm New Password" type="password" id="last-name" name="confirm_new_pass" required="required" class="form-control col-md-7 col-xs-12">
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