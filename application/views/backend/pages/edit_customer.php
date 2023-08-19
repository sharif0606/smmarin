<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Edit Customer </h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content"><br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>update-customer">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="c_gender">Title</label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <select id="c_gender" name="c_gender" class="form-control col-md-7 col-xs-12">
                                        <option value="0">Select Title</option>
                                        <option value="1" <?= $customer->c_gender==1?"selected":""; ?>>Mr.</option>
                                        <option value="2" <?= $customer->c_gender==2?"selected":""; ?>>Ms.</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="c_name">Name <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="c_name" name="c_name" value="<?= $customer->c_name; ?>" class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" name="id" value="<?= $customer->id; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Contact Number </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="c_contact" class="form-control col-md-7 col-xs-12" value="<?= $customer->c_contact ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Email </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="c_email" class="form-control col-md-7 col-xs-12" value="<?php echo $customer->c_email; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Email </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea name="c_address" class="form-control col-md-7 col-xs-12"><?php echo $customer->c_address; ?></textarea>
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