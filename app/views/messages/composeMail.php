<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<?php
		//Get Project Info
     	$project = $projects->row();
		//pr($userList);
//		pr($previewMessages);
		//echo $previewMessages['to_id'];
		//foreach($previewMessages as $res)
	 	 // echo $res;
		//echo count($previewMessages)
		//$msg = $previewMessages->row(); 
?>
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
							  <h2><?php echo $this->lang->line('Post Message'); ?></h2>
								<!--PROJECT MESSAGE BOARD--> 
									  <div id="selPMB" class="clsMarginTop">
									
									 <p class="clsSitelinks"><?php echo $this->lang->line('You are currently logged in as');?> <a class="glow" href="<?php if($loggedInUser->role_id == '1') $res = 'buyer'; else $res = 'programmer'; echo site_url($res.'/viewprofile/'.$loggedInUser->id); ?>"><?php if(isset($loggedInUser) and is_object($loggedInUser))  echo $loggedInUser->user_name;?></a> (<a href="<?php echo site_url('users/logout'); ?>"><?php echo $this->lang->line('Logout') ?></a>).
								</p>
								<br />
								 
								<?php
								//Check the condition for the messages are saved or not
								if(isset($previewMessages))
								 { 
								   if(count($previewMessages) != '0')
									 {
								 ?>
								<!-- Preview Mail start Here -->

  
						  <h3><span class="clsPMB"><?php echo $this->lang->line('Preview Message');?></span></h3>
						  <?php 

						  $no=1;
						  if($no == '0')
						    {
						     echo '<br>';
							 echo 'There is no last trasaction';
						     echo '<br><br>'; 
							 }
						   
						  if($no != '0')
						    { ?>

                             
						    <p><label><?php echo $this->lang->line('From'); ?></label><?php if(isset($loggedInUser) and is_object($loggedInUser))  echo $loggedInUser->user_name;?></p>
						   
						    <p><label><?php echo $this->lang->line('To'); ?> </label> <?php $i=0; foreach($userList as $user) { if($user->id == $previewMessages['to_id']) { $i=1; echo $user->user_name; break; } } if($i == '0') echo 'All User [ Public Message ]'?> </p>
						  
						  					  
						  <p><label><?php echo $this->lang->line('Message'); ?></b></label><?php echo $previewMessages['message']; ?></p>
						  <p><label><?php echo $this->lang->line('Date'); ?></b></label><?php $date = $previewMessages['created']; echo get_date($date); ?></p>
						   <?php } ?>
						 


<!-- Preview mail end here -->
    <?php 

  } 
}
?>

                           

	 
						    						
							<h3><span class="clsOptContact"><?php echo $this->lang->line('Post Message'); ?></span></h3>
							
							<form method="post" action="<?php echo site_url('messages/composeMail'); ?>" >
					  	   
								<p><label><?php echo $this->lang->line('From'); ?>:</label> <?php if(isset($loggedInUser) and is_object($loggedInUser))  echo $loggedInUser->user_name;?></p>
								
								
								<p><label><?php echo $this->lang->line('Project Name'); ?>:</label><?php $i =0 ;  ?>	 
									<select id="to" name="to" onchange="javascript:return load_user();" >

										 <?php 

											//Load project name
										   foreach($wonProjects as $res)
											 {  
											 ?>
                                      <!-- Load the Users who are all post messages for the particular project -->
                                      <option value="<?php echo $res->id; ?>"><?php echo $res->project_name; ?></option>
                                      <?php 
												

											 }  ?>
	</select>
								</p>
								<p><label><?php echo $this->lang->line('Message'); ?>:</label><textarea rows="10" name="message" cols="60"><?php echo set_value('message'); ?></textarea>
	                             </p>
							<p><label>&nbsp;</label><small><?php echo $this->lang->line('Tip');?></small></p>
							<p><label>&nbsp;</label><?php echo form_error('message'); ?></p>							
							<p><label>&nbsp;</label><input class="clsSmall" type="submit" value="<?php echo $this->lang->line('Submit');?>" name="postMessage"/>
	                           <input  class="clsSmall" type="submit" value="<?php echo $this->lang->line('Preview');?>" name="previewMessage"/></p>
							</form>
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

    </div>
    <!--END OF POST PROJECT-->
 
  <?php /*?><form method="post" action="<?php echo site_url('messages/composeMail'); ?>" >
		
      
	  
  <p class="clsClearFix"><span class="clsPmgLeft"><b><?php echo $this->lang->line('From'); ?>:</b></span>
  <span class="clsPmgRight"> 
  <?php if(isset($loggedInUser) and is_object($loggedInUser))  echo $loggedInUser->user_name;?></span>
  <p class="clsClearFix"><span class="clsPmgLeft"><b><?php echo $this->lang->line('Project Name'); ?>:</b></span>
	<span class="clsPmgRight"> 
		<?php $i =0 ;  ?>	 
		<select id="to" name="to" onchange="javascript:return load_user();" >
		     <?php 
				//Load project name
			   foreach($wonProjects as $res)
			     {  
				 ?> 
					 <!-- Load the Users who are all post messages for the particular project -->
					 
						<option value="<?php echo $res->id; ?>"><?php echo $res->project_name; ?></option> <?php 
			        
				 }  ?>	 
		</select>
    </span>
  </p>	
	  <p class="clsClearFix"><span class="clsPmgLeft"><b><?php echo $this->lang->line('Message'); ?>:</b></span><span class="clsPmgRight"><textarea rows="10" name="message" cols="60"><?php echo set_value('message'); ?></textarea>
Tip: You can post programming code by placing it within [code] and [/code] tags. </span>
</p>
	<?php echo form_error('message'); ?>

	  <p class="clsClearFix"><span class="clsPmgLeft">&nbsp;</span>
	    <span class="clsPmgRight">
	      <input class="clsLogin" type="submit" value="Submit" name="postMessage"/>
	      <input  class="clsLogin" type="submit" value="Preview" name="previewMessage"/>
	    </span>
	  </p>	  
     
      <!--END OF PROJECT MESSAGE BOARD-->
	  </form><?php */?>

	  
      <!--END OF POST PROJECT-->
     </div>

</div>
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>
