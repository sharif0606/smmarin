<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Edit Category </h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?= base_url(); ?>update-sub_category" enctype="multipart/form-data">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="category_id" required="required" class="form-control col-md-7 col-xs-12">
                                        <option value="">Select Category</option>
                                        <?php if($all_category){
                                            foreach($all_category as $cat){ ?>
                                                <option value="<?= $cat->category_id ?>" <?= $select_category_by_id->category_id==$cat->category_id?"selected":"" ?> ><?= $cat->category_name ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Category Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="category_name" value="<?php echo $select_category_by_id->category_name; ?>" required="required" class="form-control col-md-7 col-xs-12">
                                    <input type="hidden" name="sub_category_id" value="<?php echo $select_category_by_id->sub_category_id; ?>">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Image </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" name="category_image" class="form-control col-md-7 col-xs-12">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Category Show Front (Product category Only) </label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select name="show_front" class="form-control">
                                        <option value="0" <?= $select_category_by_id->show_front==0?"selected":""; ?>>No</option>
                                        <option value="1" <?= $select_category_by_id->show_front==1?"selected":""; ?>>Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="submit_block">
                                    <a href="<?php echo base_url();?>category-list" class="btn btn-primary">Back</a>
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