<?php $this->load->view('admin/header'); ?>
<?php $this->load->view('admin/sidebar'); ?>

<div id="main">
  <div class="clsSettings">
    <div class="clsMainSettings">
	<div class="clsTop clsClearFixSub">
          <div class="clsNav">
         <?php /*?> <ul>
            <li><a href="<?php echo admin_url('payments/searchTransaction');?>"><b><?php echo $this->lang->line('Search'); ?></b></a></li>
			<li><a href="<?php echo admin_url('payments/addTransaction');?>"><b><?php echo $this->lang->line('Add Transaction'); ?></b></a></li>
			<li><a href="<?php echo admin_url('payments/releaseEscrow');?>"><b><?php echo $this->lang->line('Escrow Release'); ?></b></a></li>
			<li class="clsNoBorder"><a href="<?php echo admin_url('payments/viewTransaction');?>"><b><?php echo $this->lang->line('View All'); ?></b></a></li>
          </ul><?php */?>
        </div>
		<div class="clsTitle">
          <h3><?php echo $this->lang->line('Edit_bans'); ?></h3>
        </div>
      </div>
	     <?php
		//Show Flash Message
		if($msg = $this->session->flashdata('flash_message'))
		{
			echo $msg;
		}
	  ?>
	 	<h3><?php echo $this->lang->line('add_group'); ?></h3>
		<table class="table" cellpadding="2" cellspacing="0">
		 <form method="post" action="<?php echo admin_url('faq/addFaqCategory')?>">
        <tr>
		    <td><label><?php echo $this->lang->line('faq_category_name'); ?><span class="clsRed">*</span></label></td>
		    <td><input class="clsTextBox" type="text" name="faq_category_name" value="<?php echo set_value('faq_category_name'); ?>"/><?php echo form_error('faq_category_name'); ?></td>
		</tr>
         <tr>
		    <td></td>
			<td> <input type="hidden" name="operation" value="add" />
              <input type="submit" class="clsSubmitBt1" value="<?php echo $this->lang->line('submit'); ?>"  name="addFaqCategory"/>
		    </td>
		</tr>		  

      </form>
	  </table>
    </div>
  </div>
  <!-- End of clsSettings -->
</div>
<!-- End Of Main -->
<?php $this->load->view('admin/footer'); ?>
