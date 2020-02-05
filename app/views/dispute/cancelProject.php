<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>

<div id="main" >
<?php
//Show Flash Message
if($msg = $this->session->flashdata('flash_message'))
{
	echo $msg;
}
?>
<!--SIGN-UP-->
<div id="selSignUp">
  <div class="clsPostProject">
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
						<h2><?php echo $this->lang->line('Cancel project');?></h2>
                          <div class="clsHeads clearfix">
                            <div class="clsHeadingLeft clsFloatLeft">
                              <h3><span class="clsOptDetial"><?php echo $this->lang->line("Select the project");?></span></h3>
                            </div>
                            <div class="clsHeadingRight clsFloatRight">
                              <p class="clsFloatRight"> <span class="clsPostProject"> <a href="<?php echo site_url('dispute/viewOpenCases');?>" class="buttonBlack"><span><?php echo $this->lang->line("view open cases");?></span></a></span> </p>
                            </div>
                          </div>
                          <form method="post">
                            
                            <p>
                              <select name="project_id">
							  <option value="">--Select--</option>
                                <?php foreach($projects->result() as $project){?>
                                <option value="<?php echo $project->id;?>"><?php echo $project->project_name;?></option>
                                <?php } ?>
                              </select>
                            </p>
                            <p>
                              <input type="submit" name="submit" value="<?php echo $this->lang->line('Submit');?>" class="clsMini" >
                            </p>
                          </form>
                        </div>
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
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>
