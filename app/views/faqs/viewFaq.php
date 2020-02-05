<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<!--MAIN-->
<?php
		//Get Project Info
     	$faq = $faqs->row();
?>
<div id="main">
	  <!--POST PROJECT-->
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
                              <h2><?php echo $this->lang->line('title'); ?></h2>
							  

							  <!--FAQ ANSWER-->
							  <div>
							  <p><?php echo $faq->question ?></p>
							  <p><?php echo $faq->answer ?>.</p>
							<!--  <p><b>Related Topics:</b></p>-->
						<!--		<ul>
									<li><a href="#">Buyers</a></li>		
									<li><a href="#">Programmers</a></li>
								</ul>-->
							  </div>
							  <!--END OF FAQ ANSWER-->
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
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>
