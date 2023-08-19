<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                  <a href="<?php echo base_url();?>new-page" class="btn btn-primary">
                 <i class="fa fa-plus" aria-hidden="true"></i> Create New Page </a> 
              </div>
                
             <!-- <div class="title_right">
                <div class="col-md-4 col-sm-4 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                 <form action="<?php //echo base_url();?>search/backend_news_search" method="POST">
                    <div style="padding: 0;" class="col-md-8">
                        <input type="text" class="form-control" name="search_keyword" placeholder="Search for...">
                    </div>
                     <div  style="padding: 0;" class="col-md-4">
                    <span class="input-group-btn">
                        <button  style=" height: 30px; border-left: 1px solid gray;" class="btn btn-default" type="submit">Go!</button>
                    </span>
                         </div>
                 </form> 
                    
                  </div>
                </div>
              </div>-->
                
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
                            <th class="column-title"> Title </th>
                            <th class="column-title"> Type </th>
                             <th class="column-title"> Status </th>
                            <th class="column-title" style="width:180px;">Action
                            </th>
                          </tr>
                        </thead>

                        <tbody>
                            
                         <?php if (isset($all_page_info)) { ?>
                
                    <?php foreach ($all_page_info as $data) { ?>
                        <tr>
                            <td><?php echo $data->page_id; ?></td>
                            <td><?php echo $data->page_title; ?></td>  
							
                            <td>
							<?php
								$type = $data->page_type;
								if($type == 1){
									echo "About";
								}
								if($type == 2){
									echo "Services";
								}
								if($type == 3){
									echo "Privacy & Policy";
								}
								if($type == 4){
									echo "Terms & Condition";
								}
							?>
							</td>
							
                            <td class="a-right a-right">
                                <?php $status = $data->page_status;
                                    if ($status == 1) { ?>
                                        <a class="btn btn-success btn-xs">Active</a>
                                        <?php } else {
                                            ?>
                                        <a class="btn btn-warning btn-xs">Inactive</a>
                                <?php }?>
                            </td>
                            <td class=" last">
                            <a href="<?php echo base_url();?>edit-page/<?php echo $data->page_id;?>" class="btn btn-info btn-xs"> <i class="glyphicon glyphicon-pencil"></i> Edit</a>
                            <a href="<?php echo base_url();?>delete-page/<?php echo $data->page_id;?>" class="btn btn-danger btn-xs"> <i class="glyphicon glyphicon-remove"></i> Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                
            <?php } else { ?>
                <div>No Data(s) found.</div>
            <?php } ?>
 
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