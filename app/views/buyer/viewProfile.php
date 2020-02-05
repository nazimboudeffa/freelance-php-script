<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<!--MAIN-->
<div id="main">
<?php
if(isset($userDetails) and $userDetails->num_rows()>0)
{
	$user = $userDetails->row();
	$condition1=array('subscriptionuser.username'=>$user->id);
								$certified1= $this->certificate_model->getCertificateUser($condition1);
	}  ?>
      <!--POST PROJECT-->
      <div class="clsInnerpageCommon">
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
                              <h2><? echo $this->lang->line('Buyer Profile');?><?php echo $this->lang->line('-');?><?php echo $user->user_name;?></h2>
                             <table cellspacing="1" cellpadding="2" width="96%">
                                <tbody><tr>
                                  <td width="15%" class="dt"><?php echo $this->lang->line('Username:');?></td>
								  <td width="200" class="dt"><?php echo $user->user_name; ?>
								  <?php 
							   $condition1=array('subscriptionuser.username'=>$user->id);
								$certified1= $this->certificate_model->getCertificateUser($condition1);
								if($certified1->num_rows()>0)
			                    {
									// get the validity
									$validdate=$certified1->row();
									$end_date=$validdate->valid; 
									$created_date=$validdate->created;
									$valid_date=date('d/m/Y',$created_date);
								    $next=$created_date+($end_date * 24 * 60 * 60);
									$next_day= date('d/m/Y', $next) ."\n";
							        if(time()<=$next)
								    {?>
								<img src="<?php echo image_url('certified.gif');?>"  title="<?php echo $this->lang->line('Certified Member') ?>" alt="<?php  echo $this->lang->line('Certified Member')?>"/>
								<?php } 
								   }?></td>
                                </tr>
                                <tr>
                                  <td class="dt1 dt0"><?php echo $this->lang->line('Name/Company:');?></td>
                                  <td class="dt1"><?php echo $user->name; ?></td>								  
                                </tr>
								<tr>
                                  <td class="dt2 dt0"><?php echo $this->lang->line('Location:');?></td>
                                  <td class="dt2"> <?php if(is_object($country)) echo $country->country_name; ?></td>								  
		                        </tr>
                                <tr>
                                  <td class="dt1 dt0"><?php echo $this->lang->line('Ratings:');?></td>
                                  <td class="dt1"><?php if($user->num_reviews == 0)
							echo '(No Feedback Yet) ';
							else{ ?>
							
							<img border="0" src="<?php echo image_url('rating_'.$user->user_rating.'.gif');?>"/><?php echo $this->lang->line('(');?> <b><?php echo $user->num_reviews;?>
							</b><a href="<?php echo site_url('buyer/review/'.$user->id);?>"><?php echo $this->lang->line('reviews');?></a> ) 
							<?php } ?></td>								  
                                </tr>
                                <tr>
                                  <td class="dt2 dt0"><?php echo $this->lang->line('Communication Method:');?></td>
                                  <td class="dt2"><?php 
							$cnt = '';
							foreach($userContacts->result() as $urow){
								if($urow->msn != "")
								$cnt .= '<img src="'.image_url('msn.png').'" width="21" height="19" title="msn"/>'." ";
								if($urow->gtalk != "")
								$cnt .= '<img src="'.image_url('gtalk.png').'" width="24" height="19" title="gtalk"/>'." ";
								if($urow->yahoo != "")
								$cnt .= '<img src="'.image_url('yahoo.png').'" width="23" height="19" title="yahoo"/>'." ";
								if($urow->skype != "")
								$cnt .= '<img src="'.image_url('skype.png').'" width="19" height="19" title="skype"/>'." ";
								echo $cnt;
							} ?></td>								  
                                </tr>
								<tr>
                                  <td class="dt1 dt0"><?php echo $this->lang->line('Member Since:');?></td>
                                  <td class="dt1"><?php echo get_datetime($user->created); ?></td>								  
		                        </tr>
                                <tr>
                                  <td class="dt2 dt0"><?php echo $this->lang->line('Open Projects:');?></td>
                                  <td class="dt2"><?php
							if(isset($openProjects) and $openProjects->num_rows()>0)
							{
							$i=1;
							?> 
							<ul>
							<?php
							foreach($openProjects->result() as $openProject)
							{
							?>
							<li><?php echo $i.".";?><a href="<?php echo site_url('project/view/'.$openProject->id); ?>"><?php echo $openProject->project_name; ?></a></li>
							<?php $i++;
							} ?>
							</ul>
							<?php } else echo "Nil";?></td>								  
                                </tr>
							    <tr>
                                  <td class="dt1 dt0"><?php echo $this->lang->line('Closed Projects:');?></td>
                                  <td class="dt1"><?php
							if(isset($closedProjects) and $closedProjects->num_rows()>0)
							{
							$i=1;
							?> 
							<ul>
							<?php
							foreach($closedProjects->result() as $closedProject)
							{
							?>
							<li><?php echo $i.".";?><a href="<?php echo site_url('project/view/'.$closedProject->id); ?>"><?php echo $closedProject->project_name; ?></a></li>
							<?php $i++;
							} ?>
							</ul>
							<?php } else echo "Nil";?></td>								  
		                        </tr>
                                <tr>
                                  <td class="dt2 dt0"><?php echo $this->lang->line('Cancelled Projects:');?></td>
                                  <td class="dt2">
								  <?php
							if(isset($cancelledProjects) and $cancelledProjects->num_rows()>0)
							{
							$i=1;
							?> 
							<ul>
							<?php
							foreach($cancelledProjects->result() as $cancelledProject)
							{
							?>
							<li><?php echo $i.".";?><a href="<?php echo site_url('project/view/'.$cancelledProject->id); ?>"><?php echo $cancelledProject->project_name; ?></a></li>
							<?php $i++;
							} ?>
							</ul>
							<?php } else echo "Nil";?>						  								  								  
								</td>								  
                                </tr>
								
                              </tbody></table>
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
    </div>
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>