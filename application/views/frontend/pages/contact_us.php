
	<div class="contactus">
        <div class="container">
            <div class="row">
               <div class="col-md-12">
                   <h4>Contact Us</h4>
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
                        $message=$this->session->userdata('message');
                        if($message){
                            echo "<h5 class='no_padding'>".$message."</h5><br>";
    						$this->session->unset_userdata('message');
    					}
					?>
                    <form method="post" action="<?php echo base_url(); ?>contact-send">
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="fsubject">Your Name</label>
                      <div class="col-sm-9">          
                        <input type="text" class="form-control" id="email" name="contact_name" placeholder="Your Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="fsubject">Subject</label>
                      <div class="col-sm-9">          
                        <input type="text" class="form-control" id="email" name="contact_subject" placeholder="Subject">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="email">Email address</label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="email" name="contact_email" placeholder="your@email.com">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-3" for="contact_message">Message</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" rows="5" name="contact_message" id="contact_message" placeholder="How can we help?"></textarea>
                      </div>
                    </div>
                    <div class="form-group">        
                      <div class="col-sm-offset-3 col-sm-9">
                        <button type="submit" class="btn btn-default">Send</button>
                      </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>