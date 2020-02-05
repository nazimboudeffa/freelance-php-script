<?php $this->load->view('header'); ?>
<?php $this->load->view('sidebar'); ?>
<!--MAIN-->
<div id="main">
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
						  <form method="post" action="<?php echo site_url('programmer/retractBid');?>">
                            <div class="clsInnerCommon">
                              <h2><?php echo $this->lang->line('Retract Bid !');?></h2>
							  <p><?php echo $this->lang->line('Are you sure you want to retract your bid');?></p>
							  <p>
								<input type="submit" name="retractBid" value="<?php echo $this->lang->line('Retract');?>" class="clsSmall" />
								<input type="hidden" name="bidId" value="<?php echo $bidid;?>" />
							  </p>
                            </div>
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
      <!--END OF POST PROJECT-->
    </div>
<!--END OF MAIN-->
<?php $this->load->view('footer'); ?>