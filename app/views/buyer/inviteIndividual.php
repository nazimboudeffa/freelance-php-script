<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<!--MAIN-->
<div id="main">
   
	<div class="clsContact">
    <div class="block">
           <div class="main_t">
        <div class="main_r">
          <div class="main_b">
            <div class="main_l">
              <div class="main_tl">
                <div class="main_tr">
                  <div class="main_bl">
                    <div class="main_br">
                      <div class="cls100_p">
                            <div class="clsInnerCommon">
							 <div class="clsContactForm">
								  <?php
								//Show Flash Message
								if($msg = $this->session->flashdata('flash_message'))
								{
									echo $msg;
								}
								$touser = $touser->row();
								?>
								  <!--SIGN-UP-->
						
									<form method="post" action="<?php echo site_url('userList/inviteProgrammer'); ?>">
									  <input type="hidden" name="new" value="user"/>
									  <h2><?php echo $this->lang->line('Invite Programmer'); ?></h2>
									  
									  <p><label><?php echo $this->lang->line('From'); ?>:</label><?php echo $loggedInUser->user_name; ?></p>
									  <p><label><?php echo $this->lang->line('To'); ?>:</label><input type="hidden" name="toid" value="<?php echo $touser->id; ?>" /><input type="text" name="touser" readonly="yes" value="<?php echo $touser->user_name; ?>" /></p>
									  <p><label><?php echo $this->lang->line('Project Name'); ?>:</label>	 
										 <select name="projects[]" multiple="multiple"> <?php 
											  foreach($projectsList as $user)
											  { ?>
												 <option value="<?php echo $user->id; ?>"><?php echo $user->project_name; ?></option> <?php 
											  } ?>
											  </select>
									  </p>
									  <p><label><?php echo $this->lang->line('Other User'); ?>:</label>
										 <input type="text" name="otheruser" size="40" value=""/><br />
										 <label>&nbsp;</label>
										 <?php echo $this->lang->line('If your favourite user is not in the dropdown list please enter into the Textbox'); ?>
										 <?php //echo form_error('email'); ?>
										<small><?php echo $this->lang->line('provide_valid_mail'); ?>. <a href="#"><?php echo $this->lang->line('view_privacy_policy'); ?></a>.</small></p>
									<p><label>&nbsp;</label><input type="submit" class="clsMini" value="<?php echo $this->lang->line('Submit');?>" name="inviteProgrammer"/></p>	
									</form>
								  <!--SIGN-UP-->
								 </div>
							 </div>
							</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
   
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>