<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                  <a href="<?php echo base_url();?>add-photo" class="btn btn-primary">
                 <i class="fa fa-plus" aria-hidden="true"></i> Add New Image </a> 
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content"> 
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
                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action table-responsive table-bordered">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">ID </th>
                            <th class="column-title"> Image </th>
                            <th class="column-title"> Category </th>
                             <th class="column-title"> Status </th>
                            <th class="column-title" style="width:180px;">Action
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            <?php
                        foreach($all_photo_info as $v_photo){?>
                          <tr>
                            <td class=" "><?php echo $v_photo->photo_id;?></td>
                           <!-- <td class=" "><?php //echo $v_photo->photo_name;?></td>-->
                            <td class=" "><img src="<?php echo base_url().$v_photo->photo_image;?>" width="70" height="40"></td>
                            <td class=" "><?php echo $v_photo->category_name;?></td>
                            <td class="a-right a-right">
                                <?php $status = $v_photo->status;
                                    if ($status == 1) { ?>
                                        <a class="btn btn-success btn-xs">Active</a>
                                        <?php } else {
                                            ?>
                                        <a class="btn btn-warning btn-xs">Inactive</a>
                                <?php }?>
                            </td>
                            <td class=" last">
                            <a href="<?php echo base_url();?>edit-photo/<?php echo $v_photo->photo_id;?>" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="<?php echo base_url();?>delete-photo/<?php echo $v_photo->photo_id;?>" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-remove"></i> Delete</a>
                            </td>
                          </tr>
                       
                       
                          <?php }?>
                        </tbody>
                      </table>
                    </div>
							
						
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->