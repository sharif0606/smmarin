<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2> Add Image </h2>

                       
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url(); ?>save-photo" enctype="multipart/form-data">



                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cat-name">Category <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12"> 
                                    <select id="cat-name" name="fk_photo_id" class="form-control col-md-7 col-xs-12" required>
                                        <option></option>
                                        <?php
                                        $category_info = $this->category_model->all_category_info();
                                        foreach ($category_info as $category) {
                                            ?>
                                            <option value="<?php echo $category->category_id; ?>" required="required"><?php echo $category->category_name; ?></option>
<?php } ?>
                                    </select>
                                </div>
                            </div>




                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pro-name">Image <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input style="padding:0;" type="file" id="last-name" name="photo_image" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Status<span>*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                  <div id="gender" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="status" value="1" required="required"> &nbsp; Published &nbsp;
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="status" value="0" required="required"> Unpublished
                                    </label>
                                  </div>
                                </div>
                            </div>
                 
                </div>
              </div>
            </div>
                            <!-- end text area --->
                            

                            
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="submit_block">
                                    <a href="<?php echo base_url();?>photo-list" class="btn btn-primary">Back</a>
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

<!-- /page content -->