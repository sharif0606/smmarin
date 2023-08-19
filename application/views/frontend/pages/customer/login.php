
	<div class="contactus">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                   <h4>Customer Login</h4>
                   <span></span>
               </div>
            </div>
        </div> 
	</div>
  
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-3">
                <div class="contact-form">
                    <?php
                        $message=$this->session->flashdata('msg');
                        if($message){
                            echo "<h5 class='no_padding'>".$message."</h5><br>";
    						$this->session->unset_userdata('message');
    					}
					?>
                    <form method="post" action="<?php echo base_url('customer-login-check'); ?>">
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="fsubject">Email</label>
                      <div class="col-sm-9">          
                        <input type="email" class="form-control" id="email" name="c_email" placeholder="Your Email Address">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="fsubject">Password</label>
                      <div class="col-sm-9">          
                        <input type="password" class="form-control" id="password" name="password" placeholder="******">
                        <a href="<?= base_url('forget_pass') ?>" class="">Forgot your password?</a>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-3 col-sm-9 text-center">
                        <button type="submit" class="btn btn-default btn-block">Sign In</button>
                        <br>
                        <div>New Customer?</div>
                        <a href="<?= base_url('register')?>" class="btn btn-default">Sign Up</a>
                      </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>