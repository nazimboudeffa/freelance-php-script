<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<!--MAIN-->
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
							<h2><?php echo $this->lang->line('Search Result');?></h2>
							 <h3><span class="clsViewPro"><?php echo $this->lang->line('Search result for');?> <b><?php echo $keyword;?></b></span></h3>
								  <!--FAQ ANSWER-->
								  <div id="selFAQ" class="clsMarginTop">
								  <ul>
								  <?php
									if(isset($faqs) and $faqs->num_rows()>0)
									{
									foreach($faqs->result() as $faq)
									{
								  ?>
								  <li><a href="<?php echo site_url('faq/view/'.$faq->id); ?>"><?php echo highlight_phrase($faq->question,$keyword,'<b>','</b>')?></a></li>
								  <?php } }?>
								  </ul>
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
      </div>
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>