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
						      
							  <!-- page content -->
								<?php //pr($page_content->result());
						        if(isset($page_content) and $page_content->num_rows()>0) 
								  { 
								  $pages = $page_content->row();
								  ?>
								  <h2><?php echo $pages->page_title; ?></h2> <?php 
								  }
								if(isset($page_content) and $page_content->num_rows()>0)
								{ 
									foreach($page_content->result() as $page)
									{
									
										echo $page->content;
									}
								}
								?>
								<!-- End of page content --> 
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